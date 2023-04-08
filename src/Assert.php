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
use Respect\Assertion\Chain\AssociativeSimpleChain;
use Respect\Assertion\Chain\RegularFullChain;
use Respect\Assertion\Chain\RegularSimpleChain;
use Respect\Assertion\Creator\CompositeCreator;
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

    public static function that(mixed $input, null|string|Throwable $description = null): RegularFullChain
    {
        return new RegularFullChain(self::getCreator(), $input, $description, '');
    }

    public static function thatAll(mixed $input, null|string|Throwable $description = null): RegularSimpleChain
    {
        return new RegularSimpleChain(self::getCreator(), $input, $description, 'all');
    }

    public static function thatNot(mixed $input, null|string|Throwable $description = null): RegularSimpleChain
    {
        return new RegularSimpleChain(self::getCreator(), $input, $description, 'not');
    }

    public static function thatNullOr(mixed $input, null|string|Throwable $description = null): RegularSimpleChain
    {
        return new RegularSimpleChain(self::getCreator(), $input, $description, 'nullOr');
    }

    public static function thatKey(
        mixed $input,
        int|string $key,
        null|string|Throwable $description = null
    ): AssociativeSimpleChain {
        return new AssociativeSimpleChain(self::getCreator(), $key, $input, $description, 'key');
    }

    public static function thatProperty(
        mixed $input,
        string $property,
        null|string|Throwable $description = null
    ): AssociativeSimpleChain {
        return new AssociativeSimpleChain(self::getCreator(), $property, $input, $description, 'property');
    }

    private static function getCreator(): Creator
    {
        if (!self::$creator instanceof Creator) {
            self::$creator = CompositeCreator::createDefault();
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
