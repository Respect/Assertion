<?php

/*
 * This file is part of Respect/Assertion.
 *
 * (c) Henrique Moody <henriquemoody@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 */

declare(strict_types=1);

namespace Respect\Assertion;

use Exception;
use Respect\Assertion\Assertor\AllAssertor;
use Respect\Assertion\Assertor\LengthAssertor;
use Respect\Assertion\Assertor\MaxAssertor;
use Respect\Assertion\Assertor\MinAssertor;
use Respect\Assertion\Creator\ComposedCreator;
use Respect\Assertion\Creator\KeyCreator;
use Respect\Assertion\Creator\NotCreator;
use Respect\Assertion\Creator\NullOrCreator;
use Respect\Assertion\Creator\StandardCreator;
use Respect\Assertion\Exception\CannotCreateAssertionException;

use function array_shift;

/**
 * @mixin AssertMixin
 */
final class Assert
{
    /**
     * @var AssertionCreator
     */
    private static $assertionCreator;

    /**
     * @param mixed[] $parameters
     *
     * @throws CannotCreateAssertionException
     * @throws Exception
     */
    public static function __callStatic(string $name, array $parameters): void
    {
        $input = array_shift($parameters);

        $assertion = self::getAssertionCreator()->create($name, $parameters);
        $assertion->assert($input);
    }

    /**
     * @param mixed $input
     */
    public static function that($input): ChainAssert
    {
        return new ChainAssert($input);
    }

    private static function getAssertionCreator(): AssertionCreator
    {
        if (!self::$assertionCreator instanceof AssertionCreator) {
            self::$assertionCreator = new ComposedCreator(
                new MaxAssertor(),
                new ComposedCreator(
                    new MinAssertor(),
                    new ComposedCreator(
                        new LengthAssertor(),
                        new ComposedCreator(
                            new AllAssertor(),
                            new KeyCreator(new NullOrCreator(new NotCreator(new StandardCreator())))
                        )
                    )
                )
            );
        }

        return self::$assertionCreator;
    }
}
