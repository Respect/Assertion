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

namespace Respect\Assertion\Mixin\Dynamic;

use Throwable;

// phpcs:disable Generic.Files.LineLength.TooLong
interface LengthMixin
{
    public function length(mixed $compareTo, null|string|Throwable $description = null): self;

    public function lengthBase(int $base, ?string $chars = null, null|string|Throwable $description = null): static;

    public function lengthBetween(mixed $minimum, mixed $maximum, null|string|Throwable $description = null): static;

    public function lengthDate(string $format = 'Y-m-d', null|string|Throwable $description = null): static;

    public function lengthDateTime(?string $format = null, null|string|Throwable $description = null): static;

    public function lengthDigit(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function lengthEquals(mixed $compareTo, null|string|Throwable $description = null): static;

    public function lengthEquivalent(mixed $compareTo, null|string|Throwable $description = null): static;

    public function lengthEven(null|string|Throwable $description = null): static;

    public function lengthFactor(int $dividend, null|string|Throwable $description = null): static;

    public function lengthFibonacci(null|string|Throwable $description = null): static;

    public function lengthFinite(null|string|Throwable $description = null): static;

    public function lengthFloatType(null|string|Throwable $description = null): static;

    public function lengthFloatVal(null|string|Throwable $description = null): static;

    public function lengthGreaterThan(mixed $compareTo, null|string|Throwable $description = null): static;

    public function lengthIdentical(mixed $compareTo, null|string|Throwable $description = null): static;

    public function lengthIn(mixed $haystack, bool $compareIdentical = false, null|string|Throwable $description = null): static;

    public function lengthInfinite(null|string|Throwable $description = null): static;

    public function lengthIntType(null|string|Throwable $description = null): static;

    public function lengthIntVal(null|string|Throwable $description = null): static;

    public function lengthLeapDate(string $format, null|string|Throwable $description = null): static;

    public function lengthLeapYear(null|string|Throwable $description = null): static;

    public function lengthLessThan(mixed $compareTo, null|string|Throwable $description = null): static;

    public function lengthMaxAge(int $age, ?string $format = null, null|string|Throwable $description = null): static;

    public function lengthMinAge(int $age, ?string $format = null, null|string|Throwable $description = null): static;

    public function lengthMultiple(int $multipleOf, null|string|Throwable $description = null): static;

    public function lengthNegative(null|string|Throwable $description = null): static;

    public function lengthNumber(null|string|Throwable $description = null): static;

    public function lengthNumericVal(null|string|Throwable $description = null): static;

    public function lengthOdd(null|string|Throwable $description = null): static;

    public function lengthPerfectSquare(null|string|Throwable $description = null): static;

    public function lengthPositive(null|string|Throwable $description = null): static;

    public function lengthPrimeNumber(null|string|Throwable $description = null): static;

    public function lengthRoman(null|string|Throwable $description = null): static;

    public function lengthStringType(null|string|Throwable $description = null): static;

    public function lengthStringVal(null|string|Throwable $description = null): static;

    public function lengthTime(string $format = 'H:i:s', null|string|Throwable $description = null): static;
}
