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
interface MinMixin
{
    public static function min(mixed $input, mixed $compareTo, null|string|Throwable $description = null): self;

    public static function minBase(mixed $input, int $base, ?string $chars = null, null|string|Throwable $description = null): void;

    public static function minBetween(mixed $input, mixed $minimum, mixed $maximum, null|string|Throwable $description = null): void;

    public static function minDate(mixed $input, string $format = 'Y-m-d', null|string|Throwable $description = null): void;

    public static function minDateTime(mixed $input, ?string $format = null, null|string|Throwable $description = null): void;

    public static function minDigit(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function minEquals(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function minEquivalent(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function minEven(mixed $input, null|string|Throwable $description = null): void;

    public static function minFactor(mixed $input, int $dividend, null|string|Throwable $description = null): void;

    public static function minFibonacci(mixed $input, null|string|Throwable $description = null): void;

    public static function minFinite(mixed $input, null|string|Throwable $description = null): void;

    public static function minFloatType(mixed $input, null|string|Throwable $description = null): void;

    public static function minFloatVal(mixed $input, null|string|Throwable $description = null): void;

    public static function minGreaterThan(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function minIdentical(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function minIn(mixed $input, mixed $haystack, bool $compareIdentical = false, null|string|Throwable $description = null): void;

    public static function minInfinite(mixed $input, null|string|Throwable $description = null): void;

    public static function minIntType(mixed $input, null|string|Throwable $description = null): void;

    public static function minIntVal(mixed $input, null|string|Throwable $description = null): void;

    public static function minLeapDate(mixed $input, string $format, null|string|Throwable $description = null): void;

    public static function minLeapYear(mixed $input, null|string|Throwable $description = null): void;

    public static function minLessThan(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function minMaxAge(mixed $input, int $age, ?string $format = null, null|string|Throwable $description = null): void;

    public static function minMinAge(mixed $input, int $age, ?string $format = null, null|string|Throwable $description = null): void;

    public static function minMultiple(mixed $input, int $multipleOf, null|string|Throwable $description = null): void;

    public static function minNegative(mixed $input, null|string|Throwable $description = null): void;

    public static function minNumber(mixed $input, null|string|Throwable $description = null): void;

    public static function minNumericVal(mixed $input, null|string|Throwable $description = null): void;

    public static function minOdd(mixed $input, null|string|Throwable $description = null): void;

    public static function minPerfectSquare(mixed $input, null|string|Throwable $description = null): void;

    public static function minPositive(mixed $input, null|string|Throwable $description = null): void;

    public static function minPrimeNumber(mixed $input, null|string|Throwable $description = null): void;

    public static function minRoman(mixed $input, null|string|Throwable $description = null): void;

    public static function minStringType(mixed $input, null|string|Throwable $description = null): void;

    public static function minStringVal(mixed $input, null|string|Throwable $description = null): void;

    public static function minTime(mixed $input, string $format = 'H:i:s', null|string|Throwable $description = null): void;
}
