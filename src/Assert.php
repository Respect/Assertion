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
use Respect\Assertion\Creator\PropertyCreator;
use Respect\Assertion\Creator\StandardCreator;
use Respect\Assertion\Exception\CannotCreateAssertionException;
use Respect\Assertion\Mixin\Static\Mixin;
use Throwable;

use function array_shift;

/**
 * @mixin Mixin
 */
final class Assert
{
    private static ?Creator $creator = null;

    public static function that(mixed $input, null|string|Throwable $description = null): ChainAssert
    {
        return new ChainAssert($input, $description);
    }

    private static function getCreator(): Creator
    {
        if (!self::$creator instanceof Creator) {
            self::$creator = new ComposedCreator(
                new MaxAssertor(),
                new ComposedCreator(
                    new MinAssertor(),
                    new ComposedCreator(
                        new LengthAssertor(),
                        new ComposedCreator(
                            new AllAssertor(),
                            new PropertyCreator(
                                new KeyCreator(new NullOrCreator(new NotCreator(new StandardCreator())))
                            )
                        )
                    )
                )
            );
        }

        return self::$creator;
    }

    /**
     * @param mixed[] $parameters
     *
     * @throws CannotCreateAssertionException
     * @throws Exception
     */
    public static function __callStatic(string $name, array $parameters): void
    {
        $input = array_shift($parameters);

        $assertion = self::getCreator()->create($name, $parameters);
        $assertion->assert($input);
    }
}
