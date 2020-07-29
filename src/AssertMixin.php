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
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function all($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allAlnum($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allAlpha($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allArrayType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allArrayVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param int $base
     * @param string $chars
     * @param Throwable|string|null $description
     */
    public static function allBase($input, int $base, string $chars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allBase64($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $minimum
     * @param mixed $maximum
     * @param Throwable|string|null $description
     */
    public static function allBetween($input, $minimum, $maximum, $description = null): void;

    /**
     * @param mixed $input
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public static function allBic($input, string $countryCode, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allBoolType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allBoolVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allBsn($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allCallableType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param callable $callback
     * @param Throwable|string|null $description
     */
    public static function allCallback($input, callable $callback, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $charset
     * @param Throwable|string|null $description
     */
    public static function allCharset($input, ?string $charset = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allCnh($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allCnpj($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allConsonant($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $containsValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public static function allContains($input, $containsValue, bool $identical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param array<mixed> $needles
     * @param bool $strictCompareArray
     * @param Throwable|string|null $description
     */
    public static function allContainsAny($input, array $needles, bool $strictCompareArray = false, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allControl($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allCountable($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $set
     * @param Throwable|string|null $description
     */
    public static function allCountryCode($input, string $set = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allCpf($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $brand
     * @param Throwable|string|null $description
     */
    public static function allCreditCard($input, string $brand = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allCurrencyCode($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function allDate($input, string $format = 'Y-m-d', $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function allDateTime($input, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allDigit($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allDirectory($input, $description = null): void;

    /**
     * @param mixed $input
     * @param bool $tldCheck
     * @param Throwable|string|null $description
     */
    public static function allDomain($input, bool $tldCheck = true, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allEmail($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $endValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public static function allEndsWith($input, $endValue, bool $identical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function allEquals($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function allEquivalent($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allEven($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allExecutable($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allExists($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $extension
     * @param Throwable|string|null $description
     */
    public static function allExtension($input, string $extension, $description = null): void;

    /**
     * @param mixed $input
     * @param int $dividend
     * @param Throwable|string|null $description
     */
    public static function allFactor($input, int $dividend, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allFalseVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allFibonacci($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allFile($input, $description = null): void;

    /**
     * @param mixed $input
     * @param int $filter
     * @param mixed $options
     * @param Throwable|string|null $description
     */
    public static function allFilterVar($input, int $filter, $options = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allFinite($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allFloatType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allFloatVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allGraph($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function allGreaterThan($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allHexRgbColor($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allIban($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $value
     * @param Throwable|string|null $description
     */
    public static function allIdentical($input, $value, $description = null): void;

    /**
     * @param mixed $input
     * @param finfo $fileInfo
     * @param Throwable|string|null $description
     */
    public static function allImage($input, finfo $fileInfo = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allImei($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $haystack
     * @param bool $compareIdentical
     * @param Throwable|string|null $description
     */
    public static function allIn($input, $haystack, bool $compareIdentical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allInfinite($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $instanceName
     * @param Throwable|string|null $description
     */
    public static function allInstance($input, string $instanceName, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allIntType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allIntVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $range
     * @param int $options
     * @param Throwable|string|null $description
     */
    public static function allIp($input, string $range = '*', int $options = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allIsbn($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allIterableType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allJson($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $set
     * @param Throwable|string|null $description
     */
    public static function allLanguageCode($input, string $set = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function allLeapDate($input, string $format, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allLeapYear($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function allLessThan($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allLowercase($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allLuhn($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allMacAddress($input, $description = null): void;

    /**
     * @param mixed $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function allMaxAge($input, int $age, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string $mimetype
     * @param Throwable|string|null $description
     */
    public static function allMimetype($input, string $mimetype, $description = null): void;

    /**
     * @param mixed $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function allMinAge($input, int $age, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param int $multipleOf
     * @param Throwable|string|null $description
     */
    public static function allMultiple($input, int $multipleOf, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNegative($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNfeAccessKey($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNif($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNip($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public static function allNo($input, $useLocale = false, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNoWhitespace($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function allNot($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allNotAlnum($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allNotAlpha($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotArrayType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotArrayVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param int $base
     * @param string $chars
     * @param Throwable|string|null $description
     */
    public static function allNotBase($input, int $base, string $chars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotBase64($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $minimum
     * @param mixed $maximum
     * @param Throwable|string|null $description
     */
    public static function allNotBetween($input, $minimum, $maximum, $description = null): void;

    /**
     * @param mixed $input
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public static function allNotBic($input, string $countryCode, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotBlank($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotBoolType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotBoolVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotBsn($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotCallableType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param callable $callback
     * @param Throwable|string|null $description
     */
    public static function allNotCallback($input, callable $callback, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $charset
     * @param Throwable|string|null $description
     */
    public static function allNotCharset($input, ?string $charset = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotCnh($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotCnpj($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allNotConsonant($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $containsValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public static function allNotContains($input, $containsValue, bool $identical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param array<mixed> $needles
     * @param bool $strictCompareArray
     * @param Throwable|string|null $description
     */
    public static function allNotContainsAny($input, array $needles, bool $strictCompareArray = false, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allNotControl($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotCountable($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $set
     * @param Throwable|string|null $description
     */
    public static function allNotCountryCode($input, string $set = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotCpf($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $brand
     * @param Throwable|string|null $description
     */
    public static function allNotCreditCard($input, string $brand = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotCurrencyCode($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function allNotDate($input, string $format = 'Y-m-d', $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function allNotDateTime($input, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allNotDigit($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotDirectory($input, $description = null): void;

    /**
     * @param mixed $input
     * @param bool $tldCheck
     * @param Throwable|string|null $description
     */
    public static function allNotDomain($input, bool $tldCheck = true, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotEmail($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotEmoji($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotEmpty($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $endValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public static function allNotEndsWith($input, $endValue, bool $identical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function allNotEquals($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function allNotEquivalent($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotEven($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotExecutable($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotExists($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $extension
     * @param Throwable|string|null $description
     */
    public static function allNotExtension($input, string $extension, $description = null): void;

    /**
     * @param mixed $input
     * @param int $dividend
     * @param Throwable|string|null $description
     */
    public static function allNotFactor($input, int $dividend, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotFalseVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotFibonacci($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotFile($input, $description = null): void;

    /**
     * @param mixed $input
     * @param int $filter
     * @param mixed $options
     * @param Throwable|string|null $description
     */
    public static function allNotFilterVar($input, int $filter, $options = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotFinite($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotFloatType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotFloatVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allNotGraph($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function allNotGreaterThan($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotHexRgbColor($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotIban($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $value
     * @param Throwable|string|null $description
     */
    public static function allNotIdentical($input, $value, $description = null): void;

    /**
     * @param mixed $input
     * @param finfo $fileInfo
     * @param Throwable|string|null $description
     */
    public static function allNotImage($input, finfo $fileInfo = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotImei($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $haystack
     * @param bool $compareIdentical
     * @param Throwable|string|null $description
     */
    public static function allNotIn($input, $haystack, bool $compareIdentical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotInfinite($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $instanceName
     * @param Throwable|string|null $description
     */
    public static function allNotInstance($input, string $instanceName, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotIntType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotIntVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $range
     * @param int $options
     * @param Throwable|string|null $description
     */
    public static function allNotIp($input, string $range = '*', int $options = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotIsbn($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotIterableType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotJson($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $set
     * @param Throwable|string|null $description
     */
    public static function allNotLanguageCode($input, string $set = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function allNotLeapDate($input, string $format, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotLeapYear($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function allNotLessThan($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotLowercase($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotLuhn($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotMacAddress($input, $description = null): void;

    /**
     * @param mixed $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function allNotMaxAge($input, int $age, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string $mimetype
     * @param Throwable|string|null $description
     */
    public static function allNotMimetype($input, string $mimetype, $description = null): void;

    /**
     * @param mixed $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function allNotMinAge($input, int $age, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param int $multipleOf
     * @param Throwable|string|null $description
     */
    public static function allNotMultiple($input, int $multipleOf, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotNegative($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotNfeAccessKey($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotNif($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotNip($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public static function allNotNo($input, $useLocale = false, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotNoWhitespace($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotNullType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotNumber($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotNumericVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotObjectType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotOdd($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotOptional($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotPerfectSquare($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotPesel($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotPhone($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotPhpLabel($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotPis($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotPolishIdCard($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotPositive($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public static function allNotPostalCode($input, string $countryCode, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotPrimeNumber($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allNotPrintable($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allNotPunct($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotReadable($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $regex
     * @param Throwable|string|null $description
     */
    public static function allNotRegex($input, string $regex, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotResourceType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotRoman($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotScalarVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $minSize
     * @param string $maxSize
     * @param Throwable|string|null $description
     */
    public static function allNotSize($input, string $minSize = null, string $maxSize = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotSlug($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $direction
     * @param Throwable|string|null $description
     */
    public static function allNotSorted($input, string $direction, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allNotSpace($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $startValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public static function allNotStartsWith($input, $startValue, bool $identical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotStringType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotStringVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public static function allNotSubdivisionCode($input, string $countryCode, $description = null): void;

    /**
     * @param mixed $input
     * @param array<mixed> $superset
     * @param Throwable|string|null $description
     */
    public static function allNotSubset($input, array $superset, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotSymbolicLink($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function allNotTime($input, string $format = 'H:i:s', $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotTld($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotTrueVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $type
     * @param Throwable|string|null $description
     */
    public static function allNotType($input, string $type, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotUnique($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotUploaded($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotUppercase($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotUrl($input, $description = null): void;

    /**
     * @param mixed $input
     * @param int $version
     * @param Throwable|string|null $description
     */
    public static function allNotUuid($input, int $version = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotVersion($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $service
     * @param Throwable|string|null $description
     */
    public static function allNotVideoUrl($input, string $service = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allNotVowel($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNotWritable($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allNotXdigit($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public static function allNotYes($input, $useLocale = false, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNullType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNumber($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allNumericVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allObjectType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allOdd($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allPerfectSquare($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allPesel($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allPhone($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allPhpLabel($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allPis($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allPolishIdCard($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allPositive($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public static function allPostalCode($input, string $countryCode, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allPrimeNumber($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allPrintable($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allPunct($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allReadable($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $regex
     * @param Throwable|string|null $description
     */
    public static function allRegex($input, string $regex, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allResourceType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allRoman($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allScalarVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $minSize
     * @param string $maxSize
     * @param Throwable|string|null $description
     */
    public static function allSize($input, string $minSize = null, string $maxSize = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allSlug($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $direction
     * @param Throwable|string|null $description
     */
    public static function allSorted($input, string $direction, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allSpace($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $startValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public static function allStartsWith($input, $startValue, bool $identical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allStringType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allStringVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public static function allSubdivisionCode($input, string $countryCode, $description = null): void;

    /**
     * @param mixed $input
     * @param array<mixed> $superset
     * @param Throwable|string|null $description
     */
    public static function allSubset($input, array $superset, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allSymbolicLink($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function allTime($input, string $format = 'H:i:s', $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allTld($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allTrueVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $type
     * @param Throwable|string|null $description
     */
    public static function allType($input, string $type, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allUnique($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allUploaded($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allUppercase($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allUrl($input, $description = null): void;

    /**
     * @param mixed $input
     * @param int $version
     * @param Throwable|string|null $description
     */
    public static function allUuid($input, int $version = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allVersion($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $service
     * @param Throwable|string|null $description
     */
    public static function allVideoUrl($input, string $service = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allVowel($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function allWritable($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function allXdigit($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public static function allYes($input, $useLocale = false, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function alnum($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function alpha($input, ?string $additionalChars = null, $description = null): void;

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
     * @param string|null $charset
     * @param Throwable|string|null $description
     */
    public static function charset($input, ?string $charset = null, $description = null): void;

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
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function consonant($input, ?string $additionalChars = null, $description = null): void;

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
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function control($input, ?string $additionalChars = null, $description = null): void;

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
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function digit($input, ?string $additionalChars = null, $description = null): void;

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
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function graph($input, ?string $additionalChars = null, $description = null): void;

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
     * @param mixed $input
     * @param mixed $key
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function key($input, $key, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyAlnum($input, $key, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyAlpha($input, $key, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyArrayType($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyArrayVal($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param int $base
     * @param string $chars
     * @param Throwable|string|null $description
     */
    public static function keyBase($input, $key, int $base, string $chars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyBase64($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param mixed $minimum
     * @param mixed $maximum
     * @param Throwable|string|null $description
     */
    public static function keyBetween($input, $key, $minimum, $maximum, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public static function keyBic($input, $key, string $countryCode, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyBoolType($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyBoolVal($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyBsn($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyCallableType($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param callable $callback
     * @param Throwable|string|null $description
     */
    public static function keyCallback($input, $key, callable $callback, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string|null $charset
     * @param Throwable|string|null $description
     */
    public static function keyCharset($input, $key, ?string $charset = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyCnh($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyCnpj($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyConsonant($input, $key, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param mixed $containsValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public static function keyContains($input, $key, $containsValue, bool $identical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param array<mixed> $needles
     * @param bool $strictCompareArray
     * @param Throwable|string|null $description
     */
    public static function keyContainsAny($input, $key, array $needles, bool $strictCompareArray = false, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyControl($input, $key, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyCountable($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $set
     * @param Throwable|string|null $description
     */
    public static function keyCountryCode($input, $key, string $set = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyCpf($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $brand
     * @param Throwable|string|null $description
     */
    public static function keyCreditCard($input, $key, string $brand = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyCurrencyCode($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function keyDate($input, $key, string $format = 'Y-m-d', $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function keyDateTime($input, $key, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyDigit($input, $key, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyDirectory($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param bool $tldCheck
     * @param Throwable|string|null $description
     */
    public static function keyDomain($input, $key, bool $tldCheck = true, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyEmail($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param mixed $endValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public static function keyEndsWith($input, $key, $endValue, bool $identical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function keyEquals($input, $key, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function keyEquivalent($input, $key, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyEven($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyExecutable($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyExists($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $extension
     * @param Throwable|string|null $description
     */
    public static function keyExtension($input, $key, string $extension, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param int $dividend
     * @param Throwable|string|null $description
     */
    public static function keyFactor($input, $key, int $dividend, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyFalseVal($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyFibonacci($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyFile($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param int $filter
     * @param mixed $options
     * @param Throwable|string|null $description
     */
    public static function keyFilterVar($input, $key, int $filter, $options = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyFinite($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyFloatType($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyFloatVal($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyGraph($input, $key, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function keyGreaterThan($input, $key, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyHexRgbColor($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyIban($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param mixed $value
     * @param Throwable|string|null $description
     */
    public static function keyIdentical($input, $key, $value, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param finfo $fileInfo
     * @param Throwable|string|null $description
     */
    public static function keyImage($input, $key, finfo $fileInfo = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyImei($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param mixed $haystack
     * @param bool $compareIdentical
     * @param Throwable|string|null $description
     */
    public static function keyIn($input, $key, $haystack, bool $compareIdentical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyInfinite($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $instanceName
     * @param Throwable|string|null $description
     */
    public static function keyInstance($input, $key, string $instanceName, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyIntType($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyIntVal($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $range
     * @param int $options
     * @param Throwable|string|null $description
     */
    public static function keyIp($input, $key, string $range = '*', int $options = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyIsbn($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyIterableType($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyJson($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $set
     * @param Throwable|string|null $description
     */
    public static function keyLanguageCode($input, $key, string $set = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function keyLeapDate($input, $key, string $format, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyLeapYear($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function keyLessThan($input, $key, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyLowercase($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyLuhn($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyMacAddress($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function keyMaxAge($input, $key, int $age, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $mimetype
     * @param Throwable|string|null $description
     */
    public static function keyMimetype($input, $key, string $mimetype, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function keyMinAge($input, $key, int $age, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param int $multipleOf
     * @param Throwable|string|null $description
     */
    public static function keyMultiple($input, $key, int $multipleOf, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNegative($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNfeAccessKey($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNif($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNip($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public static function keyNo($input, $key, $useLocale = false, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNoWhitespace($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function keyNot($input, $key, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyNotAlnum($input, $key, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyNotAlpha($input, $key, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotArrayType($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotArrayVal($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param int $base
     * @param string $chars
     * @param Throwable|string|null $description
     */
    public static function keyNotBase($input, $key, int $base, string $chars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotBase64($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param mixed $minimum
     * @param mixed $maximum
     * @param Throwable|string|null $description
     */
    public static function keyNotBetween($input, $key, $minimum, $maximum, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public static function keyNotBic($input, $key, string $countryCode, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotBlank($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotBoolType($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotBoolVal($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotBsn($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotCallableType($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param callable $callback
     * @param Throwable|string|null $description
     */
    public static function keyNotCallback($input, $key, callable $callback, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string|null $charset
     * @param Throwable|string|null $description
     */
    public static function keyNotCharset($input, $key, ?string $charset = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotCnh($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotCnpj($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyNotConsonant($input, $key, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param mixed $containsValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public static function keyNotContains($input, $key, $containsValue, bool $identical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param array<mixed> $needles
     * @param bool $strictCompareArray
     * @param Throwable|string|null $description
     */
    public static function keyNotContainsAny($input, $key, array $needles, bool $strictCompareArray = false, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyNotControl($input, $key, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotCountable($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $set
     * @param Throwable|string|null $description
     */
    public static function keyNotCountryCode($input, $key, string $set = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotCpf($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $brand
     * @param Throwable|string|null $description
     */
    public static function keyNotCreditCard($input, $key, string $brand = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotCurrencyCode($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function keyNotDate($input, $key, string $format = 'Y-m-d', $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function keyNotDateTime($input, $key, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyNotDigit($input, $key, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotDirectory($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param bool $tldCheck
     * @param Throwable|string|null $description
     */
    public static function keyNotDomain($input, $key, bool $tldCheck = true, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotEmail($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotEmoji($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotEmpty($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param mixed $endValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public static function keyNotEndsWith($input, $key, $endValue, bool $identical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function keyNotEquals($input, $key, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function keyNotEquivalent($input, $key, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotEven($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotExecutable($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotExists($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $extension
     * @param Throwable|string|null $description
     */
    public static function keyNotExtension($input, $key, string $extension, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param int $dividend
     * @param Throwable|string|null $description
     */
    public static function keyNotFactor($input, $key, int $dividend, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotFalseVal($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotFibonacci($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotFile($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param int $filter
     * @param mixed $options
     * @param Throwable|string|null $description
     */
    public static function keyNotFilterVar($input, $key, int $filter, $options = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotFinite($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotFloatType($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotFloatVal($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyNotGraph($input, $key, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function keyNotGreaterThan($input, $key, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotHexRgbColor($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotIban($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param mixed $value
     * @param Throwable|string|null $description
     */
    public static function keyNotIdentical($input, $key, $value, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param finfo $fileInfo
     * @param Throwable|string|null $description
     */
    public static function keyNotImage($input, $key, finfo $fileInfo = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotImei($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param mixed $haystack
     * @param bool $compareIdentical
     * @param Throwable|string|null $description
     */
    public static function keyNotIn($input, $key, $haystack, bool $compareIdentical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotInfinite($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $instanceName
     * @param Throwable|string|null $description
     */
    public static function keyNotInstance($input, $key, string $instanceName, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotIntType($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotIntVal($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $range
     * @param int $options
     * @param Throwable|string|null $description
     */
    public static function keyNotIp($input, $key, string $range = '*', int $options = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotIsbn($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotIterableType($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotJson($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $set
     * @param Throwable|string|null $description
     */
    public static function keyNotLanguageCode($input, $key, string $set = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function keyNotLeapDate($input, $key, string $format, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotLeapYear($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function keyNotLessThan($input, $key, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotLowercase($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotLuhn($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotMacAddress($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function keyNotMaxAge($input, $key, int $age, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $mimetype
     * @param Throwable|string|null $description
     */
    public static function keyNotMimetype($input, $key, string $mimetype, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function keyNotMinAge($input, $key, int $age, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param int $multipleOf
     * @param Throwable|string|null $description
     */
    public static function keyNotMultiple($input, $key, int $multipleOf, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotNegative($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotNfeAccessKey($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotNif($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotNip($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public static function keyNotNo($input, $key, $useLocale = false, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotNoWhitespace($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotNullType($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotNumber($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotNumericVal($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotObjectType($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotOdd($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotOptional($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotPerfectSquare($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotPesel($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotPhone($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotPhpLabel($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotPis($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotPolishIdCard($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotPositive($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public static function keyNotPostalCode($input, $key, string $countryCode, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotPresent($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotPrimeNumber($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyNotPrintable($input, $key, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyNotPunct($input, $key, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotReadable($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $regex
     * @param Throwable|string|null $description
     */
    public static function keyNotRegex($input, $key, string $regex, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotResourceType($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotRoman($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotScalarVal($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $minSize
     * @param string $maxSize
     * @param Throwable|string|null $description
     */
    public static function keyNotSize($input, $key, string $minSize = null, string $maxSize = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotSlug($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $direction
     * @param Throwable|string|null $description
     */
    public static function keyNotSorted($input, $key, string $direction, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyNotSpace($input, $key, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param mixed $startValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public static function keyNotStartsWith($input, $key, $startValue, bool $identical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotStringType($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotStringVal($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public static function keyNotSubdivisionCode($input, $key, string $countryCode, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param array<mixed> $superset
     * @param Throwable|string|null $description
     */
    public static function keyNotSubset($input, $key, array $superset, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotSymbolicLink($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function keyNotTime($input, $key, string $format = 'H:i:s', $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotTld($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotTrueVal($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $type
     * @param Throwable|string|null $description
     */
    public static function keyNotType($input, $key, string $type, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotUnique($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotUploaded($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotUppercase($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotUrl($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param int $version
     * @param Throwable|string|null $description
     */
    public static function keyNotUuid($input, $key, int $version = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotVersion($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $service
     * @param Throwable|string|null $description
     */
    public static function keyNotVideoUrl($input, $key, string $service = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyNotVowel($input, $key, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNotWritable($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyNotXdigit($input, $key, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public static function keyNotYes($input, $key, $useLocale = false, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNullType($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNumber($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyNumericVal($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyObjectType($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyOdd($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyPerfectSquare($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyPesel($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyPhone($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyPhpLabel($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyPis($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyPolishIdCard($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyPositive($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public static function keyPostalCode($input, $key, string $countryCode, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyPresent($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyPrimeNumber($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyPrintable($input, $key, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyPunct($input, $key, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyReadable($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $regex
     * @param Throwable|string|null $description
     */
    public static function keyRegex($input, $key, string $regex, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyResourceType($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyRoman($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyScalarVal($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $minSize
     * @param string $maxSize
     * @param Throwable|string|null $description
     */
    public static function keySize($input, $key, string $minSize = null, string $maxSize = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keySlug($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $direction
     * @param Throwable|string|null $description
     */
    public static function keySorted($input, $key, string $direction, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keySpace($input, $key, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param mixed $startValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public static function keyStartsWith($input, $key, $startValue, bool $identical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyStringType($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyStringVal($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public static function keySubdivisionCode($input, $key, string $countryCode, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param array<mixed> $superset
     * @param Throwable|string|null $description
     */
    public static function keySubset($input, $key, array $superset, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keySymbolicLink($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function keyTime($input, $key, string $format = 'H:i:s', $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyTld($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyTrueVal($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $type
     * @param Throwable|string|null $description
     */
    public static function keyType($input, $key, string $type, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyUnique($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyUploaded($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyUppercase($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyUrl($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param int $version
     * @param Throwable|string|null $description
     */
    public static function keyUuid($input, $key, int $version = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyVersion($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string $service
     * @param Throwable|string|null $description
     */
    public static function keyVideoUrl($input, $key, string $service = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyVowel($input, $key, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public static function keyWritable($input, $key, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function keyXdigit($input, $key, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $key
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public static function keyYes($input, $key, $useLocale = false, $description = null): void;

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
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function length($input, $compareTo, $description = null): void;

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
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function lengthDigit($input, ?string $additionalChars = null, $description = null): void;

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
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function lengthNot($input, $compareTo, $description = null): void;

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
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function lengthNotDigit($input, ?string $additionalChars = null, $description = null): void;

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
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function max($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function maxAge($input, int $age, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param int $base
     * @param string $chars
     * @param Throwable|string|null $description
     */
    public static function maxBase($input, int $base, string $chars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $minimum
     * @param mixed $maximum
     * @param Throwable|string|null $description
     */
    public static function maxBetween($input, $minimum, $maximum, $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function maxDate($input, string $format = 'Y-m-d', $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function maxDateTime($input, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function maxDigit($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function maxEquals($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function maxEquivalent($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxEven($input, $description = null): void;

    /**
     * @param mixed $input
     * @param int $dividend
     * @param Throwable|string|null $description
     */
    public static function maxFactor($input, int $dividend, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxFibonacci($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxFinite($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxFloatType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxFloatVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function maxGreaterThan($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $value
     * @param Throwable|string|null $description
     */
    public static function maxIdentical($input, $value, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $haystack
     * @param bool $compareIdentical
     * @param Throwable|string|null $description
     */
    public static function maxIn($input, $haystack, bool $compareIdentical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxInfinite($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxIntType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxIntVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function maxLeapDate($input, string $format, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxLeapYear($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function maxLessThan($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function maxMaxAge($input, int $age, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function maxMinAge($input, int $age, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param int $multipleOf
     * @param Throwable|string|null $description
     */
    public static function maxMultiple($input, int $multipleOf, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxNegative($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function maxNot($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param int $base
     * @param string $chars
     * @param Throwable|string|null $description
     */
    public static function maxNotBase($input, int $base, string $chars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $minimum
     * @param mixed $maximum
     * @param Throwable|string|null $description
     */
    public static function maxNotBetween($input, $minimum, $maximum, $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function maxNotDate($input, string $format = 'Y-m-d', $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function maxNotDateTime($input, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function maxNotDigit($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function maxNotEquals($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function maxNotEquivalent($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxNotEven($input, $description = null): void;

    /**
     * @param mixed $input
     * @param int $dividend
     * @param Throwable|string|null $description
     */
    public static function maxNotFactor($input, int $dividend, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxNotFibonacci($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxNotFinite($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxNotFloatType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxNotFloatVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function maxNotGreaterThan($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $value
     * @param Throwable|string|null $description
     */
    public static function maxNotIdentical($input, $value, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $haystack
     * @param bool $compareIdentical
     * @param Throwable|string|null $description
     */
    public static function maxNotIn($input, $haystack, bool $compareIdentical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxNotInfinite($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxNotIntType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxNotIntVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function maxNotLeapDate($input, string $format, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxNotLeapYear($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function maxNotLessThan($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function maxNotMaxAge($input, int $age, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function maxNotMinAge($input, int $age, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param int $multipleOf
     * @param Throwable|string|null $description
     */
    public static function maxNotMultiple($input, int $multipleOf, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxNotNegative($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxNotNumber($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxNotNumericVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxNotOdd($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxNotPerfectSquare($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxNotPositive($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxNotPrimeNumber($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxNotRoman($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxNotStringType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxNotStringVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function maxNotTime($input, string $format = 'H:i:s', $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxNumber($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxNumericVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxOdd($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxPerfectSquare($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxPositive($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxPrimeNumber($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxRoman($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxStringType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function maxStringVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function maxTime($input, string $format = 'H:i:s', $description = null): void;

    /**
     * @param mixed $input
     * @param string $mimetype
     * @param Throwable|string|null $description
     */
    public static function mimetype($input, string $mimetype, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function min($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function minAge($input, int $age, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param int $base
     * @param string $chars
     * @param Throwable|string|null $description
     */
    public static function minBase($input, int $base, string $chars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $minimum
     * @param mixed $maximum
     * @param Throwable|string|null $description
     */
    public static function minBetween($input, $minimum, $maximum, $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function minDate($input, string $format = 'Y-m-d', $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function minDateTime($input, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function minDigit($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function minEquals($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function minEquivalent($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minEven($input, $description = null): void;

    /**
     * @param mixed $input
     * @param int $dividend
     * @param Throwable|string|null $description
     */
    public static function minFactor($input, int $dividend, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minFibonacci($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minFinite($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minFloatType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minFloatVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function minGreaterThan($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $value
     * @param Throwable|string|null $description
     */
    public static function minIdentical($input, $value, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $haystack
     * @param bool $compareIdentical
     * @param Throwable|string|null $description
     */
    public static function minIn($input, $haystack, bool $compareIdentical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minInfinite($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minIntType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minIntVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function minLeapDate($input, string $format, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minLeapYear($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function minLessThan($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function minMaxAge($input, int $age, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function minMinAge($input, int $age, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param int $multipleOf
     * @param Throwable|string|null $description
     */
    public static function minMultiple($input, int $multipleOf, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minNegative($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function minNot($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param int $base
     * @param string $chars
     * @param Throwable|string|null $description
     */
    public static function minNotBase($input, int $base, string $chars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $minimum
     * @param mixed $maximum
     * @param Throwable|string|null $description
     */
    public static function minNotBetween($input, $minimum, $maximum, $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function minNotDate($input, string $format = 'Y-m-d', $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function minNotDateTime($input, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function minNotDigit($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function minNotEquals($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function minNotEquivalent($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minNotEven($input, $description = null): void;

    /**
     * @param mixed $input
     * @param int $dividend
     * @param Throwable|string|null $description
     */
    public static function minNotFactor($input, int $dividend, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minNotFibonacci($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minNotFinite($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minNotFloatType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minNotFloatVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function minNotGreaterThan($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $value
     * @param Throwable|string|null $description
     */
    public static function minNotIdentical($input, $value, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $haystack
     * @param bool $compareIdentical
     * @param Throwable|string|null $description
     */
    public static function minNotIn($input, $haystack, bool $compareIdentical = false, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minNotInfinite($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minNotIntType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minNotIntVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function minNotLeapDate($input, string $format, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minNotLeapYear($input, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public static function minNotLessThan($input, $compareTo, $description = null): void;

    /**
     * @param mixed $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function minNotMaxAge($input, int $age, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function minNotMinAge($input, int $age, string $format = null, $description = null): void;

    /**
     * @param mixed $input
     * @param int $multipleOf
     * @param Throwable|string|null $description
     */
    public static function minNotMultiple($input, int $multipleOf, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minNotNegative($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minNotNumber($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minNotNumericVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minNotOdd($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minNotPerfectSquare($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minNotPositive($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minNotPrimeNumber($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minNotRoman($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minNotStringType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minNotStringVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function minNotTime($input, string $format = 'H:i:s', $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minNumber($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minNumericVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minOdd($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minPerfectSquare($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minPositive($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minPrimeNumber($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minRoman($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minStringType($input, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function minStringVal($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string $format
     * @param Throwable|string|null $description
     */
    public static function minTime($input, string $format = 'H:i:s', $description = null): void;

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
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function notAlnum($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function notAlpha($input, ?string $additionalChars = null, $description = null): void;

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
     * @param string|null $charset
     * @param Throwable|string|null $description
     */
    public static function notCharset($input, ?string $charset = null, $description = null): void;

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
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function notConsonant($input, ?string $additionalChars = null, $description = null): void;

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
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function notControl($input, ?string $additionalChars = null, $description = null): void;

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
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function notDigit($input, ?string $additionalChars = null, $description = null): void;

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
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function notGraph($input, ?string $additionalChars = null, $description = null): void;

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
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function notPrintable($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function notPunct($input, ?string $additionalChars = null, $description = null): void;

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
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function notSpace($input, ?string $additionalChars = null, $description = null): void;

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
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function notVowel($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function notWritable($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function notXdigit($input, ?string $additionalChars = null, $description = null): void;

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
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrAlnum($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrAlpha($input, ?string $additionalChars = null, $description = null): void;

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
     * @param string|null $charset
     * @param Throwable|string|null $description
     */
    public static function nullOrCharset($input, ?string $charset = null, $description = null): void;

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
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrConsonant($input, ?string $additionalChars = null, $description = null): void;

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
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrControl($input, ?string $additionalChars = null, $description = null): void;

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
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrDigit($input, ?string $additionalChars = null, $description = null): void;

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
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrGraph($input, ?string $additionalChars = null, $description = null): void;

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
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrNotAlnum($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrNotAlpha($input, ?string $additionalChars = null, $description = null): void;

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
     * @param string|null $charset
     * @param Throwable|string|null $description
     */
    public static function nullOrNotCharset($input, ?string $charset = null, $description = null): void;

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
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrNotConsonant($input, ?string $additionalChars = null, $description = null): void;

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
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrNotControl($input, ?string $additionalChars = null, $description = null): void;

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
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrNotDigit($input, ?string $additionalChars = null, $description = null): void;

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
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrNotGraph($input, ?string $additionalChars = null, $description = null): void;

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
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrNotPrintable($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrNotPunct($input, ?string $additionalChars = null, $description = null): void;

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
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrNotSpace($input, ?string $additionalChars = null, $description = null): void;

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
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrNotVowel($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrNotWritable($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrNotXdigit($input, ?string $additionalChars = null, $description = null): void;

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
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrPrintable($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrPunct($input, ?string $additionalChars = null, $description = null): void;

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
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrSpace($input, ?string $additionalChars = null, $description = null): void;

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
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrVowel($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function nullOrWritable($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function nullOrXdigit($input, ?string $additionalChars = null, $description = null): void;

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
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function printable($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function punct($input, ?string $additionalChars = null, $description = null): void;

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
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function space($input, ?string $additionalChars = null, $description = null): void;

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
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function vowel($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param Throwable|string|null $description
     */
    public static function writable($input, $description = null): void;

    /**
     * @param mixed $input
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public static function xdigit($input, ?string $additionalChars = null, $description = null): void;

    /**
     * @param mixed $input
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public static function yes($input, $useLocale = false, $description = null): void;

}
