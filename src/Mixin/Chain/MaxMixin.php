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

namespace Respect\Assertion\Mixin\Chain;

use Throwable;

// phpcs:disable Generic.Files.LineLength.TooLong
interface MaxMixin
{
    public function maxBase(int $base, ?string $chars = null, null|string|Throwable $description = null): static;

    public function maxNotBase(int $base, ?string $chars = null, null|string|Throwable $description = null): static;

    public function maxBetween(mixed $minimum, mixed $maximum, null|string|Throwable $description = null): static;

    public function maxNotBetween(mixed $minimum, mixed $maximum, null|string|Throwable $description = null): static;

    public function maxDate(string $format = 'Y-m-d', null|string|Throwable $description = null): static;

    public function maxNotDate(string $format = 'Y-m-d', null|string|Throwable $description = null): static;

    public function maxDateTime(?string $format = null, null|string|Throwable $description = null): static;

    public function maxNotDateTime(?string $format = null, null|string|Throwable $description = null): static;

    public function maxDigit(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function maxNotDigit(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function maxEquals(mixed $compareTo, null|string|Throwable $description = null): static;

    public function maxNotEquals(mixed $compareTo, null|string|Throwable $description = null): static;

    public function maxEquivalent(mixed $compareTo, null|string|Throwable $description = null): static;

    public function maxNotEquivalent(mixed $compareTo, null|string|Throwable $description = null): static;

    public function maxEven(null|string|Throwable $description = null): static;

    public function maxNotEven(null|string|Throwable $description = null): static;

    public function maxFactor(int $dividend, null|string|Throwable $description = null): static;

    public function maxNotFactor(int $dividend, null|string|Throwable $description = null): static;

    public function maxFibonacci(null|string|Throwable $description = null): static;

    public function maxNotFibonacci(null|string|Throwable $description = null): static;

    public function maxFinite(null|string|Throwable $description = null): static;

    public function maxNotFinite(null|string|Throwable $description = null): static;

    public function maxFloatType(null|string|Throwable $description = null): static;

    public function maxNotFloatType(null|string|Throwable $description = null): static;

    public function maxFloatVal(null|string|Throwable $description = null): static;

    public function maxNotFloatVal(null|string|Throwable $description = null): static;

    public function maxGreaterThan(mixed $compareTo, null|string|Throwable $description = null): static;

    public function maxNotGreaterThan(mixed $compareTo, null|string|Throwable $description = null): static;

    public function maxIdentical(mixed $compareTo, null|string|Throwable $description = null): static;

    public function maxNotIdentical(mixed $compareTo, null|string|Throwable $description = null): static;

    public function maxIn(mixed $haystack, bool $compareIdentical = false, null|string|Throwable $description = null): static;

    public function maxNotIn(mixed $haystack, bool $compareIdentical = false, null|string|Throwable $description = null): static;

    public function maxInfinite(null|string|Throwable $description = null): static;

    public function maxNotInfinite(null|string|Throwable $description = null): static;

    public function maxIntType(null|string|Throwable $description = null): static;

    public function maxNotIntType(null|string|Throwable $description = null): static;

    public function maxIntVal(null|string|Throwable $description = null): static;

    public function maxNotIntVal(null|string|Throwable $description = null): static;

    public function maxLeapDate(string $format, null|string|Throwable $description = null): static;

    public function maxNotLeapDate(string $format, null|string|Throwable $description = null): static;

    public function maxLeapYear(null|string|Throwable $description = null): static;

    public function maxNotLeapYear(null|string|Throwable $description = null): static;

    public function maxLessThan(mixed $compareTo, null|string|Throwable $description = null): static;

    public function maxNotLessThan(mixed $compareTo, null|string|Throwable $description = null): static;

    public function maxMaxAge(int $age, ?string $format = null, null|string|Throwable $description = null): static;

    public function maxNotMaxAge(int $age, ?string $format = null, null|string|Throwable $description = null): static;

    public function maxMinAge(int $age, ?string $format = null, null|string|Throwable $description = null): static;

    public function maxNotMinAge(int $age, ?string $format = null, null|string|Throwable $description = null): static;

    public function maxMultiple(int $multipleOf, null|string|Throwable $description = null): static;

    public function maxNotMultiple(int $multipleOf, null|string|Throwable $description = null): static;

    public function maxNegative(null|string|Throwable $description = null): static;

    public function maxNotNegative(null|string|Throwable $description = null): static;

    public function maxNumber(null|string|Throwable $description = null): static;

    public function maxNotNumber(null|string|Throwable $description = null): static;

    public function maxNumericVal(null|string|Throwable $description = null): static;

    public function maxNotNumericVal(null|string|Throwable $description = null): static;

    public function maxOdd(null|string|Throwable $description = null): static;

    public function maxNotOdd(null|string|Throwable $description = null): static;

    public function maxPerfectSquare(null|string|Throwable $description = null): static;

    public function maxNotPerfectSquare(null|string|Throwable $description = null): static;

    public function maxPositive(null|string|Throwable $description = null): static;

    public function maxNotPositive(null|string|Throwable $description = null): static;

    public function maxPrimeNumber(null|string|Throwable $description = null): static;

    public function maxNotPrimeNumber(null|string|Throwable $description = null): static;

    public function maxRoman(null|string|Throwable $description = null): static;

    public function maxNotRoman(null|string|Throwable $description = null): static;

    public function maxStringType(null|string|Throwable $description = null): static;

    public function maxNotStringType(null|string|Throwable $description = null): static;

    public function maxStringVal(null|string|Throwable $description = null): static;

    public function maxNotStringVal(null|string|Throwable $description = null): static;

    public function maxTime(string $format = 'H:i:s', null|string|Throwable $description = null): static;

    public function maxNotTime(string $format = 'H:i:s', null|string|Throwable $description = null): static;
}
