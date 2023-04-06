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

    public static function lengthNotBase(mixed $input, int $base, ?string $chars = null, null|string|Throwable $description = null): void;

    public static function lengthBetween(mixed $input, mixed $minimum, mixed $maximum, null|string|Throwable $description = null): void;

    public static function lengthNotBetween(mixed $input, mixed $minimum, mixed $maximum, null|string|Throwable $description = null): void;

    public static function lengthDate(mixed $input, string $format = 'Y-m-d', null|string|Throwable $description = null): void;

    public static function lengthNotDate(mixed $input, string $format = 'Y-m-d', null|string|Throwable $description = null): void;

    public static function lengthDateTime(mixed $input, ?string $format = null, null|string|Throwable $description = null): void;

    public static function lengthNotDateTime(mixed $input, ?string $format = null, null|string|Throwable $description = null): void;

    public static function lengthDigit(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function lengthNotDigit(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function lengthEquals(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function lengthNotEquals(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function lengthEquivalent(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function lengthNotEquivalent(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function lengthEven(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthNotEven(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthFactor(mixed $input, int $dividend, null|string|Throwable $description = null): void;

    public static function lengthNotFactor(mixed $input, int $dividend, null|string|Throwable $description = null): void;

    public static function lengthFibonacci(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthNotFibonacci(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthFinite(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthNotFinite(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthFloatType(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthNotFloatType(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthFloatVal(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthNotFloatVal(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthGreaterThan(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function lengthNotGreaterThan(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function lengthIdentical(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function lengthNotIdentical(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function lengthIn(mixed $input, mixed $haystack, bool $compareIdentical = false, null|string|Throwable $description = null): void;

    public static function lengthNotIn(mixed $input, mixed $haystack, bool $compareIdentical = false, null|string|Throwable $description = null): void;

    public static function lengthInfinite(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthNotInfinite(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthIntType(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthNotIntType(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthIntVal(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthNotIntVal(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthLeapDate(mixed $input, string $format, null|string|Throwable $description = null): void;

    public static function lengthNotLeapDate(mixed $input, string $format, null|string|Throwable $description = null): void;

    public static function lengthLeapYear(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthNotLeapYear(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthLessThan(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function lengthNotLessThan(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function lengthMaxAge(mixed $input, int $age, ?string $format = null, null|string|Throwable $description = null): void;

    public static function lengthNotMaxAge(mixed $input, int $age, ?string $format = null, null|string|Throwable $description = null): void;

    public static function lengthMinAge(mixed $input, int $age, ?string $format = null, null|string|Throwable $description = null): void;

    public static function lengthNotMinAge(mixed $input, int $age, ?string $format = null, null|string|Throwable $description = null): void;

    public static function lengthMultiple(mixed $input, int $multipleOf, null|string|Throwable $description = null): void;

    public static function lengthNotMultiple(mixed $input, int $multipleOf, null|string|Throwable $description = null): void;

    public static function lengthNegative(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthNotNegative(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthNumber(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthNotNumber(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthNumericVal(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthNotNumericVal(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthOdd(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthNotOdd(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthPerfectSquare(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthNotPerfectSquare(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthPositive(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthNotPositive(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthPrimeNumber(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthNotPrimeNumber(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthRoman(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthNotRoman(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthStringType(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthNotStringType(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthStringVal(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthNotStringVal(mixed $input, null|string|Throwable $description = null): void;

    public static function lengthTime(mixed $input, string $format = 'H:i:s', null|string|Throwable $description = null): void;

    public static function lengthNotTime(mixed $input, string $format = 'H:i:s', null|string|Throwable $description = null): void;
}
