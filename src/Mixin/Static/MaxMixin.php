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
interface MaxMixin
{
    public static function max(mixed $input, mixed $compareTo, null|string|Throwable $description = null): self;

    public static function maxBase(mixed $input, int $base, ?string $chars = null, null|string|Throwable $description = null): void;

    public static function maxNotBase(mixed $input, int $base, ?string $chars = null, null|string|Throwable $description = null): void;

    public static function maxBetween(mixed $input, mixed $minimum, mixed $maximum, null|string|Throwable $description = null): void;

    public static function maxNotBetween(mixed $input, mixed $minimum, mixed $maximum, null|string|Throwable $description = null): void;

    public static function maxDate(mixed $input, string $format = 'Y-m-d', null|string|Throwable $description = null): void;

    public static function maxNotDate(mixed $input, string $format = 'Y-m-d', null|string|Throwable $description = null): void;

    public static function maxDateTime(mixed $input, ?string $format = null, null|string|Throwable $description = null): void;

    public static function maxNotDateTime(mixed $input, ?string $format = null, null|string|Throwable $description = null): void;

    public static function maxDigit(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function maxNotDigit(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function maxEquals(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function maxNotEquals(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function maxEquivalent(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function maxNotEquivalent(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function maxEven(mixed $input, null|string|Throwable $description = null): void;

    public static function maxNotEven(mixed $input, null|string|Throwable $description = null): void;

    public static function maxFactor(mixed $input, int $dividend, null|string|Throwable $description = null): void;

    public static function maxNotFactor(mixed $input, int $dividend, null|string|Throwable $description = null): void;

    public static function maxFibonacci(mixed $input, null|string|Throwable $description = null): void;

    public static function maxNotFibonacci(mixed $input, null|string|Throwable $description = null): void;

    public static function maxFinite(mixed $input, null|string|Throwable $description = null): void;

    public static function maxNotFinite(mixed $input, null|string|Throwable $description = null): void;

    public static function maxFloatType(mixed $input, null|string|Throwable $description = null): void;

    public static function maxNotFloatType(mixed $input, null|string|Throwable $description = null): void;

    public static function maxFloatVal(mixed $input, null|string|Throwable $description = null): void;

    public static function maxNotFloatVal(mixed $input, null|string|Throwable $description = null): void;

    public static function maxGreaterThan(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function maxNotGreaterThan(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function maxIdentical(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function maxNotIdentical(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function maxIn(mixed $input, mixed $haystack, bool $compareIdentical = false, null|string|Throwable $description = null): void;

    public static function maxNotIn(mixed $input, mixed $haystack, bool $compareIdentical = false, null|string|Throwable $description = null): void;

    public static function maxInfinite(mixed $input, null|string|Throwable $description = null): void;

    public static function maxNotInfinite(mixed $input, null|string|Throwable $description = null): void;

    public static function maxIntType(mixed $input, null|string|Throwable $description = null): void;

    public static function maxNotIntType(mixed $input, null|string|Throwable $description = null): void;

    public static function maxIntVal(mixed $input, null|string|Throwable $description = null): void;

    public static function maxNotIntVal(mixed $input, null|string|Throwable $description = null): void;

    public static function maxLeapDate(mixed $input, string $format, null|string|Throwable $description = null): void;

    public static function maxNotLeapDate(mixed $input, string $format, null|string|Throwable $description = null): void;

    public static function maxLeapYear(mixed $input, null|string|Throwable $description = null): void;

    public static function maxNotLeapYear(mixed $input, null|string|Throwable $description = null): void;

    public static function maxLessThan(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function maxNotLessThan(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function maxMaxAge(mixed $input, int $age, ?string $format = null, null|string|Throwable $description = null): void;

    public static function maxNotMaxAge(mixed $input, int $age, ?string $format = null, null|string|Throwable $description = null): void;

    public static function maxMinAge(mixed $input, int $age, ?string $format = null, null|string|Throwable $description = null): void;

    public static function maxNotMinAge(mixed $input, int $age, ?string $format = null, null|string|Throwable $description = null): void;

    public static function maxMultiple(mixed $input, int $multipleOf, null|string|Throwable $description = null): void;

    public static function maxNotMultiple(mixed $input, int $multipleOf, null|string|Throwable $description = null): void;

    public static function maxNegative(mixed $input, null|string|Throwable $description = null): void;

    public static function maxNotNegative(mixed $input, null|string|Throwable $description = null): void;

    public static function maxNumber(mixed $input, null|string|Throwable $description = null): void;

    public static function maxNotNumber(mixed $input, null|string|Throwable $description = null): void;

    public static function maxNumericVal(mixed $input, null|string|Throwable $description = null): void;

    public static function maxNotNumericVal(mixed $input, null|string|Throwable $description = null): void;

    public static function maxOdd(mixed $input, null|string|Throwable $description = null): void;

    public static function maxNotOdd(mixed $input, null|string|Throwable $description = null): void;

    public static function maxPerfectSquare(mixed $input, null|string|Throwable $description = null): void;

    public static function maxNotPerfectSquare(mixed $input, null|string|Throwable $description = null): void;

    public static function maxPositive(mixed $input, null|string|Throwable $description = null): void;

    public static function maxNotPositive(mixed $input, null|string|Throwable $description = null): void;

    public static function maxPrimeNumber(mixed $input, null|string|Throwable $description = null): void;

    public static function maxNotPrimeNumber(mixed $input, null|string|Throwable $description = null): void;

    public static function maxRoman(mixed $input, null|string|Throwable $description = null): void;

    public static function maxNotRoman(mixed $input, null|string|Throwable $description = null): void;

    public static function maxStringType(mixed $input, null|string|Throwable $description = null): void;

    public static function maxNotStringType(mixed $input, null|string|Throwable $description = null): void;

    public static function maxStringVal(mixed $input, null|string|Throwable $description = null): void;

    public static function maxNotStringVal(mixed $input, null|string|Throwable $description = null): void;

    public static function maxTime(mixed $input, string $format = 'H:i:s', null|string|Throwable $description = null): void;

    public static function maxNotTime(mixed $input, string $format = 'H:i:s', null|string|Throwable $description = null): void;
}
