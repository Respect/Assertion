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

namespace Respect\Assertion\Mixin\Static;

use Throwable;

// phpcs:disable Generic.Files.LineLength.TooLong
interface LengthMixin
{
    public static function length(mixed $input, mixed $compareTo, null|string|Throwable $description = null): self;

    public static function lengthBase(mixed $input, int $base, ?string $chars = null, null|string|Throwable $description = null): void;

    public static function lengthBetween(mixed $input, mixed $minimum, mixed $maximum, null|string|Throwable $description = null): void;

    public static function lengthDate(mixed $input, string $format = 'Y-m-d', null|string|Throwable $description = null): void;

    public static function lengthDateTime(mixed $input, ?string $format = null, null|string|Throwable $description = null): void;

    public static function lengthDigit(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function lengthEquals(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function lengthEquivalent(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function lengthEven(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthFactor(mixed $input, int $dividend, null|string|Throwable $description = null): void;

    public static function lengthFibonacci(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthFinite(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthFloatType(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthFloatVal(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthGreaterThan(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function lengthIdentical(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function lengthIn(mixed $input, mixed $haystack, bool $compareIdentical = false, null|string|Throwable $description = null): void;

    public static function lengthInfinite(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthIntType(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthIntVal(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthLeapDate(mixed $input, string $format, null|string|Throwable $description = null): void;

    public static function lengthLeapYear(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthLessThan(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function lengthMaxAge(mixed $input, int $age, ?string $format = null, null|string|Throwable $description = null): void;

    public static function lengthMinAge(mixed $input, int $age, ?string $format = null, null|string|Throwable $description = null): void;

    public static function lengthMultiple(mixed $input, int $multipleOf, null|string|Throwable $description = null): void;

    public static function lengthNegative(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthNumber(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthNumericVal(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthOdd(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthPerfectSquare(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthPositive(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthPrimeNumber(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthRoman(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthStringType(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthStringVal(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthTime(mixed $input, string $format = 'H:i:s', null|string|Throwable $description = null): void;
}
