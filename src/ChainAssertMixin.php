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

interface ChainAssertMixin
{
    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function all($compareTo, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function allAlnum(?string $additionalChars = null, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function allAlpha(?string $additionalChars = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allArrayType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allArrayVal($description = null): self;

    /**
     * @param int $base
     * @param string $chars
     * @param Throwable|string|null $description
     */
    public function allBase(int $base, string $chars = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allBase64($description = null): self;

    /**
     * @param mixed $minimum
     * @param mixed $maximum
     * @param Throwable|string|null $description
     */
    public function allBetween($minimum, $maximum, $description = null): self;

    /**
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public function allBic(string $countryCode, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allBoolType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allBoolVal($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allBsn($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allCallableType($description = null): self;

    /**
     * @param callable $callback
     * @param Throwable|string|null $description
     */
    public function allCallback(callable $callback, $description = null): self;

    /**
     * @param string|null $charset
     * @param Throwable|string|null $description
     */
    public function allCharset(?string $charset = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allCnh($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allCnpj($description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function allConsonant(?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $containsValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public function allContains($containsValue, bool $identical = false, $description = null): self;

    /**
     * @param array<mixed> $needles
     * @param bool $strictCompareArray
     * @param Throwable|string|null $description
     */
    public function allContainsAny(array $needles, bool $strictCompareArray = false, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function allControl(?string $additionalChars = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allCountable($description = null): self;

    /**
     * @param string $set
     * @param Throwable|string|null $description
     */
    public function allCountryCode(string $set = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allCpf($description = null): self;

    /**
     * @param string $brand
     * @param Throwable|string|null $description
     */
    public function allCreditCard(string $brand = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allCurrencyCode($description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function allDate(string $format = 'Y-m-d', $description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function allDateTime(string $format = null, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function allDigit(?string $additionalChars = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allDirectory($description = null): self;

    /**
     * @param bool $tldCheck
     * @param Throwable|string|null $description
     */
    public function allDomain(bool $tldCheck = true, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allEmail($description = null): self;

    /**
     * @param mixed $endValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public function allEndsWith($endValue, bool $identical = false, $description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function allEquals($compareTo, $description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function allEquivalent($compareTo, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allEven($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allExecutable($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allExists($description = null): self;

    /**
     * @param string $extension
     * @param Throwable|string|null $description
     */
    public function allExtension(string $extension, $description = null): self;

    /**
     * @param int $dividend
     * @param Throwable|string|null $description
     */
    public function allFactor(int $dividend, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allFalseVal($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allFibonacci($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allFile($description = null): self;

    /**
     * @param int $filter
     * @param mixed $options
     * @param Throwable|string|null $description
     */
    public function allFilterVar(int $filter, $options = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allFinite($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allFloatType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allFloatVal($description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function allGraph(?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function allGreaterThan($compareTo, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allHexRgbColor($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allIban($description = null): self;

    /**
     * @param mixed $value
     * @param Throwable|string|null $description
     */
    public function allIdentical($value, $description = null): self;

    /**
     * @param finfo $fileInfo
     * @param Throwable|string|null $description
     */
    public function allImage(finfo $fileInfo = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allImei($description = null): self;

    /**
     * @param mixed $haystack
     * @param bool $compareIdentical
     * @param Throwable|string|null $description
     */
    public function allIn($haystack, bool $compareIdentical = false, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allInfinite($description = null): self;

    /**
     * @param string $instanceName
     * @param Throwable|string|null $description
     */
    public function allInstance(string $instanceName, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allIntType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allIntVal($description = null): self;

    /**
     * @param string $range
     * @param int $options
     * @param Throwable|string|null $description
     */
    public function allIp(string $range = '*', int $options = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allIsbn($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allIterableType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allJson($description = null): self;

    /**
     * @param string $set
     * @param Throwable|string|null $description
     */
    public function allLanguageCode(string $set = null, $description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function allLeapDate(string $format, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allLeapYear($description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function allLessThan($compareTo, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allLowercase($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allLuhn($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allMacAddress($description = null): self;

    /**
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function allMaxAge(int $age, string $format = null, $description = null): self;

    /**
     * @param string $mimetype
     * @param Throwable|string|null $description
     */
    public function allMimetype(string $mimetype, $description = null): self;

    /**
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function allMinAge(int $age, string $format = null, $description = null): self;

    /**
     * @param int $multipleOf
     * @param Throwable|string|null $description
     */
    public function allMultiple(int $multipleOf, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNegative($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNfeAccessKey($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNif($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNip($description = null): self;

    /**
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public function allNo($useLocale = false, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNoWhitespace($description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function allNot($compareTo, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function allNotAlnum(?string $additionalChars = null, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function allNotAlpha(?string $additionalChars = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotArrayType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotArrayVal($description = null): self;

    /**
     * @param int $base
     * @param string $chars
     * @param Throwable|string|null $description
     */
    public function allNotBase(int $base, string $chars = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotBase64($description = null): self;

    /**
     * @param mixed $minimum
     * @param mixed $maximum
     * @param Throwable|string|null $description
     */
    public function allNotBetween($minimum, $maximum, $description = null): self;

    /**
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public function allNotBic(string $countryCode, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotBlank($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotBoolType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotBoolVal($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotBsn($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotCallableType($description = null): self;

    /**
     * @param callable $callback
     * @param Throwable|string|null $description
     */
    public function allNotCallback(callable $callback, $description = null): self;

    /**
     * @param string|null $charset
     * @param Throwable|string|null $description
     */
    public function allNotCharset(?string $charset = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotCnh($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotCnpj($description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function allNotConsonant(?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $containsValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public function allNotContains($containsValue, bool $identical = false, $description = null): self;

    /**
     * @param array<mixed> $needles
     * @param bool $strictCompareArray
     * @param Throwable|string|null $description
     */
    public function allNotContainsAny(array $needles, bool $strictCompareArray = false, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function allNotControl(?string $additionalChars = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotCountable($description = null): self;

    /**
     * @param string $set
     * @param Throwable|string|null $description
     */
    public function allNotCountryCode(string $set = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotCpf($description = null): self;

    /**
     * @param string $brand
     * @param Throwable|string|null $description
     */
    public function allNotCreditCard(string $brand = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotCurrencyCode($description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function allNotDate(string $format = 'Y-m-d', $description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function allNotDateTime(string $format = null, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function allNotDigit(?string $additionalChars = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotDirectory($description = null): self;

    /**
     * @param bool $tldCheck
     * @param Throwable|string|null $description
     */
    public function allNotDomain(bool $tldCheck = true, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotEmail($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotEmoji($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotEmpty($description = null): self;

    /**
     * @param mixed $endValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public function allNotEndsWith($endValue, bool $identical = false, $description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function allNotEquals($compareTo, $description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function allNotEquivalent($compareTo, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotEven($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotExecutable($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotExists($description = null): self;

    /**
     * @param string $extension
     * @param Throwable|string|null $description
     */
    public function allNotExtension(string $extension, $description = null): self;

    /**
     * @param int $dividend
     * @param Throwable|string|null $description
     */
    public function allNotFactor(int $dividend, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotFalseVal($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotFibonacci($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotFile($description = null): self;

    /**
     * @param int $filter
     * @param mixed $options
     * @param Throwable|string|null $description
     */
    public function allNotFilterVar(int $filter, $options = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotFinite($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotFloatType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotFloatVal($description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function allNotGraph(?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function allNotGreaterThan($compareTo, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotHexRgbColor($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotIban($description = null): self;

    /**
     * @param mixed $value
     * @param Throwable|string|null $description
     */
    public function allNotIdentical($value, $description = null): self;

    /**
     * @param finfo $fileInfo
     * @param Throwable|string|null $description
     */
    public function allNotImage(finfo $fileInfo = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotImei($description = null): self;

    /**
     * @param mixed $haystack
     * @param bool $compareIdentical
     * @param Throwable|string|null $description
     */
    public function allNotIn($haystack, bool $compareIdentical = false, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotInfinite($description = null): self;

    /**
     * @param string $instanceName
     * @param Throwable|string|null $description
     */
    public function allNotInstance(string $instanceName, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotIntType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotIntVal($description = null): self;

    /**
     * @param string $range
     * @param int $options
     * @param Throwable|string|null $description
     */
    public function allNotIp(string $range = '*', int $options = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotIsbn($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotIterableType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotJson($description = null): self;

    /**
     * @param string $set
     * @param Throwable|string|null $description
     */
    public function allNotLanguageCode(string $set = null, $description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function allNotLeapDate(string $format, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotLeapYear($description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function allNotLessThan($compareTo, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotLowercase($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotLuhn($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotMacAddress($description = null): self;

    /**
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function allNotMaxAge(int $age, string $format = null, $description = null): self;

    /**
     * @param string $mimetype
     * @param Throwable|string|null $description
     */
    public function allNotMimetype(string $mimetype, $description = null): self;

    /**
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function allNotMinAge(int $age, string $format = null, $description = null): self;

    /**
     * @param int $multipleOf
     * @param Throwable|string|null $description
     */
    public function allNotMultiple(int $multipleOf, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotNegative($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotNfeAccessKey($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotNif($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotNip($description = null): self;

    /**
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public function allNotNo($useLocale = false, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotNoWhitespace($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotNullType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotNumber($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotNumericVal($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotObjectType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotOdd($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotOptional($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotPerfectSquare($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotPesel($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotPhone($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotPhpLabel($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotPis($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotPolishIdCard($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotPositive($description = null): self;

    /**
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public function allNotPostalCode(string $countryCode, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotPrimeNumber($description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function allNotPrintable(?string $additionalChars = null, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function allNotPunct(?string $additionalChars = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotReadable($description = null): self;

    /**
     * @param string $regex
     * @param Throwable|string|null $description
     */
    public function allNotRegex(string $regex, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotResourceType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotRoman($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotScalarVal($description = null): self;

    /**
     * @param string $minSize
     * @param string $maxSize
     * @param Throwable|string|null $description
     */
    public function allNotSize(string $minSize = null, string $maxSize = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotSlug($description = null): self;

    /**
     * @param string $direction
     * @param Throwable|string|null $description
     */
    public function allNotSorted(string $direction, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function allNotSpace(?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $startValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public function allNotStartsWith($startValue, bool $identical = false, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotStringType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotStringVal($description = null): self;

    /**
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public function allNotSubdivisionCode(string $countryCode, $description = null): self;

    /**
     * @param array<mixed> $superset
     * @param Throwable|string|null $description
     */
    public function allNotSubset(array $superset, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotSymbolicLink($description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function allNotTime(string $format = 'H:i:s', $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotTld($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotTrueVal($description = null): self;

    /**
     * @param string $type
     * @param Throwable|string|null $description
     */
    public function allNotType(string $type, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotUnique($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotUploaded($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotUppercase($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotUrl($description = null): self;

    /**
     * @param int $version
     * @param Throwable|string|null $description
     */
    public function allNotUuid(int $version = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotVersion($description = null): self;

    /**
     * @param string $service
     * @param Throwable|string|null $description
     */
    public function allNotVideoUrl(string $service = null, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function allNotVowel(?string $additionalChars = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNotWritable($description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function allNotXdigit(?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public function allNotYes($useLocale = false, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNullType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNumber($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allNumericVal($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allObjectType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allOdd($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allPerfectSquare($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allPesel($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allPhone($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allPhpLabel($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allPis($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allPolishIdCard($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allPositive($description = null): self;

    /**
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public function allPostalCode(string $countryCode, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allPrimeNumber($description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function allPrintable(?string $additionalChars = null, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function allPunct(?string $additionalChars = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allReadable($description = null): self;

    /**
     * @param string $regex
     * @param Throwable|string|null $description
     */
    public function allRegex(string $regex, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allResourceType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allRoman($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allScalarVal($description = null): self;

    /**
     * @param string $minSize
     * @param string $maxSize
     * @param Throwable|string|null $description
     */
    public function allSize(string $minSize = null, string $maxSize = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allSlug($description = null): self;

    /**
     * @param string $direction
     * @param Throwable|string|null $description
     */
    public function allSorted(string $direction, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function allSpace(?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $startValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public function allStartsWith($startValue, bool $identical = false, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allStringType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allStringVal($description = null): self;

    /**
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public function allSubdivisionCode(string $countryCode, $description = null): self;

    /**
     * @param array<mixed> $superset
     * @param Throwable|string|null $description
     */
    public function allSubset(array $superset, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allSymbolicLink($description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function allTime(string $format = 'H:i:s', $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allTld($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allTrueVal($description = null): self;

    /**
     * @param string $type
     * @param Throwable|string|null $description
     */
    public function allType(string $type, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allUnique($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allUploaded($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allUppercase($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allUrl($description = null): self;

    /**
     * @param int $version
     * @param Throwable|string|null $description
     */
    public function allUuid(int $version = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allVersion($description = null): self;

    /**
     * @param string $service
     * @param Throwable|string|null $description
     */
    public function allVideoUrl(string $service = null, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function allVowel(?string $additionalChars = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function allWritable($description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function allXdigit(?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public function allYes($useLocale = false, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function alnum(?string $additionalChars = null, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function alpha(?string $additionalChars = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function arrayType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function arrayVal($description = null): self;

    /**
     * @param int $base
     * @param string $chars
     * @param Throwable|string|null $description
     */
    public function base(int $base, string $chars = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function base64($description = null): self;

    /**
     * @param mixed $minimum
     * @param mixed $maximum
     * @param Throwable|string|null $description
     */
    public function between($minimum, $maximum, $description = null): self;

    /**
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public function bic(string $countryCode, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function boolType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function boolVal($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function bsn($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function callableType($description = null): self;

    /**
     * @param callable $callback
     * @param Throwable|string|null $description
     */
    public function callback(callable $callback, $description = null): self;

    /**
     * @param string|null $charset
     * @param Throwable|string|null $description
     */
    public function charset(?string $charset = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function cnh($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function cnpj($description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function consonant(?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $containsValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public function contains($containsValue, bool $identical = false, $description = null): self;

    /**
     * @param array<mixed> $needles
     * @param bool $strictCompareArray
     * @param Throwable|string|null $description
     */
    public function containsAny(array $needles, bool $strictCompareArray = false, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function control(?string $additionalChars = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function countable($description = null): self;

    /**
     * @param string $set
     * @param Throwable|string|null $description
     */
    public function countryCode(string $set = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function cpf($description = null): self;

    /**
     * @param string $brand
     * @param Throwable|string|null $description
     */
    public function creditCard(string $brand = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function currencyCode($description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function date(string $format = 'Y-m-d', $description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function dateTime(string $format = null, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function digit(?string $additionalChars = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function directory($description = null): self;

    /**
     * @param bool $tldCheck
     * @param Throwable|string|null $description
     */
    public function domain(bool $tldCheck = true, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function email($description = null): self;

    /**
     * @param mixed $endValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public function endsWith($endValue, bool $identical = false, $description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function equals($compareTo, $description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function equivalent($compareTo, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function even($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function executable($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function exists($description = null): self;

    /**
     * @param string $extension
     * @param Throwable|string|null $description
     */
    public function extension(string $extension, $description = null): self;

    /**
     * @param int $dividend
     * @param Throwable|string|null $description
     */
    public function factor(int $dividend, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function falseVal($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function fibonacci($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function file($description = null): self;

    /**
     * @param int $filter
     * @param mixed $options
     * @param Throwable|string|null $description
     */
    public function filterVar(int $filter, $options = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function finite($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function floatType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function floatVal($description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function graph(?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function greaterThan($compareTo, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function hexRgbColor($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function iban($description = null): self;

    /**
     * @param mixed $value
     * @param Throwable|string|null $description
     */
    public function identical($value, $description = null): self;

    /**
     * @param finfo $fileInfo
     * @param Throwable|string|null $description
     */
    public function image(finfo $fileInfo = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function imei($description = null): self;

    /**
     * @param mixed $haystack
     * @param bool $compareIdentical
     * @param Throwable|string|null $description
     */
    public function in($haystack, bool $compareIdentical = false, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function infinite($description = null): self;

    /**
     * @param string $instanceName
     * @param Throwable|string|null $description
     */
    public function instance(string $instanceName, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function intType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function intVal($description = null): self;

    /**
     * @param string $range
     * @param int $options
     * @param Throwable|string|null $description
     */
    public function ip(string $range = '*', int $options = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function isbn($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function iterableType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function json($description = null): self;

    /**
     * @param mixed $key
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function key($key, $compareTo, $description = null): self;

    /**
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function keyAlnum($key, ?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function keyAlpha($key, ?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyArrayType($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyArrayVal($key, $description = null): self;

    /**
     * @param mixed $key
     * @param int $base
     * @param string $chars
     * @param Throwable|string|null $description
     */
    public function keyBase($key, int $base, string $chars = null, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyBase64($key, $description = null): self;

    /**
     * @param mixed $key
     * @param mixed $minimum
     * @param mixed $maximum
     * @param Throwable|string|null $description
     */
    public function keyBetween($key, $minimum, $maximum, $description = null): self;

    /**
     * @param mixed $key
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public function keyBic($key, string $countryCode, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyBoolType($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyBoolVal($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyBsn($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyCallableType($key, $description = null): self;

    /**
     * @param mixed $key
     * @param callable $callback
     * @param Throwable|string|null $description
     */
    public function keyCallback($key, callable $callback, $description = null): self;

    /**
     * @param mixed $key
     * @param string|null $charset
     * @param Throwable|string|null $description
     */
    public function keyCharset($key, ?string $charset = null, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyCnh($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyCnpj($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function keyConsonant($key, ?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $key
     * @param mixed $containsValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public function keyContains($key, $containsValue, bool $identical = false, $description = null): self;

    /**
     * @param mixed $key
     * @param array<mixed> $needles
     * @param bool $strictCompareArray
     * @param Throwable|string|null $description
     */
    public function keyContainsAny($key, array $needles, bool $strictCompareArray = false, $description = null): self;

    /**
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function keyControl($key, ?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyCountable($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string $set
     * @param Throwable|string|null $description
     */
    public function keyCountryCode($key, string $set = null, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyCpf($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string $brand
     * @param Throwable|string|null $description
     */
    public function keyCreditCard($key, string $brand = null, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyCurrencyCode($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function keyDate($key, string $format = 'Y-m-d', $description = null): self;

    /**
     * @param mixed $key
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function keyDateTime($key, string $format = null, $description = null): self;

    /**
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function keyDigit($key, ?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyDirectory($key, $description = null): self;

    /**
     * @param mixed $key
     * @param bool $tldCheck
     * @param Throwable|string|null $description
     */
    public function keyDomain($key, bool $tldCheck = true, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyEmail($key, $description = null): self;

    /**
     * @param mixed $key
     * @param mixed $endValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public function keyEndsWith($key, $endValue, bool $identical = false, $description = null): self;

    /**
     * @param mixed $key
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function keyEquals($key, $compareTo, $description = null): self;

    /**
     * @param mixed $key
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function keyEquivalent($key, $compareTo, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyEven($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyExecutable($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyExists($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string $extension
     * @param Throwable|string|null $description
     */
    public function keyExtension($key, string $extension, $description = null): self;

    /**
     * @param mixed $key
     * @param int $dividend
     * @param Throwable|string|null $description
     */
    public function keyFactor($key, int $dividend, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyFalseVal($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyFibonacci($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyFile($key, $description = null): self;

    /**
     * @param mixed $key
     * @param int $filter
     * @param mixed $options
     * @param Throwable|string|null $description
     */
    public function keyFilterVar($key, int $filter, $options = null, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyFinite($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyFloatType($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyFloatVal($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function keyGraph($key, ?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $key
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function keyGreaterThan($key, $compareTo, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyHexRgbColor($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyIban($key, $description = null): self;

    /**
     * @param mixed $key
     * @param mixed $value
     * @param Throwable|string|null $description
     */
    public function keyIdentical($key, $value, $description = null): self;

    /**
     * @param mixed $key
     * @param finfo $fileInfo
     * @param Throwable|string|null $description
     */
    public function keyImage($key, finfo $fileInfo = null, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyImei($key, $description = null): self;

    /**
     * @param mixed $key
     * @param mixed $haystack
     * @param bool $compareIdentical
     * @param Throwable|string|null $description
     */
    public function keyIn($key, $haystack, bool $compareIdentical = false, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyInfinite($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string $instanceName
     * @param Throwable|string|null $description
     */
    public function keyInstance($key, string $instanceName, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyIntType($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyIntVal($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string $range
     * @param int $options
     * @param Throwable|string|null $description
     */
    public function keyIp($key, string $range = '*', int $options = null, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyIsbn($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyIterableType($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyJson($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string $set
     * @param Throwable|string|null $description
     */
    public function keyLanguageCode($key, string $set = null, $description = null): self;

    /**
     * @param mixed $key
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function keyLeapDate($key, string $format, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyLeapYear($key, $description = null): self;

    /**
     * @param mixed $key
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function keyLessThan($key, $compareTo, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyLowercase($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyLuhn($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyMacAddress($key, $description = null): self;

    /**
     * @param mixed $key
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function keyMaxAge($key, int $age, string $format = null, $description = null): self;

    /**
     * @param mixed $key
     * @param string $mimetype
     * @param Throwable|string|null $description
     */
    public function keyMimetype($key, string $mimetype, $description = null): self;

    /**
     * @param mixed $key
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function keyMinAge($key, int $age, string $format = null, $description = null): self;

    /**
     * @param mixed $key
     * @param int $multipleOf
     * @param Throwable|string|null $description
     */
    public function keyMultiple($key, int $multipleOf, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNegative($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNfeAccessKey($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNif($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNip($key, $description = null): self;

    /**
     * @param mixed $key
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public function keyNo($key, $useLocale = false, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNoWhitespace($key, $description = null): self;

    /**
     * @param mixed $key
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function keyNot($key, $compareTo, $description = null): self;

    /**
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function keyNotAlnum($key, ?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function keyNotAlpha($key, ?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotArrayType($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotArrayVal($key, $description = null): self;

    /**
     * @param mixed $key
     * @param int $base
     * @param string $chars
     * @param Throwable|string|null $description
     */
    public function keyNotBase($key, int $base, string $chars = null, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotBase64($key, $description = null): self;

    /**
     * @param mixed $key
     * @param mixed $minimum
     * @param mixed $maximum
     * @param Throwable|string|null $description
     */
    public function keyNotBetween($key, $minimum, $maximum, $description = null): self;

    /**
     * @param mixed $key
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public function keyNotBic($key, string $countryCode, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotBlank($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotBoolType($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotBoolVal($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotBsn($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotCallableType($key, $description = null): self;

    /**
     * @param mixed $key
     * @param callable $callback
     * @param Throwable|string|null $description
     */
    public function keyNotCallback($key, callable $callback, $description = null): self;

    /**
     * @param mixed $key
     * @param string|null $charset
     * @param Throwable|string|null $description
     */
    public function keyNotCharset($key, ?string $charset = null, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotCnh($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotCnpj($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function keyNotConsonant($key, ?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $key
     * @param mixed $containsValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public function keyNotContains($key, $containsValue, bool $identical = false, $description = null): self;

    /**
     * @param mixed $key
     * @param array<mixed> $needles
     * @param bool $strictCompareArray
     * @param Throwable|string|null $description
     */
    public function keyNotContainsAny($key, array $needles, bool $strictCompareArray = false, $description = null): self;

    /**
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function keyNotControl($key, ?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotCountable($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string $set
     * @param Throwable|string|null $description
     */
    public function keyNotCountryCode($key, string $set = null, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotCpf($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string $brand
     * @param Throwable|string|null $description
     */
    public function keyNotCreditCard($key, string $brand = null, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotCurrencyCode($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function keyNotDate($key, string $format = 'Y-m-d', $description = null): self;

    /**
     * @param mixed $key
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function keyNotDateTime($key, string $format = null, $description = null): self;

    /**
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function keyNotDigit($key, ?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotDirectory($key, $description = null): self;

    /**
     * @param mixed $key
     * @param bool $tldCheck
     * @param Throwable|string|null $description
     */
    public function keyNotDomain($key, bool $tldCheck = true, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotEmail($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotEmoji($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotEmpty($key, $description = null): self;

    /**
     * @param mixed $key
     * @param mixed $endValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public function keyNotEndsWith($key, $endValue, bool $identical = false, $description = null): self;

    /**
     * @param mixed $key
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function keyNotEquals($key, $compareTo, $description = null): self;

    /**
     * @param mixed $key
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function keyNotEquivalent($key, $compareTo, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotEven($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotExecutable($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotExists($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string $extension
     * @param Throwable|string|null $description
     */
    public function keyNotExtension($key, string $extension, $description = null): self;

    /**
     * @param mixed $key
     * @param int $dividend
     * @param Throwable|string|null $description
     */
    public function keyNotFactor($key, int $dividend, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotFalseVal($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotFibonacci($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotFile($key, $description = null): self;

    /**
     * @param mixed $key
     * @param int $filter
     * @param mixed $options
     * @param Throwable|string|null $description
     */
    public function keyNotFilterVar($key, int $filter, $options = null, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotFinite($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotFloatType($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotFloatVal($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function keyNotGraph($key, ?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $key
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function keyNotGreaterThan($key, $compareTo, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotHexRgbColor($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotIban($key, $description = null): self;

    /**
     * @param mixed $key
     * @param mixed $value
     * @param Throwable|string|null $description
     */
    public function keyNotIdentical($key, $value, $description = null): self;

    /**
     * @param mixed $key
     * @param finfo $fileInfo
     * @param Throwable|string|null $description
     */
    public function keyNotImage($key, finfo $fileInfo = null, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotImei($key, $description = null): self;

    /**
     * @param mixed $key
     * @param mixed $haystack
     * @param bool $compareIdentical
     * @param Throwable|string|null $description
     */
    public function keyNotIn($key, $haystack, bool $compareIdentical = false, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotInfinite($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string $instanceName
     * @param Throwable|string|null $description
     */
    public function keyNotInstance($key, string $instanceName, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotIntType($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotIntVal($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string $range
     * @param int $options
     * @param Throwable|string|null $description
     */
    public function keyNotIp($key, string $range = '*', int $options = null, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotIsbn($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotIterableType($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotJson($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string $set
     * @param Throwable|string|null $description
     */
    public function keyNotLanguageCode($key, string $set = null, $description = null): self;

    /**
     * @param mixed $key
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function keyNotLeapDate($key, string $format, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotLeapYear($key, $description = null): self;

    /**
     * @param mixed $key
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function keyNotLessThan($key, $compareTo, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotLowercase($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotLuhn($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotMacAddress($key, $description = null): self;

    /**
     * @param mixed $key
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function keyNotMaxAge($key, int $age, string $format = null, $description = null): self;

    /**
     * @param mixed $key
     * @param string $mimetype
     * @param Throwable|string|null $description
     */
    public function keyNotMimetype($key, string $mimetype, $description = null): self;

    /**
     * @param mixed $key
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function keyNotMinAge($key, int $age, string $format = null, $description = null): self;

    /**
     * @param mixed $key
     * @param int $multipleOf
     * @param Throwable|string|null $description
     */
    public function keyNotMultiple($key, int $multipleOf, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotNegative($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotNfeAccessKey($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotNif($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotNip($key, $description = null): self;

    /**
     * @param mixed $key
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public function keyNotNo($key, $useLocale = false, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotNoWhitespace($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotNullType($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotNumber($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotNumericVal($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotObjectType($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotOdd($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotOptional($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotPerfectSquare($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotPesel($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotPhone($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotPhpLabel($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotPis($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotPolishIdCard($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotPositive($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public function keyNotPostalCode($key, string $countryCode, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotPresent($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotPrimeNumber($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function keyNotPrintable($key, ?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function keyNotPunct($key, ?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotReadable($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string $regex
     * @param Throwable|string|null $description
     */
    public function keyNotRegex($key, string $regex, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotResourceType($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotRoman($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotScalarVal($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string $minSize
     * @param string $maxSize
     * @param Throwable|string|null $description
     */
    public function keyNotSize($key, string $minSize = null, string $maxSize = null, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotSlug($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string $direction
     * @param Throwable|string|null $description
     */
    public function keyNotSorted($key, string $direction, $description = null): self;

    /**
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function keyNotSpace($key, ?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $key
     * @param mixed $startValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public function keyNotStartsWith($key, $startValue, bool $identical = false, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotStringType($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotStringVal($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public function keyNotSubdivisionCode($key, string $countryCode, $description = null): self;

    /**
     * @param mixed $key
     * @param array<mixed> $superset
     * @param Throwable|string|null $description
     */
    public function keyNotSubset($key, array $superset, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotSymbolicLink($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function keyNotTime($key, string $format = 'H:i:s', $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotTld($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotTrueVal($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string $type
     * @param Throwable|string|null $description
     */
    public function keyNotType($key, string $type, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotUnique($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotUploaded($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotUppercase($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotUrl($key, $description = null): self;

    /**
     * @param mixed $key
     * @param int $version
     * @param Throwable|string|null $description
     */
    public function keyNotUuid($key, int $version = null, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotVersion($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string $service
     * @param Throwable|string|null $description
     */
    public function keyNotVideoUrl($key, string $service = null, $description = null): self;

    /**
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function keyNotVowel($key, ?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNotWritable($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function keyNotXdigit($key, ?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $key
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public function keyNotYes($key, $useLocale = false, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNullType($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNumber($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyNumericVal($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyObjectType($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyOdd($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyPerfectSquare($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyPesel($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyPhone($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyPhpLabel($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyPis($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyPolishIdCard($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyPositive($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public function keyPostalCode($key, string $countryCode, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyPresent($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyPrimeNumber($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function keyPrintable($key, ?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function keyPunct($key, ?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyReadable($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string $regex
     * @param Throwable|string|null $description
     */
    public function keyRegex($key, string $regex, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyResourceType($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyRoman($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyScalarVal($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string $minSize
     * @param string $maxSize
     * @param Throwable|string|null $description
     */
    public function keySize($key, string $minSize = null, string $maxSize = null, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keySlug($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string $direction
     * @param Throwable|string|null $description
     */
    public function keySorted($key, string $direction, $description = null): self;

    /**
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function keySpace($key, ?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $key
     * @param mixed $startValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public function keyStartsWith($key, $startValue, bool $identical = false, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyStringType($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyStringVal($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public function keySubdivisionCode($key, string $countryCode, $description = null): self;

    /**
     * @param mixed $key
     * @param array<mixed> $superset
     * @param Throwable|string|null $description
     */
    public function keySubset($key, array $superset, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keySymbolicLink($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function keyTime($key, string $format = 'H:i:s', $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyTld($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyTrueVal($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string $type
     * @param Throwable|string|null $description
     */
    public function keyType($key, string $type, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyUnique($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyUploaded($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyUppercase($key, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyUrl($key, $description = null): self;

    /**
     * @param mixed $key
     * @param int $version
     * @param Throwable|string|null $description
     */
    public function keyUuid($key, int $version = null, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyVersion($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string $service
     * @param Throwable|string|null $description
     */
    public function keyVideoUrl($key, string $service = null, $description = null): self;

    /**
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function keyVowel($key, ?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $key
     * @param Throwable|string|null $description
     */
    public function keyWritable($key, $description = null): self;

    /**
     * @param mixed $key
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function keyXdigit($key, ?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $key
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public function keyYes($key, $useLocale = false, $description = null): self;

    /**
     * @param string $set
     * @param Throwable|string|null $description
     */
    public function languageCode(string $set = null, $description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function leapDate(string $format, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function leapYear($description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function length($compareTo, $description = null): self;

    /**
     * @param int $base
     * @param string $chars
     * @param Throwable|string|null $description
     */
    public function lengthBase(int $base, string $chars = null, $description = null): self;

    /**
     * @param mixed $minimum
     * @param mixed $maximum
     * @param Throwable|string|null $description
     */
    public function lengthBetween($minimum, $maximum, $description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function lengthDate(string $format = 'Y-m-d', $description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function lengthDateTime(string $format = null, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function lengthDigit(?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function lengthEquals($compareTo, $description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function lengthEquivalent($compareTo, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthEven($description = null): self;

    /**
     * @param int $dividend
     * @param Throwable|string|null $description
     */
    public function lengthFactor(int $dividend, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthFibonacci($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthFinite($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthFloatType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthFloatVal($description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function lengthGreaterThan($compareTo, $description = null): self;

    /**
     * @param mixed $value
     * @param Throwable|string|null $description
     */
    public function lengthIdentical($value, $description = null): self;

    /**
     * @param mixed $haystack
     * @param bool $compareIdentical
     * @param Throwable|string|null $description
     */
    public function lengthIn($haystack, bool $compareIdentical = false, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthInfinite($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthIntType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthIntVal($description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function lengthLeapDate(string $format, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthLeapYear($description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function lengthLessThan($compareTo, $description = null): self;

    /**
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function lengthMaxAge(int $age, string $format = null, $description = null): self;

    /**
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function lengthMinAge(int $age, string $format = null, $description = null): self;

    /**
     * @param int $multipleOf
     * @param Throwable|string|null $description
     */
    public function lengthMultiple(int $multipleOf, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthNegative($description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function lengthNot($compareTo, $description = null): self;

    /**
     * @param int $base
     * @param string $chars
     * @param Throwable|string|null $description
     */
    public function lengthNotBase(int $base, string $chars = null, $description = null): self;

    /**
     * @param mixed $minimum
     * @param mixed $maximum
     * @param Throwable|string|null $description
     */
    public function lengthNotBetween($minimum, $maximum, $description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function lengthNotDate(string $format = 'Y-m-d', $description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function lengthNotDateTime(string $format = null, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function lengthNotDigit(?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function lengthNotEquals($compareTo, $description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function lengthNotEquivalent($compareTo, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthNotEven($description = null): self;

    /**
     * @param int $dividend
     * @param Throwable|string|null $description
     */
    public function lengthNotFactor(int $dividend, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthNotFibonacci($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthNotFinite($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthNotFloatType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthNotFloatVal($description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function lengthNotGreaterThan($compareTo, $description = null): self;

    /**
     * @param mixed $value
     * @param Throwable|string|null $description
     */
    public function lengthNotIdentical($value, $description = null): self;

    /**
     * @param mixed $haystack
     * @param bool $compareIdentical
     * @param Throwable|string|null $description
     */
    public function lengthNotIn($haystack, bool $compareIdentical = false, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthNotInfinite($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthNotIntType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthNotIntVal($description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function lengthNotLeapDate(string $format, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthNotLeapYear($description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function lengthNotLessThan($compareTo, $description = null): self;

    /**
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function lengthNotMaxAge(int $age, string $format = null, $description = null): self;

    /**
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function lengthNotMinAge(int $age, string $format = null, $description = null): self;

    /**
     * @param int $multipleOf
     * @param Throwable|string|null $description
     */
    public function lengthNotMultiple(int $multipleOf, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthNotNegative($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthNotNumber($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthNotNumericVal($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthNotOdd($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthNotPerfectSquare($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthNotPositive($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthNotPrimeNumber($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthNotRoman($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthNotStringType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthNotStringVal($description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function lengthNotTime(string $format = 'H:i:s', $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthNumber($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthNumericVal($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthOdd($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthPerfectSquare($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthPositive($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthPrimeNumber($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthRoman($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthStringType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lengthStringVal($description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function lengthTime(string $format = 'H:i:s', $description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function lessThan($compareTo, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function lowercase($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function luhn($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function macAddress($description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function max($compareTo, $description = null): self;

    /**
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function maxAge(int $age, string $format = null, $description = null): self;

    /**
     * @param int $base
     * @param string $chars
     * @param Throwable|string|null $description
     */
    public function maxBase(int $base, string $chars = null, $description = null): self;

    /**
     * @param mixed $minimum
     * @param mixed $maximum
     * @param Throwable|string|null $description
     */
    public function maxBetween($minimum, $maximum, $description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function maxDate(string $format = 'Y-m-d', $description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function maxDateTime(string $format = null, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function maxDigit(?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function maxEquals($compareTo, $description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function maxEquivalent($compareTo, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxEven($description = null): self;

    /**
     * @param int $dividend
     * @param Throwable|string|null $description
     */
    public function maxFactor(int $dividend, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxFibonacci($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxFinite($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxFloatType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxFloatVal($description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function maxGreaterThan($compareTo, $description = null): self;

    /**
     * @param mixed $value
     * @param Throwable|string|null $description
     */
    public function maxIdentical($value, $description = null): self;

    /**
     * @param mixed $haystack
     * @param bool $compareIdentical
     * @param Throwable|string|null $description
     */
    public function maxIn($haystack, bool $compareIdentical = false, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxInfinite($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxIntType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxIntVal($description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function maxLeapDate(string $format, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxLeapYear($description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function maxLessThan($compareTo, $description = null): self;

    /**
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function maxMaxAge(int $age, string $format = null, $description = null): self;

    /**
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function maxMinAge(int $age, string $format = null, $description = null): self;

    /**
     * @param int $multipleOf
     * @param Throwable|string|null $description
     */
    public function maxMultiple(int $multipleOf, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxNegative($description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function maxNot($compareTo, $description = null): self;

    /**
     * @param int $base
     * @param string $chars
     * @param Throwable|string|null $description
     */
    public function maxNotBase(int $base, string $chars = null, $description = null): self;

    /**
     * @param mixed $minimum
     * @param mixed $maximum
     * @param Throwable|string|null $description
     */
    public function maxNotBetween($minimum, $maximum, $description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function maxNotDate(string $format = 'Y-m-d', $description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function maxNotDateTime(string $format = null, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function maxNotDigit(?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function maxNotEquals($compareTo, $description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function maxNotEquivalent($compareTo, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxNotEven($description = null): self;

    /**
     * @param int $dividend
     * @param Throwable|string|null $description
     */
    public function maxNotFactor(int $dividend, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxNotFibonacci($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxNotFinite($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxNotFloatType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxNotFloatVal($description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function maxNotGreaterThan($compareTo, $description = null): self;

    /**
     * @param mixed $value
     * @param Throwable|string|null $description
     */
    public function maxNotIdentical($value, $description = null): self;

    /**
     * @param mixed $haystack
     * @param bool $compareIdentical
     * @param Throwable|string|null $description
     */
    public function maxNotIn($haystack, bool $compareIdentical = false, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxNotInfinite($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxNotIntType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxNotIntVal($description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function maxNotLeapDate(string $format, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxNotLeapYear($description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function maxNotLessThan($compareTo, $description = null): self;

    /**
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function maxNotMaxAge(int $age, string $format = null, $description = null): self;

    /**
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function maxNotMinAge(int $age, string $format = null, $description = null): self;

    /**
     * @param int $multipleOf
     * @param Throwable|string|null $description
     */
    public function maxNotMultiple(int $multipleOf, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxNotNegative($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxNotNumber($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxNotNumericVal($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxNotOdd($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxNotPerfectSquare($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxNotPositive($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxNotPrimeNumber($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxNotRoman($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxNotStringType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxNotStringVal($description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function maxNotTime(string $format = 'H:i:s', $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxNumber($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxNumericVal($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxOdd($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxPerfectSquare($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxPositive($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxPrimeNumber($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxRoman($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxStringType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function maxStringVal($description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function maxTime(string $format = 'H:i:s', $description = null): self;

    /**
     * @param string $mimetype
     * @param Throwable|string|null $description
     */
    public function mimetype(string $mimetype, $description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function min($compareTo, $description = null): self;

    /**
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function minAge(int $age, string $format = null, $description = null): self;

    /**
     * @param int $base
     * @param string $chars
     * @param Throwable|string|null $description
     */
    public function minBase(int $base, string $chars = null, $description = null): self;

    /**
     * @param mixed $minimum
     * @param mixed $maximum
     * @param Throwable|string|null $description
     */
    public function minBetween($minimum, $maximum, $description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function minDate(string $format = 'Y-m-d', $description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function minDateTime(string $format = null, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function minDigit(?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function minEquals($compareTo, $description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function minEquivalent($compareTo, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minEven($description = null): self;

    /**
     * @param int $dividend
     * @param Throwable|string|null $description
     */
    public function minFactor(int $dividend, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minFibonacci($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minFinite($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minFloatType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minFloatVal($description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function minGreaterThan($compareTo, $description = null): self;

    /**
     * @param mixed $value
     * @param Throwable|string|null $description
     */
    public function minIdentical($value, $description = null): self;

    /**
     * @param mixed $haystack
     * @param bool $compareIdentical
     * @param Throwable|string|null $description
     */
    public function minIn($haystack, bool $compareIdentical = false, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minInfinite($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minIntType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minIntVal($description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function minLeapDate(string $format, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minLeapYear($description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function minLessThan($compareTo, $description = null): self;

    /**
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function minMaxAge(int $age, string $format = null, $description = null): self;

    /**
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function minMinAge(int $age, string $format = null, $description = null): self;

    /**
     * @param int $multipleOf
     * @param Throwable|string|null $description
     */
    public function minMultiple(int $multipleOf, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minNegative($description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function minNot($compareTo, $description = null): self;

    /**
     * @param int $base
     * @param string $chars
     * @param Throwable|string|null $description
     */
    public function minNotBase(int $base, string $chars = null, $description = null): self;

    /**
     * @param mixed $minimum
     * @param mixed $maximum
     * @param Throwable|string|null $description
     */
    public function minNotBetween($minimum, $maximum, $description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function minNotDate(string $format = 'Y-m-d', $description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function minNotDateTime(string $format = null, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function minNotDigit(?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function minNotEquals($compareTo, $description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function minNotEquivalent($compareTo, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minNotEven($description = null): self;

    /**
     * @param int $dividend
     * @param Throwable|string|null $description
     */
    public function minNotFactor(int $dividend, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minNotFibonacci($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minNotFinite($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minNotFloatType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minNotFloatVal($description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function minNotGreaterThan($compareTo, $description = null): self;

    /**
     * @param mixed $value
     * @param Throwable|string|null $description
     */
    public function minNotIdentical($value, $description = null): self;

    /**
     * @param mixed $haystack
     * @param bool $compareIdentical
     * @param Throwable|string|null $description
     */
    public function minNotIn($haystack, bool $compareIdentical = false, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minNotInfinite($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minNotIntType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minNotIntVal($description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function minNotLeapDate(string $format, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minNotLeapYear($description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function minNotLessThan($compareTo, $description = null): self;

    /**
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function minNotMaxAge(int $age, string $format = null, $description = null): self;

    /**
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function minNotMinAge(int $age, string $format = null, $description = null): self;

    /**
     * @param int $multipleOf
     * @param Throwable|string|null $description
     */
    public function minNotMultiple(int $multipleOf, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minNotNegative($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minNotNumber($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minNotNumericVal($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minNotOdd($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minNotPerfectSquare($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minNotPositive($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minNotPrimeNumber($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minNotRoman($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minNotStringType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minNotStringVal($description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function minNotTime(string $format = 'H:i:s', $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minNumber($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minNumericVal($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minOdd($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minPerfectSquare($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minPositive($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minPrimeNumber($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minRoman($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minStringType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function minStringVal($description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function minTime(string $format = 'H:i:s', $description = null): self;

    /**
     * @param int $multipleOf
     * @param Throwable|string|null $description
     */
    public function multiple(int $multipleOf, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function negative($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nfeAccessKey($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nif($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nip($description = null): self;

    /**
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public function no($useLocale = false, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function noWhitespace($description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function notAlnum(?string $additionalChars = null, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function notAlpha(?string $additionalChars = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notArrayType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notArrayVal($description = null): self;

    /**
     * @param int $base
     * @param string $chars
     * @param Throwable|string|null $description
     */
    public function notBase(int $base, string $chars = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notBase64($description = null): self;

    /**
     * @param mixed $minimum
     * @param mixed $maximum
     * @param Throwable|string|null $description
     */
    public function notBetween($minimum, $maximum, $description = null): self;

    /**
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public function notBic(string $countryCode, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notBlank($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notBoolType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notBoolVal($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notBsn($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notCallableType($description = null): self;

    /**
     * @param callable $callback
     * @param Throwable|string|null $description
     */
    public function notCallback(callable $callback, $description = null): self;

    /**
     * @param string|null $charset
     * @param Throwable|string|null $description
     */
    public function notCharset(?string $charset = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notCnh($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notCnpj($description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function notConsonant(?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $containsValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public function notContains($containsValue, bool $identical = false, $description = null): self;

    /**
     * @param array<mixed> $needles
     * @param bool $strictCompareArray
     * @param Throwable|string|null $description
     */
    public function notContainsAny(array $needles, bool $strictCompareArray = false, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function notControl(?string $additionalChars = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notCountable($description = null): self;

    /**
     * @param string $set
     * @param Throwable|string|null $description
     */
    public function notCountryCode(string $set = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notCpf($description = null): self;

    /**
     * @param string $brand
     * @param Throwable|string|null $description
     */
    public function notCreditCard(string $brand = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notCurrencyCode($description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function notDate(string $format = 'Y-m-d', $description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function notDateTime(string $format = null, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function notDigit(?string $additionalChars = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notDirectory($description = null): self;

    /**
     * @param bool $tldCheck
     * @param Throwable|string|null $description
     */
    public function notDomain(bool $tldCheck = true, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notEmail($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notEmoji($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notEmpty($description = null): self;

    /**
     * @param mixed $endValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public function notEndsWith($endValue, bool $identical = false, $description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function notEquals($compareTo, $description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function notEquivalent($compareTo, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notEven($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notExecutable($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notExists($description = null): self;

    /**
     * @param string $extension
     * @param Throwable|string|null $description
     */
    public function notExtension(string $extension, $description = null): self;

    /**
     * @param int $dividend
     * @param Throwable|string|null $description
     */
    public function notFactor(int $dividend, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notFalseVal($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notFibonacci($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notFile($description = null): self;

    /**
     * @param int $filter
     * @param mixed $options
     * @param Throwable|string|null $description
     */
    public function notFilterVar(int $filter, $options = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notFinite($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notFloatType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notFloatVal($description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function notGraph(?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function notGreaterThan($compareTo, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notHexRgbColor($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notIban($description = null): self;

    /**
     * @param mixed $value
     * @param Throwable|string|null $description
     */
    public function notIdentical($value, $description = null): self;

    /**
     * @param finfo $fileInfo
     * @param Throwable|string|null $description
     */
    public function notImage(finfo $fileInfo = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notImei($description = null): self;

    /**
     * @param mixed $haystack
     * @param bool $compareIdentical
     * @param Throwable|string|null $description
     */
    public function notIn($haystack, bool $compareIdentical = false, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notInfinite($description = null): self;

    /**
     * @param string $instanceName
     * @param Throwable|string|null $description
     */
    public function notInstance(string $instanceName, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notIntType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notIntVal($description = null): self;

    /**
     * @param string $range
     * @param int $options
     * @param Throwable|string|null $description
     */
    public function notIp(string $range = '*', int $options = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notIsbn($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notIterableType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notJson($description = null): self;

    /**
     * @param string $set
     * @param Throwable|string|null $description
     */
    public function notLanguageCode(string $set = null, $description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function notLeapDate(string $format, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notLeapYear($description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function notLessThan($compareTo, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notLowercase($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notLuhn($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notMacAddress($description = null): self;

    /**
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function notMaxAge(int $age, string $format = null, $description = null): self;

    /**
     * @param string $mimetype
     * @param Throwable|string|null $description
     */
    public function notMimetype(string $mimetype, $description = null): self;

    /**
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function notMinAge(int $age, string $format = null, $description = null): self;

    /**
     * @param int $multipleOf
     * @param Throwable|string|null $description
     */
    public function notMultiple(int $multipleOf, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notNegative($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notNfeAccessKey($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notNif($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notNip($description = null): self;

    /**
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public function notNo($useLocale = false, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notNoWhitespace($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notNullType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notNumber($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notNumericVal($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notObjectType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notOdd($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notOptional($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notPerfectSquare($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notPesel($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notPhone($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notPhpLabel($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notPis($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notPolishIdCard($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notPositive($description = null): self;

    /**
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public function notPostalCode(string $countryCode, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notPrimeNumber($description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function notPrintable(?string $additionalChars = null, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function notPunct(?string $additionalChars = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notReadable($description = null): self;

    /**
     * @param string $regex
     * @param Throwable|string|null $description
     */
    public function notRegex(string $regex, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notResourceType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notRoman($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notScalarVal($description = null): self;

    /**
     * @param string $minSize
     * @param string $maxSize
     * @param Throwable|string|null $description
     */
    public function notSize(string $minSize = null, string $maxSize = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notSlug($description = null): self;

    /**
     * @param string $direction
     * @param Throwable|string|null $description
     */
    public function notSorted(string $direction, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function notSpace(?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $startValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public function notStartsWith($startValue, bool $identical = false, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notStringType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notStringVal($description = null): self;

    /**
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public function notSubdivisionCode(string $countryCode, $description = null): self;

    /**
     * @param array<mixed> $superset
     * @param Throwable|string|null $description
     */
    public function notSubset(array $superset, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notSymbolicLink($description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function notTime(string $format = 'H:i:s', $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notTld($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notTrueVal($description = null): self;

    /**
     * @param string $type
     * @param Throwable|string|null $description
     */
    public function notType(string $type, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notUnique($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notUploaded($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notUppercase($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notUrl($description = null): self;

    /**
     * @param int $version
     * @param Throwable|string|null $description
     */
    public function notUuid(int $version = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notVersion($description = null): self;

    /**
     * @param string $service
     * @param Throwable|string|null $description
     */
    public function notVideoUrl(string $service = null, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function notVowel(?string $additionalChars = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function notWritable($description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function notXdigit(?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public function notYes($useLocale = false, $description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function nullOr($compareTo, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function nullOrAlnum(?string $additionalChars = null, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function nullOrAlpha(?string $additionalChars = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrArrayType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrArrayVal($description = null): self;

    /**
     * @param int $base
     * @param string $chars
     * @param Throwable|string|null $description
     */
    public function nullOrBase(int $base, string $chars = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrBase64($description = null): self;

    /**
     * @param mixed $minimum
     * @param mixed $maximum
     * @param Throwable|string|null $description
     */
    public function nullOrBetween($minimum, $maximum, $description = null): self;

    /**
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public function nullOrBic(string $countryCode, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrBoolType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrBoolVal($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrBsn($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrCallableType($description = null): self;

    /**
     * @param callable $callback
     * @param Throwable|string|null $description
     */
    public function nullOrCallback(callable $callback, $description = null): self;

    /**
     * @param string|null $charset
     * @param Throwable|string|null $description
     */
    public function nullOrCharset(?string $charset = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrCnh($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrCnpj($description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function nullOrConsonant(?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $containsValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public function nullOrContains($containsValue, bool $identical = false, $description = null): self;

    /**
     * @param array<mixed> $needles
     * @param bool $strictCompareArray
     * @param Throwable|string|null $description
     */
    public function nullOrContainsAny(array $needles, bool $strictCompareArray = false, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function nullOrControl(?string $additionalChars = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrCountable($description = null): self;

    /**
     * @param string $set
     * @param Throwable|string|null $description
     */
    public function nullOrCountryCode(string $set = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrCpf($description = null): self;

    /**
     * @param string $brand
     * @param Throwable|string|null $description
     */
    public function nullOrCreditCard(string $brand = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrCurrencyCode($description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function nullOrDate(string $format = 'Y-m-d', $description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function nullOrDateTime(string $format = null, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function nullOrDigit(?string $additionalChars = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrDirectory($description = null): self;

    /**
     * @param bool $tldCheck
     * @param Throwable|string|null $description
     */
    public function nullOrDomain(bool $tldCheck = true, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrEmail($description = null): self;

    /**
     * @param mixed $endValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public function nullOrEndsWith($endValue, bool $identical = false, $description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function nullOrEquals($compareTo, $description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function nullOrEquivalent($compareTo, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrEven($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrExecutable($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrExists($description = null): self;

    /**
     * @param string $extension
     * @param Throwable|string|null $description
     */
    public function nullOrExtension(string $extension, $description = null): self;

    /**
     * @param int $dividend
     * @param Throwable|string|null $description
     */
    public function nullOrFactor(int $dividend, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrFalseVal($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrFibonacci($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrFile($description = null): self;

    /**
     * @param int $filter
     * @param mixed $options
     * @param Throwable|string|null $description
     */
    public function nullOrFilterVar(int $filter, $options = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrFinite($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrFloatType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrFloatVal($description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function nullOrGraph(?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function nullOrGreaterThan($compareTo, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrHexRgbColor($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrIban($description = null): self;

    /**
     * @param mixed $value
     * @param Throwable|string|null $description
     */
    public function nullOrIdentical($value, $description = null): self;

    /**
     * @param finfo $fileInfo
     * @param Throwable|string|null $description
     */
    public function nullOrImage(finfo $fileInfo = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrImei($description = null): self;

    /**
     * @param mixed $haystack
     * @param bool $compareIdentical
     * @param Throwable|string|null $description
     */
    public function nullOrIn($haystack, bool $compareIdentical = false, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrInfinite($description = null): self;

    /**
     * @param string $instanceName
     * @param Throwable|string|null $description
     */
    public function nullOrInstance(string $instanceName, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrIntType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrIntVal($description = null): self;

    /**
     * @param string $range
     * @param int $options
     * @param Throwable|string|null $description
     */
    public function nullOrIp(string $range = '*', int $options = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrIsbn($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrIterableType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrJson($description = null): self;

    /**
     * @param string $set
     * @param Throwable|string|null $description
     */
    public function nullOrLanguageCode(string $set = null, $description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function nullOrLeapDate(string $format, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrLeapYear($description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function nullOrLessThan($compareTo, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrLowercase($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrLuhn($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrMacAddress($description = null): self;

    /**
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function nullOrMaxAge(int $age, string $format = null, $description = null): self;

    /**
     * @param string $mimetype
     * @param Throwable|string|null $description
     */
    public function nullOrMimetype(string $mimetype, $description = null): self;

    /**
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function nullOrMinAge(int $age, string $format = null, $description = null): self;

    /**
     * @param int $multipleOf
     * @param Throwable|string|null $description
     */
    public function nullOrMultiple(int $multipleOf, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNegative($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNfeAccessKey($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNif($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNip($description = null): self;

    /**
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public function nullOrNo($useLocale = false, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNoWhitespace($description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function nullOrNot($compareTo, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function nullOrNotAlnum(?string $additionalChars = null, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function nullOrNotAlpha(?string $additionalChars = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotArrayType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotArrayVal($description = null): self;

    /**
     * @param int $base
     * @param string $chars
     * @param Throwable|string|null $description
     */
    public function nullOrNotBase(int $base, string $chars = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotBase64($description = null): self;

    /**
     * @param mixed $minimum
     * @param mixed $maximum
     * @param Throwable|string|null $description
     */
    public function nullOrNotBetween($minimum, $maximum, $description = null): self;

    /**
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public function nullOrNotBic(string $countryCode, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotBlank($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotBoolType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotBoolVal($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotBsn($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotCallableType($description = null): self;

    /**
     * @param callable $callback
     * @param Throwable|string|null $description
     */
    public function nullOrNotCallback(callable $callback, $description = null): self;

    /**
     * @param string|null $charset
     * @param Throwable|string|null $description
     */
    public function nullOrNotCharset(?string $charset = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotCnh($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotCnpj($description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function nullOrNotConsonant(?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $containsValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public function nullOrNotContains($containsValue, bool $identical = false, $description = null): self;

    /**
     * @param array<mixed> $needles
     * @param bool $strictCompareArray
     * @param Throwable|string|null $description
     */
    public function nullOrNotContainsAny(array $needles, bool $strictCompareArray = false, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function nullOrNotControl(?string $additionalChars = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotCountable($description = null): self;

    /**
     * @param string $set
     * @param Throwable|string|null $description
     */
    public function nullOrNotCountryCode(string $set = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotCpf($description = null): self;

    /**
     * @param string $brand
     * @param Throwable|string|null $description
     */
    public function nullOrNotCreditCard(string $brand = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotCurrencyCode($description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function nullOrNotDate(string $format = 'Y-m-d', $description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function nullOrNotDateTime(string $format = null, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function nullOrNotDigit(?string $additionalChars = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotDirectory($description = null): self;

    /**
     * @param bool $tldCheck
     * @param Throwable|string|null $description
     */
    public function nullOrNotDomain(bool $tldCheck = true, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotEmail($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotEmoji($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotEmpty($description = null): self;

    /**
     * @param mixed $endValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public function nullOrNotEndsWith($endValue, bool $identical = false, $description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function nullOrNotEquals($compareTo, $description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function nullOrNotEquivalent($compareTo, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotEven($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotExecutable($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotExists($description = null): self;

    /**
     * @param string $extension
     * @param Throwable|string|null $description
     */
    public function nullOrNotExtension(string $extension, $description = null): self;

    /**
     * @param int $dividend
     * @param Throwable|string|null $description
     */
    public function nullOrNotFactor(int $dividend, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotFalseVal($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotFibonacci($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotFile($description = null): self;

    /**
     * @param int $filter
     * @param mixed $options
     * @param Throwable|string|null $description
     */
    public function nullOrNotFilterVar(int $filter, $options = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotFinite($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotFloatType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotFloatVal($description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function nullOrNotGraph(?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function nullOrNotGreaterThan($compareTo, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotHexRgbColor($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotIban($description = null): self;

    /**
     * @param mixed $value
     * @param Throwable|string|null $description
     */
    public function nullOrNotIdentical($value, $description = null): self;

    /**
     * @param finfo $fileInfo
     * @param Throwable|string|null $description
     */
    public function nullOrNotImage(finfo $fileInfo = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotImei($description = null): self;

    /**
     * @param mixed $haystack
     * @param bool $compareIdentical
     * @param Throwable|string|null $description
     */
    public function nullOrNotIn($haystack, bool $compareIdentical = false, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotInfinite($description = null): self;

    /**
     * @param string $instanceName
     * @param Throwable|string|null $description
     */
    public function nullOrNotInstance(string $instanceName, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotIntType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotIntVal($description = null): self;

    /**
     * @param string $range
     * @param int $options
     * @param Throwable|string|null $description
     */
    public function nullOrNotIp(string $range = '*', int $options = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotIsbn($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotIterableType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotJson($description = null): self;

    /**
     * @param string $set
     * @param Throwable|string|null $description
     */
    public function nullOrNotLanguageCode(string $set = null, $description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function nullOrNotLeapDate(string $format, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotLeapYear($description = null): self;

    /**
     * @param mixed $compareTo
     * @param Throwable|string|null $description
     */
    public function nullOrNotLessThan($compareTo, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotLowercase($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotLuhn($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotMacAddress($description = null): self;

    /**
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function nullOrNotMaxAge(int $age, string $format = null, $description = null): self;

    /**
     * @param string $mimetype
     * @param Throwable|string|null $description
     */
    public function nullOrNotMimetype(string $mimetype, $description = null): self;

    /**
     * @param int $age
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function nullOrNotMinAge(int $age, string $format = null, $description = null): self;

    /**
     * @param int $multipleOf
     * @param Throwable|string|null $description
     */
    public function nullOrNotMultiple(int $multipleOf, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotNegative($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotNfeAccessKey($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotNif($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotNip($description = null): self;

    /**
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public function nullOrNotNo($useLocale = false, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotNoWhitespace($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotNullType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotNumber($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotNumericVal($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotObjectType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotOdd($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotOptional($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotPerfectSquare($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotPesel($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotPhone($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotPhpLabel($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotPis($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotPolishIdCard($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotPositive($description = null): self;

    /**
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public function nullOrNotPostalCode(string $countryCode, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotPrimeNumber($description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function nullOrNotPrintable(?string $additionalChars = null, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function nullOrNotPunct(?string $additionalChars = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotReadable($description = null): self;

    /**
     * @param string $regex
     * @param Throwable|string|null $description
     */
    public function nullOrNotRegex(string $regex, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotResourceType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotRoman($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotScalarVal($description = null): self;

    /**
     * @param string $minSize
     * @param string $maxSize
     * @param Throwable|string|null $description
     */
    public function nullOrNotSize(string $minSize = null, string $maxSize = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotSlug($description = null): self;

    /**
     * @param string $direction
     * @param Throwable|string|null $description
     */
    public function nullOrNotSorted(string $direction, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function nullOrNotSpace(?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $startValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public function nullOrNotStartsWith($startValue, bool $identical = false, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotStringType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotStringVal($description = null): self;

    /**
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public function nullOrNotSubdivisionCode(string $countryCode, $description = null): self;

    /**
     * @param array<mixed> $superset
     * @param Throwable|string|null $description
     */
    public function nullOrNotSubset(array $superset, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotSymbolicLink($description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function nullOrNotTime(string $format = 'H:i:s', $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotTld($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotTrueVal($description = null): self;

    /**
     * @param string $type
     * @param Throwable|string|null $description
     */
    public function nullOrNotType(string $type, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotUnique($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotUploaded($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotUppercase($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotUrl($description = null): self;

    /**
     * @param int $version
     * @param Throwable|string|null $description
     */
    public function nullOrNotUuid(int $version = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotVersion($description = null): self;

    /**
     * @param string $service
     * @param Throwable|string|null $description
     */
    public function nullOrNotVideoUrl(string $service = null, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function nullOrNotVowel(?string $additionalChars = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNotWritable($description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function nullOrNotXdigit(?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public function nullOrNotYes($useLocale = false, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNullType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNumber($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrNumericVal($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrObjectType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrOdd($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrPerfectSquare($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrPesel($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrPhone($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrPhpLabel($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrPis($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrPolishIdCard($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrPositive($description = null): self;

    /**
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public function nullOrPostalCode(string $countryCode, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrPrimeNumber($description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function nullOrPrintable(?string $additionalChars = null, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function nullOrPunct(?string $additionalChars = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrReadable($description = null): self;

    /**
     * @param string $regex
     * @param Throwable|string|null $description
     */
    public function nullOrRegex(string $regex, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrResourceType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrRoman($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrScalarVal($description = null): self;

    /**
     * @param string $minSize
     * @param string $maxSize
     * @param Throwable|string|null $description
     */
    public function nullOrSize(string $minSize = null, string $maxSize = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrSlug($description = null): self;

    /**
     * @param string $direction
     * @param Throwable|string|null $description
     */
    public function nullOrSorted(string $direction, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function nullOrSpace(?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $startValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public function nullOrStartsWith($startValue, bool $identical = false, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrStringType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrStringVal($description = null): self;

    /**
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public function nullOrSubdivisionCode(string $countryCode, $description = null): self;

    /**
     * @param array<mixed> $superset
     * @param Throwable|string|null $description
     */
    public function nullOrSubset(array $superset, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrSymbolicLink($description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function nullOrTime(string $format = 'H:i:s', $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrTld($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrTrueVal($description = null): self;

    /**
     * @param string $type
     * @param Throwable|string|null $description
     */
    public function nullOrType(string $type, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrUnique($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrUploaded($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrUppercase($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrUrl($description = null): self;

    /**
     * @param int $version
     * @param Throwable|string|null $description
     */
    public function nullOrUuid(int $version = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrVersion($description = null): self;

    /**
     * @param string $service
     * @param Throwable|string|null $description
     */
    public function nullOrVideoUrl(string $service = null, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function nullOrVowel(?string $additionalChars = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullOrWritable($description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function nullOrXdigit(?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public function nullOrYes($useLocale = false, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function nullType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function number($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function numericVal($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function objectType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function odd($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function perfectSquare($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function pesel($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function phone($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function phpLabel($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function pis($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function polishIdCard($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function positive($description = null): self;

    /**
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public function postalCode(string $countryCode, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function primeNumber($description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function printable(?string $additionalChars = null, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function punct(?string $additionalChars = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function readable($description = null): self;

    /**
     * @param string $regex
     * @param Throwable|string|null $description
     */
    public function regex(string $regex, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function resourceType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function roman($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function scalarVal($description = null): self;

    /**
     * @param string $minSize
     * @param string $maxSize
     * @param Throwable|string|null $description
     */
    public function size(string $minSize = null, string $maxSize = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function slug($description = null): self;

    /**
     * @param string $direction
     * @param Throwable|string|null $description
     */
    public function sorted(string $direction, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function space(?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $startValue
     * @param bool $identical
     * @param Throwable|string|null $description
     */
    public function startsWith($startValue, bool $identical = false, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function stringType($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function stringVal($description = null): self;

    /**
     * @param string $countryCode
     * @param Throwable|string|null $description
     */
    public function subdivisionCode(string $countryCode, $description = null): self;

    /**
     * @param array<mixed> $superset
     * @param Throwable|string|null $description
     */
    public function subset(array $superset, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function symbolicLink($description = null): self;

    /**
     * @param string $format
     * @param Throwable|string|null $description
     */
    public function time(string $format = 'H:i:s', $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function tld($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function trueVal($description = null): self;

    /**
     * @param string $type
     * @param Throwable|string|null $description
     */
    public function type(string $type, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function unique($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function uploaded($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function uppercase($description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function url($description = null): self;

    /**
     * @param int $version
     * @param Throwable|string|null $description
     */
    public function uuid(int $version = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function version($description = null): self;

    /**
     * @param string $service
     * @param Throwable|string|null $description
     */
    public function videoUrl(string $service = null, $description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function vowel(?string $additionalChars = null, $description = null): self;

    /**
     * @param Throwable|string|null $description
     */
    public function writable($description = null): self;

    /**
     * @param string|null $additionalChars
     * @param Throwable|string|null $description
     */
    public function xdigit(?string $additionalChars = null, $description = null): self;

    /**
     * @param mixed $useLocale
     * @param Throwable|string|null $description
     */
    public function yes($useLocale = false, $description = null): self;

}
