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
interface MinMixin
{
    public function minBase(int $base, ?string $chars = null, null|string|Throwable $description = null): static;

    public function minNotBase(int $base, ?string $chars = null, null|string|Throwable $description = null): static;

    public function minBetween(mixed $minimum, mixed $maximum, null|string|Throwable $description = null): static;

    public function minNotBetween(mixed $minimum, mixed $maximum, null|string|Throwable $description = null): static;

    public function minDate(string $format = 'Y-m-d', null|string|Throwable $description = null): static;

    public function minNotDate(string $format = 'Y-m-d', null|string|Throwable $description = null): static;

    public function minDateTime(?string $format = null, null|string|Throwable $description = null): static;

    public function minNotDateTime(?string $format = null, null|string|Throwable $description = null): static;

    public function minDigit(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function minNotDigit(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function minEquals(mixed $compareTo, null|string|Throwable $description = null): static;

    public function minNotEquals(mixed $compareTo, null|string|Throwable $description = null): static;

    public function minEquivalent(mixed $compareTo, null|string|Throwable $description = null): static;

    public function minNotEquivalent(mixed $compareTo, null|string|Throwable $description = null): static;

    public function minEven(null|string|Throwable $description = null): static;

    public function minNotEven(null|string|Throwable $description = null): static;

    public function minFactor(int $dividend, null|string|Throwable $description = null): static;

    public function minNotFactor(int $dividend, null|string|Throwable $description = null): static;

    public function minFibonacci(null|string|Throwable $description = null): static;

    public function minNotFibonacci(null|string|Throwable $description = null): static;

    public function minFinite(null|string|Throwable $description = null): static;

    public function minNotFinite(null|string|Throwable $description = null): static;

    public function minFloatType(null|string|Throwable $description = null): static;

    public function minNotFloatType(null|string|Throwable $description = null): static;

    public function minFloatVal(null|string|Throwable $description = null): static;

    public function minNotFloatVal(null|string|Throwable $description = null): static;

    public function minGreaterThan(mixed $compareTo, null|string|Throwable $description = null): static;

    public function minNotGreaterThan(mixed $compareTo, null|string|Throwable $description = null): static;

    public function minIdentical(mixed $compareTo, null|string|Throwable $description = null): static;

    public function minNotIdentical(mixed $compareTo, null|string|Throwable $description = null): static;

    public function minIn(mixed $haystack, bool $compareIdentical = false, null|string|Throwable $description = null): static;

    public function minNotIn(mixed $haystack, bool $compareIdentical = false, null|string|Throwable $description = null): static;

    public function minInfinite(null|string|Throwable $description = null): static;

    public function minNotInfinite(null|string|Throwable $description = null): static;

    public function minIntType(null|string|Throwable $description = null): static;

    public function minNotIntType(null|string|Throwable $description = null): static;

    public function minIntVal(null|string|Throwable $description = null): static;

    public function minNotIntVal(null|string|Throwable $description = null): static;

    public function minLeapDate(string $format, null|string|Throwable $description = null): static;

    public function minNotLeapDate(string $format, null|string|Throwable $description = null): static;

    public function minLeapYear(null|string|Throwable $description = null): static;

    public function minNotLeapYear(null|string|Throwable $description = null): static;

    public function minLessThan(mixed $compareTo, null|string|Throwable $description = null): static;

    public function minNotLessThan(mixed $compareTo, null|string|Throwable $description = null): static;

    public function minMaxAge(int $age, ?string $format = null, null|string|Throwable $description = null): static;

    public function minNotMaxAge(int $age, ?string $format = null, null|string|Throwable $description = null): static;

    public function minMinAge(int $age, ?string $format = null, null|string|Throwable $description = null): static;

    public function minNotMinAge(int $age, ?string $format = null, null|string|Throwable $description = null): static;

    public function minMultiple(int $multipleOf, null|string|Throwable $description = null): static;

    public function minNotMultiple(int $multipleOf, null|string|Throwable $description = null): static;

    public function minNegative(null|string|Throwable $description = null): static;

    public function minNotNegative(null|string|Throwable $description = null): static;

    public function minNumber(null|string|Throwable $description = null): static;

    public function minNotNumber(null|string|Throwable $description = null): static;

    public function minNumericVal(null|string|Throwable $description = null): static;

    public function minNotNumericVal(null|string|Throwable $description = null): static;

    public function minOdd(null|string|Throwable $description = null): static;

    public function minNotOdd(null|string|Throwable $description = null): static;

    public function minPerfectSquare(null|string|Throwable $description = null): static;

    public function minNotPerfectSquare(null|string|Throwable $description = null): static;

    public function minPositive(null|string|Throwable $description = null): static;

    public function minNotPositive(null|string|Throwable $description = null): static;

    public function minPrimeNumber(null|string|Throwable $description = null): static;

    public function minNotPrimeNumber(null|string|Throwable $description = null): static;

    public function minRoman(null|string|Throwable $description = null): static;

    public function minNotRoman(null|string|Throwable $description = null): static;

    public function minStringType(null|string|Throwable $description = null): static;

    public function minNotStringType(null|string|Throwable $description = null): static;

    public function minStringVal(null|string|Throwable $description = null): static;

    public function minNotStringVal(null|string|Throwable $description = null): static;

    public function minTime(string $format = 'H:i:s', null|string|Throwable $description = null): static;

    public function minNotTime(string $format = 'H:i:s', null|string|Throwable $description = null): static;
}
