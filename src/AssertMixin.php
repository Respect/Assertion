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

use finfo;
use Throwable;

interface AssertMixin
{
    /**
     * @param iterable<mixed> $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function all(iterable $input, $compareTo, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allAlnum(iterable $input, string $additionalChars, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allAlpha(iterable $input, string $additionalChars, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allArrayType(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allArrayVal(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param int $base
     * @param string $chars
     * @param Throwable|string|null $description
     */
    public static function allBase(iterable $input, int $base, string $chars = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allBase64(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $minimum
     * @param mixed $maximum
     * @param Throwable|string|null $description
     */
    public static function allBetween(iterable $input, $minimum, $maximum, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public static function allBic(iterable $input, string $countryCode, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allBoolType(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allBoolVal(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allBsn(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allCallableType(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param callable $callback
     * @param Throwable|string|null $description
     */
    public static function allCallback(iterable $input, callable $callback, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $charset
     * @param Throwable|string|null $description
     */
    public static function allCharset(iterable $input, string $charset, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allCnh(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allCnpj(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allConsonant(iterable $input, string $additionalChars, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $containsValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public static function allContains(iterable $input, $containsValue, bool $identical = false, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param array<mixed> $needles
     * @param bool $strictCompareArray
     * @param Throwable|string|null $description
     */
    public static function allContainsAny(iterable $input, array $needles, bool $strictCompareArray = false, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allControl(iterable $input, string $additionalChars, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allCountable(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $set
     * @param Throwable|string|null $description
     */
    public static function allCountryCode(iterable $input, string $set = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allCpf(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $brand
     * @param Throwable|string|null $description
     */
    public static function allCreditCard(iterable $input, string $brand = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allCurrencyCode(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function allDate(iterable $input, string $format = 'Y-m-d', $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function allDateTime(iterable $input, string $format = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allDigit(iterable $input, string $additionalChars, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allDirectory(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param bool $tldCheck
     * @param Throwable|string|null $description
     */
    public static function allDomain(iterable $input, bool $tldCheck = true, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allEmail(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $endValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public static function allEndsWith(iterable $input, $endValue, bool $identical = false, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function allEquals(iterable $input, $compareTo, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function allEquivalent(iterable $input, $compareTo, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allEven(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allExecutable(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allExists(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $extension
     * @param Throwable|string|null $description
     */
    public static function allExtension(iterable $input, string $extension, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param int $dividend
     * @param Throwable|string|null $description
     */
    public static function allFactor(iterable $input, int $dividend, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allFalseVal(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allFibonacci(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allFile(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param int $filter
     * @param mixed $options
     * @param Throwable|string|null $description
     */
    public static function allFilterVar(iterable $input, int $filter, $options = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allFinite(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allFloatType(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allFloatVal(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allGraph(iterable $input, string $additionalChars, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function allGreaterThan(iterable $input, $compareTo, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allHexRgbColor(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allIban(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $value
     * @param Throwable|string|null $description
     */
    public static function allIdentical(iterable $input, $value, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param finfo $fileInfo
     * @param Throwable|string|null $description
     */
    public static function allImage(iterable $input, finfo $fileInfo = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allImei(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $haystack
     * @param bool $compareIdentical
     * @param Throwable|string|null $description
     */
    public static function allIn(iterable $input, $haystack, bool $compareIdentical = false, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allInfinite(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $instanceName
     * @param Throwable|string|null $description
     */
    public static function allInstance(iterable $input, string $instanceName, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allIntType(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allIntVal(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $range
     * @param int $options
     * @param Throwable|string|null $description
     */
    public static function allIp(iterable $input, string $range = '*', int $options = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allIsbn(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allIterableType(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allJson(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $set
     * @param Throwable|string|null $description
     */
    public static function allLanguageCode(iterable $input, string $set = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function allLeapDate(iterable $input, string $format, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allLeapYear(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function allLessThan(iterable $input, $compareTo, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allLowercase(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allLuhn(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allMacAddress(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function allMaxAge(iterable $input, int $age, string $format = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $mimetype
     * @param Throwable|string|null $description
     */
    public static function allMimetype(iterable $input, string $mimetype, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function allMinAge(iterable $input, int $age, string $format = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param int $multipleOf
     * @param Throwable|string|null $description
     */
    public static function allMultiple(iterable $input, int $multipleOf, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNegative(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNfeAccessKey(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNif(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNip(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public static function allNo(iterable $input, $useLocale = false, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNoWhitespace(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function allNot(iterable $input, $compareTo, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allNotAlnum(iterable $input, string $additionalChars, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allNotAlpha(iterable $input, string $additionalChars, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotArrayType(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotArrayVal(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param int $base
     * @param string $chars
     * @param Throwable|string|null $description
     */
    public static function allNotBase(iterable $input, int $base, string $chars = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotBase64(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $minimum
     * @param mixed $maximum
     * @param Throwable|string|null $description
     */
    public static function allNotBetween(iterable $input, $minimum, $maximum, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public static function allNotBic(iterable $input, string $countryCode, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotBlank(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotBoolType(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotBoolVal(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotBsn(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotCallableType(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param callable $callback
     * @param Throwable|string|null $description
     */
    public static function allNotCallback(iterable $input, callable $callback, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $charset
     * @param Throwable|string|null $description
     */
    public static function allNotCharset(iterable $input, string $charset, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotCnh(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotCnpj(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allNotConsonant(iterable $input, string $additionalChars, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $containsValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public static function allNotContains(iterable $input, $containsValue, bool $identical = false, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param array<mixed> $needles
     * @param bool $strictCompareArray
     * @param Throwable|string|null $description
     */
    public static function allNotContainsAny(iterable $input, array $needles, bool $strictCompareArray = false, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allNotControl(iterable $input, string $additionalChars, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotCountable(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $set
     * @param Throwable|string|null $description
     */
    public static function allNotCountryCode(iterable $input, string $set = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotCpf(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $brand
     * @param Throwable|string|null $description
     */
    public static function allNotCreditCard(iterable $input, string $brand = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotCurrencyCode(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function allNotDate(iterable $input, string $format = 'Y-m-d', $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function allNotDateTime(iterable $input, string $format = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allNotDigit(iterable $input, string $additionalChars, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotDirectory(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param bool $tldCheck
     * @param Throwable|string|null $description
     */
    public static function allNotDomain(iterable $input, bool $tldCheck = true, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotEmail(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotEmoji(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotEmpty(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $endValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public static function allNotEndsWith(iterable $input, $endValue, bool $identical = false, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function allNotEquals(iterable $input, $compareTo, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function allNotEquivalent(iterable $input, $compareTo, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotEven(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotExecutable(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotExists(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $extension
     * @param Throwable|string|null $description
     */
    public static function allNotExtension(iterable $input, string $extension, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param int $dividend
     * @param Throwable|string|null $description
     */
    public static function allNotFactor(iterable $input, int $dividend, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotFalseVal(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotFibonacci(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotFile(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param int $filter
     * @param mixed $options
     * @param Throwable|string|null $description
     */
    public static function allNotFilterVar(iterable $input, int $filter, $options = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotFinite(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotFloatType(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotFloatVal(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allNotGraph(iterable $input, string $additionalChars, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function allNotGreaterThan(iterable $input, $compareTo, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotHexRgbColor(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotIban(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $value
     * @param Throwable|string|null $description
     */
    public static function allNotIdentical(iterable $input, $value, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param finfo $fileInfo
     * @param Throwable|string|null $description
     */
    public static function allNotImage(iterable $input, finfo $fileInfo = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotImei(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $haystack
     * @param bool $compareIdentical
     * @param Throwable|string|null $description
     */
    public static function allNotIn(iterable $input, $haystack, bool $compareIdentical = false, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotInfinite(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $instanceName
     * @param Throwable|string|null $description
     */
    public static function allNotInstance(iterable $input, string $instanceName, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotIntType(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotIntVal(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $range
     * @param int $options
     * @param Throwable|string|null $description
     */
    public static function allNotIp(iterable $input, string $range = '*', int $options = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotIsbn(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotIterableType(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotJson(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $set
     * @param Throwable|string|null $description
     */
    public static function allNotLanguageCode(iterable $input, string $set = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function allNotLeapDate(iterable $input, string $format, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotLeapYear(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function allNotLessThan(iterable $input, $compareTo, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotLowercase(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotLuhn(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotMacAddress(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function allNotMaxAge(iterable $input, int $age, string $format = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $mimetype
     * @param Throwable|string|null $description
     */
    public static function allNotMimetype(iterable $input, string $mimetype, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function allNotMinAge(iterable $input, int $age, string $format = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param int $multipleOf
     * @param Throwable|string|null $description
     */
    public static function allNotMultiple(iterable $input, int $multipleOf, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotNegative(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotNfeAccessKey(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotNif(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotNip(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public static function allNotNo(iterable $input, $useLocale = false, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotNoWhitespace(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotNullType(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotNumber(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotNumericVal(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotObjectType(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotOdd(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotOptional(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotPerfectSquare(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotPesel(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotPhone(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotPhpLabel(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotPis(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotPolishIdCard(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotPositive(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public static function allNotPostalCode(iterable $input, string $countryCode, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotPrimeNumber(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allNotPrintable(iterable $input, string $additionalChars, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allNotPunct(iterable $input, string $additionalChars, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotReadable(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $regex
     * @param Throwable|string|null $description
     */
    public static function allNotRegex(iterable $input, string $regex, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotResourceType(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotRoman(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotScalarVal(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $minSize
     * @param string $maxSize
     * @param Throwable|string|null $description
     */
    public static function allNotSize(iterable $input, string $minSize = null, string $maxSize = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotSlug(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $direction
     * @param Throwable|string|null $description
     */
    public static function allNotSorted(iterable $input, string $direction, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allNotSpace(iterable $input, string $additionalChars, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $startValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public static function allNotStartsWith(iterable $input, $startValue, bool $identical = false, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotStringType(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotStringVal(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public static function allNotSubdivisionCode(iterable $input, string $countryCode, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param array<mixed> $superset
     * @param Throwable|string|null $description
     */
    public static function allNotSubset(iterable $input, array $superset, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotSymbolicLink(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function allNotTime(iterable $input, string $format = 'H:i:s', $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotTld(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotTrueVal(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $type
     * @param Throwable|string|null $description
     */
    public static function allNotType(iterable $input, string $type, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotUnique(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotUploaded(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotUppercase(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotUrl(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param int $version
     * @param Throwable|string|null $description
     */
    public static function allNotUuid(iterable $input, int $version = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotVersion(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $service
     * @param Throwable|string|null $description
     */
    public static function allNotVideoUrl(iterable $input, string $service = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allNotVowel(iterable $input, string $additionalChars, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNotWritable(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allNotXdigit(iterable $input, string $additionalChars, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public static function allNotYes(iterable $input, $useLocale = false, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNullType(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNumber(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allNumericVal(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allObjectType(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allOdd(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allPerfectSquare(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allPesel(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allPhone(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allPhpLabel(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allPis(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allPolishIdCard(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allPositive(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public static function allPostalCode(iterable $input, string $countryCode, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allPrimeNumber(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allPrintable(iterable $input, string $additionalChars, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allPunct(iterable $input, string $additionalChars, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allReadable(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $regex
     * @param Throwable|string|null $description
     */
    public static function allRegex(iterable $input, string $regex, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allResourceType(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allRoman(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allScalarVal(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $minSize
     * @param string $maxSize
     * @param Throwable|string|null $description
     */
    public static function allSize(iterable $input, string $minSize = null, string $maxSize = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allSlug(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $direction
     * @param Throwable|string|null $description
     */
    public static function allSorted(iterable $input, string $direction, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allSpace(iterable $input, string $additionalChars, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $startValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public static function allStartsWith(iterable $input, $startValue, bool $identical = false, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allStringType(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allStringVal(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public static function allSubdivisionCode(iterable $input, string $countryCode, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param array<mixed> $superset
     * @param Throwable|string|null $description
     */
    public static function allSubset(iterable $input, array $superset, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allSymbolicLink(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function allTime(iterable $input, string $format = 'H:i:s', $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allTld(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allTrueVal(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $type
     * @param Throwable|string|null $description
     */
    public static function allType(iterable $input, string $type, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allUnique(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allUploaded(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allUppercase(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allUrl(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param int $version
     * @param Throwable|string|null $description
     */
    public static function allUuid(iterable $input, int $version = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allVersion(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $service
     * @param Throwable|string|null $description
     */
    public static function allVideoUrl(iterable $input, string $service = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allVowel(iterable $input, string $additionalChars, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function allWritable(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allXdigit(iterable $input, string $additionalChars, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public static function allYes(iterable $input, $useLocale = false, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function alnum($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function alpha($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function arrayType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function arrayVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param int $base
     * @param string $chars
     * @param Throwable|string|null $description
     */
    public static function base($input, int $base, string $chars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function base64($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $minimum
     * @param mixed $maximum
     * @param Throwable|string|null $description
     */
    public static function between($input, $minimum, $maximum, $description = null): void;

    /**
     * @param mixed $input
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public static function bic($input, string $countryCode, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function boolType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function boolVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function bsn($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function callableType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param callable $callback
     * @param Throwable|string|null $description
     */
    public static function callback($input, callable $callback, $description = null): void;

    /**
     * @param mixed $input
     * @param string $charset
     * @param Throwable|string|null $description
     */
    public static function charset($input, string $charset, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function cnh($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function cnpj($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function consonant($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $containsValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public static function contains($input, $containsValue, bool $identical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param array<mixed> $needles
     * @param bool $strictCompareArray
     * @param Throwable|string|null $description
     */
    public static function containsAny($input, array $needles, bool $strictCompareArray = false, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function control($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function countable($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $set
     * @param Throwable|string|null $description
     */
    public static function countryCode($input, string $set = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function cpf($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $brand
     * @param Throwable|string|null $description
     */
    public static function creditCard($input, string $brand = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function currencyCode($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function date($input, string $format = 'Y-m-d', $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function dateTime($input, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function digit($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function directory($input, $description = null): void;

    /**
     * @param mixed $input
     * @param bool $tldCheck
     * @param Throwable|string|null $description
     */
    public static function domain($input, bool $tldCheck = true, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function email($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $endValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public static function endsWith($input, $endValue, bool $identical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function equals($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function equivalent($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function even($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function executable($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function exists($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $extension
     * @param Throwable|string|null $description
     */
    public static function extension($input, string $extension, $description = null): void;

    /**
     * @param mixed $input
     * @param int $dividend
     * @param Throwable|string|null $description
     */
    public static function factor($input, int $dividend, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function falseVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function fibonacci($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function file($input, $description = null): void;

    /**
     * @param mixed $input
     * @param int $filter
     * @param mixed $options
     * @param Throwable|string|null $description
     */
    public static function filterVar($input, int $filter, $options = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function finite($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function floatType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function floatVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function graph($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function greaterThan($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function hexRgbColor($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function iban($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $value
     * @param Throwable|string|null $description
     */
    public static function identical($input, $value, $description = null): void;

    /**
     * @param mixed $input
     * @param finfo $fileInfo
     * @param Throwable|string|null $description
     */
    public static function image($input, finfo $fileInfo = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function imei($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $haystack
     * @param bool $compareIdentical
     * @param Throwable|string|null $description
     */
    public static function in($input, $haystack, bool $compareIdentical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function infinite($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $instanceName
     * @param Throwable|string|null $description
     */
    public static function instance($input, string $instanceName, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function intType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function intVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $range
     * @param int $options
     * @param Throwable|string|null $description
     */
    public static function ip($input, string $range = '*', int $options = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function isbn($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function iterableType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function json($input, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function key(array $input, $key, $compareTo, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyAlnum(array $input, $key, string $additionalChars, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyAlpha(array $input, $key, string $additionalChars, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyArrayType(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyArrayVal(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param int $base
     * @param string $chars
     * @param Throwable|string|null $description
     */
    public static function keyBase(array $input, $key, int $base, string $chars = null, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyBase64(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param mixed $minimum
     * @param mixed $maximum
     * @param Throwable|string|null $description
     */
    public static function keyBetween(array $input, $key, $minimum, $maximum, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public static function keyBic(array $input, $key, string $countryCode, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyBoolType(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyBoolVal(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyBsn(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyCallableType(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param callable $callback
     * @param Throwable|string|null $description
     */
    public static function keyCallback(array $input, $key, callable $callback, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $charset
     * @param Throwable|string|null $description
     */
    public static function keyCharset(array $input, $key, string $charset, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyCnh(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyCnpj(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyConsonant(array $input, $key, string $additionalChars, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param mixed $containsValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public static function keyContains(array $input, $key, $containsValue, bool $identical = false, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param array<mixed> $needles
     * @param bool $strictCompareArray
     * @param Throwable|string|null $description
     */
    public static function keyContainsAny(array $input, $key, array $needles, bool $strictCompareArray = false, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyControl(array $input, $key, string $additionalChars, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyCountable(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $set
     * @param Throwable|string|null $description
     */
    public static function keyCountryCode(array $input, $key, string $set = null, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyCpf(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $brand
     * @param Throwable|string|null $description
     */
    public static function keyCreditCard(array $input, $key, string $brand = null, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyCurrencyCode(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function keyDate(array $input, $key, string $format = 'Y-m-d', $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function keyDateTime(array $input, $key, string $format = null, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyDigit(array $input, $key, string $additionalChars, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyDirectory(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param bool $tldCheck
     * @param Throwable|string|null $description
     */
    public static function keyDomain(array $input, $key, bool $tldCheck = true, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyEmail(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param mixed $endValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public static function keyEndsWith(array $input, $key, $endValue, bool $identical = false, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function keyEquals(array $input, $key, $compareTo, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function keyEquivalent(array $input, $key, $compareTo, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyEven(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyExecutable(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyExists(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $extension
     * @param Throwable|string|null $description
     */
    public static function keyExtension(array $input, $key, string $extension, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param int $dividend
     * @param Throwable|string|null $description
     */
    public static function keyFactor(array $input, $key, int $dividend, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyFalseVal(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyFibonacci(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyFile(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param int $filter
     * @param mixed $options
     * @param Throwable|string|null $description
     */
    public static function keyFilterVar(array $input, $key, int $filter, $options = null, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyFinite(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyFloatType(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyFloatVal(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyGraph(array $input, $key, string $additionalChars, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function keyGreaterThan(array $input, $key, $compareTo, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyHexRgbColor(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyIban(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param mixed $value
     * @param Throwable|string|null $description
     */
    public static function keyIdentical(array $input, $key, $value, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param finfo $fileInfo
     * @param Throwable|string|null $description
     */
    public static function keyImage(array $input, $key, finfo $fileInfo = null, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyImei(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param mixed $haystack
     * @param bool $compareIdentical
     * @param Throwable|string|null $description
     */
    public static function keyIn(array $input, $key, $haystack, bool $compareIdentical = false, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyInfinite(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $instanceName
     * @param Throwable|string|null $description
     */
    public static function keyInstance(array $input, $key, string $instanceName, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyIntType(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyIntVal(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $range
     * @param int $options
     * @param Throwable|string|null $description
     */
    public static function keyIp(array $input, $key, string $range = '*', int $options = null, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyIsbn(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyIterableType(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyJson(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $set
     * @param Throwable|string|null $description
     */
    public static function keyLanguageCode(array $input, $key, string $set = null, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function keyLeapDate(array $input, $key, string $format, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyLeapYear(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function keyLessThan(array $input, $key, $compareTo, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyLowercase(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyLuhn(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyMacAddress(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function keyMaxAge(array $input, $key, int $age, string $format = null, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $mimetype
     * @param Throwable|string|null $description
     */
    public static function keyMimetype(array $input, $key, string $mimetype, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function keyMinAge(array $input, $key, int $age, string $format = null, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param int $multipleOf
     * @param Throwable|string|null $description
     */
    public static function keyMultiple(array $input, $key, int $multipleOf, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNegative(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNfeAccessKey(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNif(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNip(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public static function keyNo(array $input, $key, $useLocale = false, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNoWhitespace(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function keyNot(array $input, $key, $compareTo, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyNotAlnum(array $input, $key, string $additionalChars, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyNotAlpha(array $input, $key, string $additionalChars, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotArrayType(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotArrayVal(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param int $base
     * @param string $chars
     * @param Throwable|string|null $description
     */
    public static function keyNotBase(array $input, $key, int $base, string $chars = null, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotBase64(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param mixed $minimum
     * @param mixed $maximum
     * @param Throwable|string|null $description
     */
    public static function keyNotBetween(array $input, $key, $minimum, $maximum, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public static function keyNotBic(array $input, $key, string $countryCode, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotBlank(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotBoolType(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotBoolVal(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotBsn(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotCallableType(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param callable $callback
     * @param Throwable|string|null $description
     */
    public static function keyNotCallback(array $input, $key, callable $callback, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $charset
     * @param Throwable|string|null $description
     */
    public static function keyNotCharset(array $input, $key, string $charset, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotCnh(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotCnpj(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyNotConsonant(array $input, $key, string $additionalChars, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param mixed $containsValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public static function keyNotContains(array $input, $key, $containsValue, bool $identical = false, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param array<mixed> $needles
     * @param bool $strictCompareArray
     * @param Throwable|string|null $description
     */
    public static function keyNotContainsAny(array $input, $key, array $needles, bool $strictCompareArray = false, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyNotControl(array $input, $key, string $additionalChars, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotCountable(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $set
     * @param Throwable|string|null $description
     */
    public static function keyNotCountryCode(array $input, $key, string $set = null, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotCpf(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $brand
     * @param Throwable|string|null $description
     */
    public static function keyNotCreditCard(array $input, $key, string $brand = null, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotCurrencyCode(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function keyNotDate(array $input, $key, string $format = 'Y-m-d', $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function keyNotDateTime(array $input, $key, string $format = null, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyNotDigit(array $input, $key, string $additionalChars, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotDirectory(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param bool $tldCheck
     * @param Throwable|string|null $description
     */
    public static function keyNotDomain(array $input, $key, bool $tldCheck = true, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotEmail(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotEmoji(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotEmpty(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param mixed $endValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public static function keyNotEndsWith(array $input, $key, $endValue, bool $identical = false, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function keyNotEquals(array $input, $key, $compareTo, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function keyNotEquivalent(array $input, $key, $compareTo, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotEven(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotExecutable(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotExists(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $extension
     * @param Throwable|string|null $description
     */
    public static function keyNotExtension(array $input, $key, string $extension, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param int $dividend
     * @param Throwable|string|null $description
     */
    public static function keyNotFactor(array $input, $key, int $dividend, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotFalseVal(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotFibonacci(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotFile(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param int $filter
     * @param mixed $options
     * @param Throwable|string|null $description
     */
    public static function keyNotFilterVar(array $input, $key, int $filter, $options = null, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotFinite(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotFloatType(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotFloatVal(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyNotGraph(array $input, $key, string $additionalChars, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function keyNotGreaterThan(array $input, $key, $compareTo, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotHexRgbColor(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotIban(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param mixed $value
     * @param Throwable|string|null $description
     */
    public static function keyNotIdentical(array $input, $key, $value, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param finfo $fileInfo
     * @param Throwable|string|null $description
     */
    public static function keyNotImage(array $input, $key, finfo $fileInfo = null, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotImei(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param mixed $haystack
     * @param bool $compareIdentical
     * @param Throwable|string|null $description
     */
    public static function keyNotIn(array $input, $key, $haystack, bool $compareIdentical = false, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotInfinite(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $instanceName
     * @param Throwable|string|null $description
     */
    public static function keyNotInstance(array $input, $key, string $instanceName, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotIntType(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotIntVal(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $range
     * @param int $options
     * @param Throwable|string|null $description
     */
    public static function keyNotIp(array $input, $key, string $range = '*', int $options = null, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotIsbn(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotIterableType(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotJson(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $set
     * @param Throwable|string|null $description
     */
    public static function keyNotLanguageCode(array $input, $key, string $set = null, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function keyNotLeapDate(array $input, $key, string $format, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotLeapYear(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function keyNotLessThan(array $input, $key, $compareTo, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotLowercase(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotLuhn(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotMacAddress(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function keyNotMaxAge(array $input, $key, int $age, string $format = null, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $mimetype
     * @param Throwable|string|null $description
     */
    public static function keyNotMimetype(array $input, $key, string $mimetype, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function keyNotMinAge(array $input, $key, int $age, string $format = null, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param int $multipleOf
     * @param Throwable|string|null $description
     */
    public static function keyNotMultiple(array $input, $key, int $multipleOf, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotNegative(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotNfeAccessKey(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotNif(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotNip(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public static function keyNotNo(array $input, $key, $useLocale = false, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotNoWhitespace(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotNullType(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotNumber(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotNumericVal(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotObjectType(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotOdd(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotOptional(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotPerfectSquare(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotPesel(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotPhone(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotPhpLabel(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotPis(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotPolishIdCard(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotPositive(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public static function keyNotPostalCode(array $input, $key, string $countryCode, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotPresent(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotPrimeNumber(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyNotPrintable(array $input, $key, string $additionalChars, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyNotPunct(array $input, $key, string $additionalChars, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotReadable(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $regex
     * @param Throwable|string|null $description
     */
    public static function keyNotRegex(array $input, $key, string $regex, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotResourceType(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotRoman(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotScalarVal(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $minSize
     * @param string $maxSize
     * @param Throwable|string|null $description
     */
    public static function keyNotSize(array $input, $key, string $minSize = null, string $maxSize = null, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotSlug(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $direction
     * @param Throwable|string|null $description
     */
    public static function keyNotSorted(array $input, $key, string $direction, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyNotSpace(array $input, $key, string $additionalChars, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param mixed $startValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public static function keyNotStartsWith(array $input, $key, $startValue, bool $identical = false, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotStringType(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotStringVal(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public static function keyNotSubdivisionCode(array $input, $key, string $countryCode, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param array<mixed> $superset
     * @param Throwable|string|null $description
     */
    public static function keyNotSubset(array $input, $key, array $superset, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotSymbolicLink(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function keyNotTime(array $input, $key, string $format = 'H:i:s', $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotTld(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotTrueVal(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $type
     * @param Throwable|string|null $description
     */
    public static function keyNotType(array $input, $key, string $type, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotUnique(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotUploaded(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotUppercase(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotUrl(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param int $version
     * @param Throwable|string|null $description
     */
    public static function keyNotUuid(array $input, $key, int $version = null, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotVersion(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $service
     * @param Throwable|string|null $description
     */
    public static function keyNotVideoUrl(array $input, $key, string $service = null, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyNotVowel(array $input, $key, string $additionalChars, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotWritable(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyNotXdigit(array $input, $key, string $additionalChars, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public static function keyNotYes(array $input, $key, $useLocale = false, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNullType(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNumber(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNumericVal(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyObjectType(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyOdd(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyPerfectSquare(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyPesel(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyPhone(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyPhpLabel(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyPis(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyPolishIdCard(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyPositive(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public static function keyPostalCode(array $input, $key, string $countryCode, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyPresent(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyPrimeNumber(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyPrintable(array $input, $key, string $additionalChars, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyPunct(array $input, $key, string $additionalChars, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyReadable(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $regex
     * @param Throwable|string|null $description
     */
    public static function keyRegex(array $input, $key, string $regex, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyResourceType(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyRoman(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyScalarVal(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $minSize
     * @param string $maxSize
     * @param Throwable|string|null $description
     */
    public static function keySize(array $input, $key, string $minSize = null, string $maxSize = null, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keySlug(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $direction
     * @param Throwable|string|null $description
     */
    public static function keySorted(array $input, $key, string $direction, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keySpace(array $input, $key, string $additionalChars, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param mixed $startValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public static function keyStartsWith(array $input, $key, $startValue, bool $identical = false, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyStringType(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyStringVal(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public static function keySubdivisionCode(array $input, $key, string $countryCode, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param array<mixed> $superset
     * @param Throwable|string|null $description
     */
    public static function keySubset(array $input, $key, array $superset, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keySymbolicLink(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function keyTime(array $input, $key, string $format = 'H:i:s', $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyTld(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyTrueVal(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $type
     * @param Throwable|string|null $description
     */
    public static function keyType(array $input, $key, string $type, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyUnique(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyUploaded(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyUppercase(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyUrl(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param int $version
     * @param Throwable|string|null $description
     */
    public static function keyUuid(array $input, $key, int $version = null, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyVersion(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $service
     * @param Throwable|string|null $description
     */
    public static function keyVideoUrl(array $input, $key, string $service = null, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyVowel(array $input, $key, string $additionalChars, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyWritable(array $input, $key, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyXdigit(array $input, $key, string $additionalChars, $description = null): void;

    /**
     * @param array<mixed> $input
     * @param mixed $key
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public static function keyYes(array $input, $key, $useLocale = false, $description = null): void;

    /**
     * @param mixed $input
     * @param string $set
     * @param Throwable|string|null $description
     */
    public static function languageCode($input, string $set = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function leapDate($input, string $format, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function leapYear($input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function length(iterable $input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param int $base
     * @param string $chars
     * @param Throwable|string|null $description
     */
    public static function lengthBase($input, int $base, string $chars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $minimum
     * @param mixed $maximum
     * @param Throwable|string|null $description
     */
    public static function lengthBetween($input, $minimum, $maximum, $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function lengthDate($input, string $format = 'Y-m-d', $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function lengthDateTime($input, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function lengthDigit($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function lengthEquals($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function lengthEquivalent($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthEven($input, $description = null): void;

    /**
     * @param mixed $input
     * @param int $dividend
     * @param Throwable|string|null $description
     */
    public static function lengthFactor($input, int $dividend, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthFibonacci($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthFinite($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthFloatType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthFloatVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function lengthGreaterThan($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $value
     * @param Throwable|string|null $description
     */
    public static function lengthIdentical($input, $value, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $haystack
     * @param bool $compareIdentical
     * @param Throwable|string|null $description
     */
    public static function lengthIn($input, $haystack, bool $compareIdentical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthInfinite($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthIntType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthIntVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function lengthLeapDate($input, string $format, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthLeapYear($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function lengthLessThan($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function lengthMaxAge($input, int $age, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function lengthMinAge($input, int $age, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param int $multipleOf
     * @param Throwable|string|null $description
     */
    public static function lengthMultiple($input, int $multipleOf, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthNegative($input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function lengthNot(iterable $input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param int $base
     * @param string $chars
     * @param Throwable|string|null $description
     */
    public static function lengthNotBase($input, int $base, string $chars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $minimum
     * @param mixed $maximum
     * @param Throwable|string|null $description
     */
    public static function lengthNotBetween($input, $minimum, $maximum, $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function lengthNotDate($input, string $format = 'Y-m-d', $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function lengthNotDateTime($input, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function lengthNotDigit($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function lengthNotEquals($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function lengthNotEquivalent($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthNotEven($input, $description = null): void;

    /**
     * @param mixed $input
     * @param int $dividend
     * @param Throwable|string|null $description
     */
    public static function lengthNotFactor($input, int $dividend, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthNotFibonacci($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthNotFinite($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthNotFloatType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthNotFloatVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function lengthNotGreaterThan($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $value
     * @param Throwable|string|null $description
     */
    public static function lengthNotIdentical($input, $value, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $haystack
     * @param bool $compareIdentical
     * @param Throwable|string|null $description
     */
    public static function lengthNotIn($input, $haystack, bool $compareIdentical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthNotInfinite($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthNotIntType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthNotIntVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function lengthNotLeapDate($input, string $format, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthNotLeapYear($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function lengthNotLessThan($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function lengthNotMaxAge($input, int $age, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function lengthNotMinAge($input, int $age, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param int $multipleOf
     * @param Throwable|string|null $description
     */
    public static function lengthNotMultiple($input, int $multipleOf, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthNotNegative($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthNotNumber($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthNotNumericVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthNotOdd($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthNotPerfectSquare($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthNotPositive($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthNotPrimeNumber($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthNotRoman($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthNotStringType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthNotStringVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function lengthNotTime($input, string $format = 'H:i:s', $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthNumber($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthNumericVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthOdd($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthPerfectSquare($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthPositive($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthPrimeNumber($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthRoman($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthStringType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lengthStringVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function lengthTime($input, string $format = 'H:i:s', $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function lessThan($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function lowercase($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function luhn($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function macAddress($input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function max(iterable $input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function maxAge($input, int $age, string $format = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param int $base
     * @param string $chars
     * @param Throwable|string|null $description
     */
    public static function maxBase(iterable $input, int $base, string $chars = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $minimum
     * @param mixed $maximum
     * @param Throwable|string|null $description
     */
    public static function maxBetween(iterable $input, $minimum, $maximum, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function maxDate(iterable $input, string $format = 'Y-m-d', $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function maxDateTime(iterable $input, string $format = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function maxDigit(iterable $input, string $additionalChars, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function maxEquals(iterable $input, $compareTo, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function maxEquivalent(iterable $input, $compareTo, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxEven(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param int $dividend
     * @param Throwable|string|null $description
     */
    public static function maxFactor(iterable $input, int $dividend, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxFibonacci(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxFinite(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxFloatType(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxFloatVal(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function maxGreaterThan(iterable $input, $compareTo, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $value
     * @param Throwable|string|null $description
     */
    public static function maxIdentical(iterable $input, $value, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $haystack
     * @param bool $compareIdentical
     * @param Throwable|string|null $description
     */
    public static function maxIn(iterable $input, $haystack, bool $compareIdentical = false, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxInfinite(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxIntType(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxIntVal(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function maxLeapDate(iterable $input, string $format, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxLeapYear(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function maxLessThan(iterable $input, $compareTo, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function maxMaxAge(iterable $input, int $age, string $format = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function maxMinAge(iterable $input, int $age, string $format = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param int $multipleOf
     * @param Throwable|string|null $description
     */
    public static function maxMultiple(iterable $input, int $multipleOf, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxNegative(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function maxNot(iterable $input, $compareTo, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param int $base
     * @param string $chars
     * @param Throwable|string|null $description
     */
    public static function maxNotBase(iterable $input, int $base, string $chars = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $minimum
     * @param mixed $maximum
     * @param Throwable|string|null $description
     */
    public static function maxNotBetween(iterable $input, $minimum, $maximum, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function maxNotDate(iterable $input, string $format = 'Y-m-d', $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function maxNotDateTime(iterable $input, string $format = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function maxNotDigit(iterable $input, string $additionalChars, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function maxNotEquals(iterable $input, $compareTo, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function maxNotEquivalent(iterable $input, $compareTo, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxNotEven(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param int $dividend
     * @param Throwable|string|null $description
     */
    public static function maxNotFactor(iterable $input, int $dividend, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxNotFibonacci(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxNotFinite(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxNotFloatType(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxNotFloatVal(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function maxNotGreaterThan(iterable $input, $compareTo, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $value
     * @param Throwable|string|null $description
     */
    public static function maxNotIdentical(iterable $input, $value, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $haystack
     * @param bool $compareIdentical
     * @param Throwable|string|null $description
     */
    public static function maxNotIn(iterable $input, $haystack, bool $compareIdentical = false, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxNotInfinite(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxNotIntType(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxNotIntVal(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function maxNotLeapDate(iterable $input, string $format, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxNotLeapYear(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function maxNotLessThan(iterable $input, $compareTo, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function maxNotMaxAge(iterable $input, int $age, string $format = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function maxNotMinAge(iterable $input, int $age, string $format = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param int $multipleOf
     * @param Throwable|string|null $description
     */
    public static function maxNotMultiple(iterable $input, int $multipleOf, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxNotNegative(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxNotNumber(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxNotNumericVal(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxNotOdd(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxNotPerfectSquare(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxNotPositive(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxNotPrimeNumber(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxNotRoman(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxNotStringType(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxNotStringVal(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function maxNotTime(iterable $input, string $format = 'H:i:s', $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxNumber(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxNumericVal(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxOdd(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxPerfectSquare(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxPositive(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxPrimeNumber(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxRoman(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxStringType(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function maxStringVal(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function maxTime(iterable $input, string $format = 'H:i:s', $description = null): void;

    /**
     * @param mixed $input
     * @param string $mimetype
     * @param Throwable|string|null $description
     */
    public static function mimetype($input, string $mimetype, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function min(iterable $input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function minAge($input, int $age, string $format = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param int $base
     * @param string $chars
     * @param Throwable|string|null $description
     */
    public static function minBase(iterable $input, int $base, string $chars = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $minimum
     * @param mixed $maximum
     * @param Throwable|string|null $description
     */
    public static function minBetween(iterable $input, $minimum, $maximum, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function minDate(iterable $input, string $format = 'Y-m-d', $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function minDateTime(iterable $input, string $format = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function minDigit(iterable $input, string $additionalChars, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function minEquals(iterable $input, $compareTo, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function minEquivalent(iterable $input, $compareTo, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minEven(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param int $dividend
     * @param Throwable|string|null $description
     */
    public static function minFactor(iterable $input, int $dividend, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minFibonacci(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minFinite(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minFloatType(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minFloatVal(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function minGreaterThan(iterable $input, $compareTo, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $value
     * @param Throwable|string|null $description
     */
    public static function minIdentical(iterable $input, $value, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $haystack
     * @param bool $compareIdentical
     * @param Throwable|string|null $description
     */
    public static function minIn(iterable $input, $haystack, bool $compareIdentical = false, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minInfinite(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minIntType(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minIntVal(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function minLeapDate(iterable $input, string $format, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minLeapYear(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function minLessThan(iterable $input, $compareTo, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function minMaxAge(iterable $input, int $age, string $format = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function minMinAge(iterable $input, int $age, string $format = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param int $multipleOf
     * @param Throwable|string|null $description
     */
    public static function minMultiple(iterable $input, int $multipleOf, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minNegative(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function minNot(iterable $input, $compareTo, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param int $base
     * @param string $chars
     * @param Throwable|string|null $description
     */
    public static function minNotBase(iterable $input, int $base, string $chars = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $minimum
     * @param mixed $maximum
     * @param Throwable|string|null $description
     */
    public static function minNotBetween(iterable $input, $minimum, $maximum, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function minNotDate(iterable $input, string $format = 'Y-m-d', $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function minNotDateTime(iterable $input, string $format = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function minNotDigit(iterable $input, string $additionalChars, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function minNotEquals(iterable $input, $compareTo, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function minNotEquivalent(iterable $input, $compareTo, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minNotEven(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param int $dividend
     * @param Throwable|string|null $description
     */
    public static function minNotFactor(iterable $input, int $dividend, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minNotFibonacci(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minNotFinite(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minNotFloatType(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minNotFloatVal(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function minNotGreaterThan(iterable $input, $compareTo, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $value
     * @param Throwable|string|null $description
     */
    public static function minNotIdentical(iterable $input, $value, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $haystack
     * @param bool $compareIdentical
     * @param Throwable|string|null $description
     */
    public static function minNotIn(iterable $input, $haystack, bool $compareIdentical = false, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minNotInfinite(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minNotIntType(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minNotIntVal(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function minNotLeapDate(iterable $input, string $format, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minNotLeapYear(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function minNotLessThan(iterable $input, $compareTo, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function minNotMaxAge(iterable $input, int $age, string $format = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function minNotMinAge(iterable $input, int $age, string $format = null, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param int $multipleOf
     * @param Throwable|string|null $description
     */
    public static function minNotMultiple(iterable $input, int $multipleOf, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minNotNegative(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minNotNumber(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minNotNumericVal(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minNotOdd(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minNotPerfectSquare(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minNotPositive(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minNotPrimeNumber(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minNotRoman(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minNotStringType(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minNotStringVal(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function minNotTime(iterable $input, string $format = 'H:i:s', $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minNumber(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minNumericVal(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minOdd(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minPerfectSquare(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minPositive(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minPrimeNumber(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minRoman(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minStringType(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param Throwable|string|null $description
     */
    public static function minStringVal(iterable $input, $description = null): void;

    /**
     * @param iterable<mixed> $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function minTime(iterable $input, string $format = 'H:i:s', $description = null): void;

    /**
     * @param mixed $input
     * @param int $multipleOf
     * @param Throwable|string|null $description
     */
    public static function multiple($input, int $multipleOf, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function negative($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nfeAccessKey($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nif($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nip($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public static function no($input, $useLocale = false, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function noWhitespace($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function notAlnum($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function notAlpha($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notArrayType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notArrayVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param int $base
     * @param string $chars
     * @param Throwable|string|null $description
     */
    public static function notBase($input, int $base, string $chars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notBase64($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $minimum
     * @param mixed $maximum
     * @param Throwable|string|null $description
     */
    public static function notBetween($input, $minimum, $maximum, $description = null): void;

    /**
     * @param mixed $input
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public static function notBic($input, string $countryCode, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notBlank($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notBoolType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notBoolVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notBsn($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notCallableType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param callable $callback
     * @param Throwable|string|null $description
     */
    public static function notCallback($input, callable $callback, $description = null): void;

    /**
     * @param mixed $input
     * @param string $charset
     * @param Throwable|string|null $description
     */
    public static function notCharset($input, string $charset, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notCnh($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notCnpj($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function notConsonant($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $containsValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public static function notContains($input, $containsValue, bool $identical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param array<mixed> $needles
     * @param bool $strictCompareArray
     * @param Throwable|string|null $description
     */
    public static function notContainsAny($input, array $needles, bool $strictCompareArray = false, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function notControl($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notCountable($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $set
     * @param Throwable|string|null $description
     */
    public static function notCountryCode($input, string $set = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notCpf($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $brand
     * @param Throwable|string|null $description
     */
    public static function notCreditCard($input, string $brand = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notCurrencyCode($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function notDate($input, string $format = 'Y-m-d', $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function notDateTime($input, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function notDigit($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notDirectory($input, $description = null): void;

    /**
     * @param mixed $input
     * @param bool $tldCheck
     * @param Throwable|string|null $description
     */
    public static function notDomain($input, bool $tldCheck = true, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notEmail($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notEmoji($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notEmpty($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $endValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public static function notEndsWith($input, $endValue, bool $identical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function notEquals($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function notEquivalent($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notEven($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notExecutable($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notExists($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $extension
     * @param Throwable|string|null $description
     */
    public static function notExtension($input, string $extension, $description = null): void;

    /**
     * @param mixed $input
     * @param int $dividend
     * @param Throwable|string|null $description
     */
    public static function notFactor($input, int $dividend, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notFalseVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notFibonacci($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notFile($input, $description = null): void;

    /**
     * @param mixed $input
     * @param int $filter
     * @param mixed $options
     * @param Throwable|string|null $description
     */
    public static function notFilterVar($input, int $filter, $options = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notFinite($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notFloatType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notFloatVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function notGraph($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function notGreaterThan($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notHexRgbColor($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notIban($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $value
     * @param Throwable|string|null $description
     */
    public static function notIdentical($input, $value, $description = null): void;

    /**
     * @param mixed $input
     * @param finfo $fileInfo
     * @param Throwable|string|null $description
     */
    public static function notImage($input, finfo $fileInfo = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notImei($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $haystack
     * @param bool $compareIdentical
     * @param Throwable|string|null $description
     */
    public static function notIn($input, $haystack, bool $compareIdentical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notInfinite($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $instanceName
     * @param Throwable|string|null $description
     */
    public static function notInstance($input, string $instanceName, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notIntType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notIntVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $range
     * @param int $options
     * @param Throwable|string|null $description
     */
    public static function notIp($input, string $range = '*', int $options = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notIsbn($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notIterableType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notJson($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $set
     * @param Throwable|string|null $description
     */
    public static function notLanguageCode($input, string $set = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function notLeapDate($input, string $format, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notLeapYear($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function notLessThan($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notLowercase($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notLuhn($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notMacAddress($input, $description = null): void;

    /**
     * @param mixed $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function notMaxAge($input, int $age, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string $mimetype
     * @param Throwable|string|null $description
     */
    public static function notMimetype($input, string $mimetype, $description = null): void;

    /**
     * @param mixed $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function notMinAge($input, int $age, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param int $multipleOf
     * @param Throwable|string|null $description
     */
    public static function notMultiple($input, int $multipleOf, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notNegative($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notNfeAccessKey($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notNif($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notNip($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public static function notNo($input, $useLocale = false, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notNoWhitespace($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notNullType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notNumber($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notNumericVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notObjectType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notOdd($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notOptional($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notPerfectSquare($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notPesel($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notPhone($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notPhpLabel($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notPis($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notPolishIdCard($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notPositive($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public static function notPostalCode($input, string $countryCode, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notPrimeNumber($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function notPrintable($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function notPunct($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notReadable($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $regex
     * @param Throwable|string|null $description
     */
    public static function notRegex($input, string $regex, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notResourceType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notRoman($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notScalarVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $minSize
     * @param string $maxSize
     * @param Throwable|string|null $description
     */
    public static function notSize($input, string $minSize = null, string $maxSize = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notSlug($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $direction
     * @param Throwable|string|null $description
     */
    public static function notSorted($input, string $direction, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function notSpace($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $startValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public static function notStartsWith($input, $startValue, bool $identical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notStringType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notStringVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public static function notSubdivisionCode($input, string $countryCode, $description = null): void;

    /**
     * @param mixed $input
     * @param array<mixed> $superset
     * @param Throwable|string|null $description
     */
    public static function notSubset($input, array $superset, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notSymbolicLink($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function notTime($input, string $format = 'H:i:s', $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notTld($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notTrueVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $type
     * @param Throwable|string|null $description
     */
    public static function notType($input, string $type, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notUnique($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notUploaded($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notUppercase($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notUrl($input, $description = null): void;

    /**
     * @param mixed $input
     * @param int $version
     * @param Throwable|string|null $description
     */
    public static function notUuid($input, int $version = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notVersion($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $service
     * @param Throwable|string|null $description
     */
    public static function notVideoUrl($input, string $service = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function notVowel($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notWritable($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function notXdigit($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public static function notYes($input, $useLocale = false, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function nullOr($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrAlnum($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrAlpha($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrArrayType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrArrayVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param int $base
     * @param string $chars
     * @param Throwable|string|null $description
     */
    public static function nullOrBase($input, int $base, string $chars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrBase64($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $minimum
     * @param mixed $maximum
     * @param Throwable|string|null $description
     */
    public static function nullOrBetween($input, $minimum, $maximum, $description = null): void;

    /**
     * @param mixed $input
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public static function nullOrBic($input, string $countryCode, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrBoolType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrBoolVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrBsn($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrCallableType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param callable $callback
     * @param Throwable|string|null $description
     */
    public static function nullOrCallback($input, callable $callback, $description = null): void;

    /**
     * @param mixed $input
     * @param string $charset
     * @param Throwable|string|null $description
     */
    public static function nullOrCharset($input, string $charset, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrCnh($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrCnpj($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrConsonant($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $containsValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public static function nullOrContains($input, $containsValue, bool $identical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param array<mixed> $needles
     * @param bool $strictCompareArray
     * @param Throwable|string|null $description
     */
    public static function nullOrContainsAny($input, array $needles, bool $strictCompareArray = false, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrControl($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrCountable($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $set
     * @param Throwable|string|null $description
     */
    public static function nullOrCountryCode($input, string $set = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrCpf($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $brand
     * @param Throwable|string|null $description
     */
    public static function nullOrCreditCard($input, string $brand = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrCurrencyCode($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function nullOrDate($input, string $format = 'Y-m-d', $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function nullOrDateTime($input, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrDigit($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrDirectory($input, $description = null): void;

    /**
     * @param mixed $input
     * @param bool $tldCheck
     * @param Throwable|string|null $description
     */
    public static function nullOrDomain($input, bool $tldCheck = true, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrEmail($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $endValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public static function nullOrEndsWith($input, $endValue, bool $identical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function nullOrEquals($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function nullOrEquivalent($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrEven($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrExecutable($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrExists($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $extension
     * @param Throwable|string|null $description
     */
    public static function nullOrExtension($input, string $extension, $description = null): void;

    /**
     * @param mixed $input
     * @param int $dividend
     * @param Throwable|string|null $description
     */
    public static function nullOrFactor($input, int $dividend, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrFalseVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrFibonacci($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrFile($input, $description = null): void;

    /**
     * @param mixed $input
     * @param int $filter
     * @param mixed $options
     * @param Throwable|string|null $description
     */
    public static function nullOrFilterVar($input, int $filter, $options = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrFinite($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrFloatType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrFloatVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrGraph($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function nullOrGreaterThan($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrHexRgbColor($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrIban($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $value
     * @param Throwable|string|null $description
     */
    public static function nullOrIdentical($input, $value, $description = null): void;

    /**
     * @param mixed $input
     * @param finfo $fileInfo
     * @param Throwable|string|null $description
     */
    public static function nullOrImage($input, finfo $fileInfo = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrImei($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $haystack
     * @param bool $compareIdentical
     * @param Throwable|string|null $description
     */
    public static function nullOrIn($input, $haystack, bool $compareIdentical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrInfinite($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $instanceName
     * @param Throwable|string|null $description
     */
    public static function nullOrInstance($input, string $instanceName, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrIntType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrIntVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $range
     * @param int $options
     * @param Throwable|string|null $description
     */
    public static function nullOrIp($input, string $range = '*', int $options = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrIsbn($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrIterableType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrJson($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $set
     * @param Throwable|string|null $description
     */
    public static function nullOrLanguageCode($input, string $set = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function nullOrLeapDate($input, string $format, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrLeapYear($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function nullOrLessThan($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrLowercase($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrLuhn($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrMacAddress($input, $description = null): void;

    /**
     * @param mixed $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function nullOrMaxAge($input, int $age, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string $mimetype
     * @param Throwable|string|null $description
     */
    public static function nullOrMimetype($input, string $mimetype, $description = null): void;

    /**
     * @param mixed $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function nullOrMinAge($input, int $age, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param int $multipleOf
     * @param Throwable|string|null $description
     */
    public static function nullOrMultiple($input, int $multipleOf, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNegative($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNfeAccessKey($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNif($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNip($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public static function nullOrNo($input, $useLocale = false, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNoWhitespace($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function nullOrNot($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrNotAlnum($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrNotAlpha($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotArrayType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotArrayVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param int $base
     * @param string $chars
     * @param Throwable|string|null $description
     */
    public static function nullOrNotBase($input, int $base, string $chars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotBase64($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $minimum
     * @param mixed $maximum
     * @param Throwable|string|null $description
     */
    public static function nullOrNotBetween($input, $minimum, $maximum, $description = null): void;

    /**
     * @param mixed $input
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public static function nullOrNotBic($input, string $countryCode, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotBlank($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotBoolType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotBoolVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotBsn($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotCallableType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param callable $callback
     * @param Throwable|string|null $description
     */
    public static function nullOrNotCallback($input, callable $callback, $description = null): void;

    /**
     * @param mixed $input
     * @param string $charset
     * @param Throwable|string|null $description
     */
    public static function nullOrNotCharset($input, string $charset, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotCnh($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotCnpj($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrNotConsonant($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $containsValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public static function nullOrNotContains($input, $containsValue, bool $identical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param array<mixed> $needles
     * @param bool $strictCompareArray
     * @param Throwable|string|null $description
     */
    public static function nullOrNotContainsAny($input, array $needles, bool $strictCompareArray = false, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrNotControl($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotCountable($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $set
     * @param Throwable|string|null $description
     */
    public static function nullOrNotCountryCode($input, string $set = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotCpf($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $brand
     * @param Throwable|string|null $description
     */
    public static function nullOrNotCreditCard($input, string $brand = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotCurrencyCode($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function nullOrNotDate($input, string $format = 'Y-m-d', $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function nullOrNotDateTime($input, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrNotDigit($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotDirectory($input, $description = null): void;

    /**
     * @param mixed $input
     * @param bool $tldCheck
     * @param Throwable|string|null $description
     */
    public static function nullOrNotDomain($input, bool $tldCheck = true, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotEmail($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotEmoji($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotEmpty($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $endValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public static function nullOrNotEndsWith($input, $endValue, bool $identical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function nullOrNotEquals($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function nullOrNotEquivalent($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotEven($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotExecutable($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotExists($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $extension
     * @param Throwable|string|null $description
     */
    public static function nullOrNotExtension($input, string $extension, $description = null): void;

    /**
     * @param mixed $input
     * @param int $dividend
     * @param Throwable|string|null $description
     */
    public static function nullOrNotFactor($input, int $dividend, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotFalseVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotFibonacci($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotFile($input, $description = null): void;

    /**
     * @param mixed $input
     * @param int $filter
     * @param mixed $options
     * @param Throwable|string|null $description
     */
    public static function nullOrNotFilterVar($input, int $filter, $options = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotFinite($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotFloatType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotFloatVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrNotGraph($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function nullOrNotGreaterThan($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotHexRgbColor($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotIban($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $value
     * @param Throwable|string|null $description
     */
    public static function nullOrNotIdentical($input, $value, $description = null): void;

    /**
     * @param mixed $input
     * @param finfo $fileInfo
     * @param Throwable|string|null $description
     */
    public static function nullOrNotImage($input, finfo $fileInfo = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotImei($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $haystack
     * @param bool $compareIdentical
     * @param Throwable|string|null $description
     */
    public static function nullOrNotIn($input, $haystack, bool $compareIdentical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotInfinite($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $instanceName
     * @param Throwable|string|null $description
     */
    public static function nullOrNotInstance($input, string $instanceName, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotIntType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotIntVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $range
     * @param int $options
     * @param Throwable|string|null $description
     */
    public static function nullOrNotIp($input, string $range = '*', int $options = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotIsbn($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotIterableType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotJson($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $set
     * @param Throwable|string|null $description
     */
    public static function nullOrNotLanguageCode($input, string $set = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function nullOrNotLeapDate($input, string $format, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotLeapYear($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function nullOrNotLessThan($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotLowercase($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotLuhn($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotMacAddress($input, $description = null): void;

    /**
     * @param mixed $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function nullOrNotMaxAge($input, int $age, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string $mimetype
     * @param Throwable|string|null $description
     */
    public static function nullOrNotMimetype($input, string $mimetype, $description = null): void;

    /**
     * @param mixed $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function nullOrNotMinAge($input, int $age, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param int $multipleOf
     * @param Throwable|string|null $description
     */
    public static function nullOrNotMultiple($input, int $multipleOf, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotNegative($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotNfeAccessKey($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotNif($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotNip($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public static function nullOrNotNo($input, $useLocale = false, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotNoWhitespace($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotNullType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotNumber($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotNumericVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotObjectType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotOdd($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotOptional($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotPerfectSquare($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotPesel($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotPhone($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotPhpLabel($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotPis($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotPolishIdCard($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotPositive($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public static function nullOrNotPostalCode($input, string $countryCode, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotPrimeNumber($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrNotPrintable($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrNotPunct($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotReadable($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $regex
     * @param Throwable|string|null $description
     */
    public static function nullOrNotRegex($input, string $regex, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotResourceType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotRoman($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotScalarVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $minSize
     * @param string $maxSize
     * @param Throwable|string|null $description
     */
    public static function nullOrNotSize($input, string $minSize = null, string $maxSize = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotSlug($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $direction
     * @param Throwable|string|null $description
     */
    public static function nullOrNotSorted($input, string $direction, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrNotSpace($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $startValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public static function nullOrNotStartsWith($input, $startValue, bool $identical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotStringType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotStringVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public static function nullOrNotSubdivisionCode($input, string $countryCode, $description = null): void;

    /**
     * @param mixed $input
     * @param array<mixed> $superset
     * @param Throwable|string|null $description
     */
    public static function nullOrNotSubset($input, array $superset, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotSymbolicLink($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function nullOrNotTime($input, string $format = 'H:i:s', $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotTld($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotTrueVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $type
     * @param Throwable|string|null $description
     */
    public static function nullOrNotType($input, string $type, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotUnique($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotUploaded($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotUppercase($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotUrl($input, $description = null): void;

    /**
     * @param mixed $input
     * @param int $version
     * @param Throwable|string|null $description
     */
    public static function nullOrNotUuid($input, int $version = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotVersion($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $service
     * @param Throwable|string|null $description
     */
    public static function nullOrNotVideoUrl($input, string $service = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrNotVowel($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotWritable($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrNotXdigit($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public static function nullOrNotYes($input, $useLocale = false, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNullType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNumber($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNumericVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrObjectType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrOdd($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrPerfectSquare($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrPesel($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrPhone($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrPhpLabel($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrPis($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrPolishIdCard($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrPositive($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public static function nullOrPostalCode($input, string $countryCode, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrPrimeNumber($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrPrintable($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrPunct($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrReadable($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $regex
     * @param Throwable|string|null $description
     */
    public static function nullOrRegex($input, string $regex, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrResourceType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrRoman($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrScalarVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $minSize
     * @param string $maxSize
     * @param Throwable|string|null $description
     */
    public static function nullOrSize($input, string $minSize = null, string $maxSize = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrSlug($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $direction
     * @param Throwable|string|null $description
     */
    public static function nullOrSorted($input, string $direction, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrSpace($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $startValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public static function nullOrStartsWith($input, $startValue, bool $identical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrStringType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrStringVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public static function nullOrSubdivisionCode($input, string $countryCode, $description = null): void;

    /**
     * @param mixed $input
     * @param array<mixed> $superset
     * @param Throwable|string|null $description
     */
    public static function nullOrSubset($input, array $superset, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrSymbolicLink($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function nullOrTime($input, string $format = 'H:i:s', $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrTld($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrTrueVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $type
     * @param Throwable|string|null $description
     */
    public static function nullOrType($input, string $type, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrUnique($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrUploaded($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrUppercase($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrUrl($input, $description = null): void;

    /**
     * @param mixed $input
     * @param int $version
     * @param Throwable|string|null $description
     */
    public static function nullOrUuid($input, int $version = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrVersion($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $service
     * @param Throwable|string|null $description
     */
    public static function nullOrVideoUrl($input, string $service = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrVowel($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrWritable($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrXdigit($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public static function nullOrYes($input, $useLocale = false, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function number($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function numericVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function objectType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function odd($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function perfectSquare($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function pesel($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function phone($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function phpLabel($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function pis($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function polishIdCard($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function positive($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public static function postalCode($input, string $countryCode, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function primeNumber($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function printable($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function punct($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function readable($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $regex
     * @param Throwable|string|null $description
     */
    public static function regex($input, string $regex, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function resourceType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function roman($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function scalarVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $minSize
     * @param string $maxSize
     * @param Throwable|string|null $description
     */
    public static function size($input, string $minSize = null, string $maxSize = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function slug($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $direction
     * @param Throwable|string|null $description
     */
    public static function sorted($input, string $direction, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function space($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $startValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public static function startsWith($input, $startValue, bool $identical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function stringType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function stringVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public static function subdivisionCode($input, string $countryCode, $description = null): void;

    /**
     * @param mixed $input
     * @param array<mixed> $superset
     * @param Throwable|string|null $description
     */
    public static function subset($input, array $superset, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function symbolicLink($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function time($input, string $format = 'H:i:s', $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function tld($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function trueVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $type
     * @param Throwable|string|null $description
     */
    public static function type($input, string $type, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function unique($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function uploaded($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function uppercase($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function url($input, $description = null): void;

    /**
     * @param mixed $input
     * @param int $version
     * @param Throwable|string|null $description
     */
    public static function uuid($input, int $version = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function version($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $service
     * @param Throwable|string|null $description
     */
    public static function videoUrl($input, string $service = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function vowel($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function writable($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $additionalChars
     * @param Throwable|string|null $description
     */
    public static function xdigit($input, string $additionalChars, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public static function yes($input, $useLocale = false, $description = null): void;

}
