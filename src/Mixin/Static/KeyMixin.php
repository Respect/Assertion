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

use finfo;
use Throwable;

// phpcs:disable Generic.Files.LineLength.TooLong
interface KeyMixin
{
    public static function keyPresent(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotPresent(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function key(mixed $input, mixed $key, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function keyAlnum(mixed $input, mixed $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyAlpha(mixed $input, mixed $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyArrayType(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyArrayVal(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyBase(mixed $input, mixed $key, int $base, ?string $chars = null, null|string|Throwable $description = null): void;

    public static function keyBase64(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyBetween(mixed $input, mixed $key, mixed $minimum, mixed $maximum, null|string|Throwable $description = null): void;

    public static function keyBic(mixed $input, mixed $key, string $countryCode, null|string|Throwable $description = null): void;

    public static function keyBoolType(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyBoolVal(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyBsn(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyCallableType(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyCallback(mixed $input, mixed $key, callable $callback, null|string|Throwable $description = null): void;

    public static function keyCharset(mixed $input, mixed $key, string $charset = '', null|string|Throwable $description = null): void;

    public static function keyCnh(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyCnpj(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyControl(mixed $input, mixed $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyConsonant(mixed $input, mixed $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyContains(mixed $input, mixed $key, mixed $containsValue, bool $identical = false, null|string|Throwable $description = null): void;

    /**
    * @param mixed[] $needles
    */
    public static function keyContainsAny(mixed $input, mixed $key, array $needles, bool $strictCompareArray = false, null|string|Throwable $description = null): void;

    public static function keyCountable(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyCountryCode(mixed $input, mixed $key, ?string $set = null, null|string|Throwable $description = null): void;

    public static function keyCurrencyCode(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyCpf(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyCreditCard(mixed $input, mixed $key, ?string $brand = null, null|string|Throwable $description = null): void;

    public static function keyDate(mixed $input, mixed $key, string $format = 'Y-m-d', null|string|Throwable $description = null): void;

    public static function keyDateTime(mixed $input, mixed $key, ?string $format = null, null|string|Throwable $description = null): void;

    public static function keyDecimal(mixed $input, mixed $key, int $decimals, null|string|Throwable $description = null): void;

    public static function keyDigit(mixed $input, mixed $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyDirectory(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyDomain(mixed $input, mixed $key, bool $tldCheck = true, null|string|Throwable $description = null): void;

    public static function keyEmail(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyEndsWith(mixed $input, mixed $key, mixed $endValue, bool $identical = false, null|string|Throwable $description = null): void;

    public static function keyEquals(mixed $input, mixed $key, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function keyEquivalent(mixed $input, mixed $key, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function keyEven(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyExecutable(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyExists(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyExtension(mixed $input, mixed $key, string $extension, null|string|Throwable $description = null): void;

    public static function keyFactor(mixed $input, mixed $key, int $dividend, null|string|Throwable $description = null): void;

    public static function keyFalseVal(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyFibonacci(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyFile(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    /**
    * @param mixed[]|int $options
    */
    public static function keyFilterVar(mixed $input, mixed $key, int $filter, array|int|null $options = null, null|string|Throwable $description = null): void;

    public static function keyFinite(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyFloatVal(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyFloatType(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyGraph(mixed $input, mixed $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyGreaterThan(mixed $input, mixed $key, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function keyHexRgbColor(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyIban(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyIdentical(mixed $input, mixed $key, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function keyImage(mixed $input, mixed $key, ?finfo $fileInfo = null, null|string|Throwable $description = null): void;

    public static function keyImei(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyIn(mixed $input, mixed $key, mixed $haystack, bool $compareIdentical = false, null|string|Throwable $description = null): void;

    public static function keyInfinite(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyInstance(mixed $input, mixed $key, string $instanceName, null|string|Throwable $description = null): void;

    public static function keyIntVal(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyIntType(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyIp(mixed $input, mixed $key, string $range = '*', ?int $options = null, null|string|Throwable $description = null): void;

    public static function keyIsbn(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyIterableType(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyJson(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyLanguageCode(mixed $input, mixed $key, ?string $set = null, null|string|Throwable $description = null): void;

    public static function keyLeapDate(mixed $input, mixed $key, string $format, null|string|Throwable $description = null): void;

    public static function keyLeapYear(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyLowercase(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyLessThan(mixed $input, mixed $key, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function keyLuhn(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyMacAddress(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyMaxAge(mixed $input, mixed $key, int $age, ?string $format = null, null|string|Throwable $description = null): void;

    public static function keyMimetype(mixed $input, mixed $key, string $mimetype, null|string|Throwable $description = null): void;

    public static function keyMinAge(mixed $input, mixed $key, int $age, ?string $format = null, null|string|Throwable $description = null): void;

    public static function keyMultiple(mixed $input, mixed $key, int $multipleOf, null|string|Throwable $description = null): void;

    public static function keyNegative(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNfeAccessKey(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNif(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNip(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNo(mixed $input, mixed $key, bool $useLocale = false, null|string|Throwable $description = null): void;

    public static function keyNotBlank(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotEmoji(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotEmpty(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotOptional(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNoWhitespace(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNullType(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNumber(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNumericVal(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyObjectType(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyOdd(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyPerfectSquare(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyPesel(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyPhone(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyPhpLabel(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyPis(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyPolishIdCard(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyPositive(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyPostalCode(mixed $input, mixed $key, string $countryCode, null|string|Throwable $description = null): void;

    public static function keyPrimeNumber(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyPrintable(mixed $input, mixed $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyPunct(mixed $input, mixed $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyReadable(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyRegex(mixed $input, mixed $key, string $regex, null|string|Throwable $description = null): void;

    public static function keyResourceType(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyRoman(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyScalarVal(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keySize(mixed $input, mixed $key, ?string $minSize = null, ?string $maxSize = null, null|string|Throwable $description = null): void;

    public static function keySlug(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keySorted(mixed $input, mixed $key, string $direction, null|string|Throwable $description = null): void;

    public static function keySpace(mixed $input, mixed $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyStartsWith(mixed $input, mixed $key, mixed $startValue, bool $identical = false, null|string|Throwable $description = null): void;

    public static function keyStringType(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyStringVal(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keySubdivisionCode(mixed $input, mixed $key, string $countryCode, null|string|Throwable $description = null): void;

    /**
    * @param mixed[] $superset
    */
    public static function keySubset(mixed $input, mixed $key, array $superset, null|string|Throwable $description = null): void;

    public static function keySymbolicLink(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyTime(mixed $input, mixed $key, string $format = 'H:i:s', null|string|Throwable $description = null): void;

    public static function keyTld(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyTrueVal(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyType(mixed $input, mixed $key, string $type, null|string|Throwable $description = null): void;

    public static function keyUnique(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyUploaded(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyUppercase(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyUrl(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyUuid(mixed $input, mixed $key, ?int $version = null, null|string|Throwable $description = null): void;

    public static function keyVersion(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyVideoUrl(mixed $input, mixed $key, ?string $service = null, null|string|Throwable $description = null): void;

    public static function keyVowel(mixed $input, mixed $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyWritable(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyXdigit(mixed $input, mixed $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyYes(mixed $input, mixed $key, bool $useLocale = false, null|string|Throwable $description = null): void;

    public static function keyNot(mixed $input, mixed $key, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function keyNotAlnum(mixed $input, mixed $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyNotAlpha(mixed $input, mixed $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyNotArrayType(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotArrayVal(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotBase(mixed $input, mixed $key, int $base, ?string $chars = null, null|string|Throwable $description = null): void;

    public static function keyNotBase64(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotBetween(mixed $input, mixed $key, mixed $minimum, mixed $maximum, null|string|Throwable $description = null): void;

    public static function keyNotBic(mixed $input, mixed $key, string $countryCode, null|string|Throwable $description = null): void;

    public static function keyNotBoolType(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotBoolVal(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotBsn(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotCallableType(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotCallback(mixed $input, mixed $key, callable $callback, null|string|Throwable $description = null): void;

    public static function keyNotCharset(mixed $input, mixed $key, string $charset = '', null|string|Throwable $description = null): void;

    public static function keyNotCnh(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotCnpj(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotControl(mixed $input, mixed $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyNotConsonant(mixed $input, mixed $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyNotContains(mixed $input, mixed $key, mixed $containsValue, bool $identical = false, null|string|Throwable $description = null): void;

    /**
    * @param mixed[] $needles
    */
    public static function keyNotContainsAny(mixed $input, mixed $key, array $needles, bool $strictCompareArray = false, null|string|Throwable $description = null): void;

    public static function keyNotCountable(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotCountryCode(mixed $input, mixed $key, ?string $set = null, null|string|Throwable $description = null): void;

    public static function keyNotCurrencyCode(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotCpf(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotCreditCard(mixed $input, mixed $key, ?string $brand = null, null|string|Throwable $description = null): void;

    public static function keyNotDate(mixed $input, mixed $key, string $format = 'Y-m-d', null|string|Throwable $description = null): void;

    public static function keyNotDateTime(mixed $input, mixed $key, ?string $format = null, null|string|Throwable $description = null): void;

    public static function keyNotDecimal(mixed $input, mixed $key, int $decimals, null|string|Throwable $description = null): void;

    public static function keyNotDigit(mixed $input, mixed $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyNotDirectory(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotDomain(mixed $input, mixed $key, bool $tldCheck = true, null|string|Throwable $description = null): void;

    public static function keyNotEmail(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotEndsWith(mixed $input, mixed $key, mixed $endValue, bool $identical = false, null|string|Throwable $description = null): void;

    public static function keyNotEquals(mixed $input, mixed $key, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function keyNotEquivalent(mixed $input, mixed $key, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function keyNotEven(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotExecutable(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotExists(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotExtension(mixed $input, mixed $key, string $extension, null|string|Throwable $description = null): void;

    public static function keyNotFactor(mixed $input, mixed $key, int $dividend, null|string|Throwable $description = null): void;

    public static function keyNotFalseVal(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotFibonacci(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotFile(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    /**
    * @param mixed[]|int $options
    */
    public static function keyNotFilterVar(mixed $input, mixed $key, int $filter, array|int|null $options = null, null|string|Throwable $description = null): void;

    public static function keyNotFinite(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotFloatVal(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotFloatType(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotGraph(mixed $input, mixed $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyNotGreaterThan(mixed $input, mixed $key, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function keyNotHexRgbColor(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotIban(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotIdentical(mixed $input, mixed $key, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function keyNotImage(mixed $input, mixed $key, ?finfo $fileInfo = null, null|string|Throwable $description = null): void;

    public static function keyNotImei(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotIn(mixed $input, mixed $key, mixed $haystack, bool $compareIdentical = false, null|string|Throwable $description = null): void;

    public static function keyNotInfinite(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotInstance(mixed $input, mixed $key, string $instanceName, null|string|Throwable $description = null): void;

    public static function keyNotIntVal(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotIntType(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotIp(mixed $input, mixed $key, string $range = '*', ?int $options = null, null|string|Throwable $description = null): void;

    public static function keyNotIsbn(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotIterableType(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotJson(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotLanguageCode(mixed $input, mixed $key, ?string $set = null, null|string|Throwable $description = null): void;

    public static function keyNotLeapDate(mixed $input, mixed $key, string $format, null|string|Throwable $description = null): void;

    public static function keyNotLeapYear(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotLowercase(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotLessThan(mixed $input, mixed $key, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function keyNotLuhn(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotMacAddress(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotMaxAge(mixed $input, mixed $key, int $age, ?string $format = null, null|string|Throwable $description = null): void;

    public static function keyNotMimetype(mixed $input, mixed $key, string $mimetype, null|string|Throwable $description = null): void;

    public static function keyNotMinAge(mixed $input, mixed $key, int $age, ?string $format = null, null|string|Throwable $description = null): void;

    public static function keyNotMultiple(mixed $input, mixed $key, int $multipleOf, null|string|Throwable $description = null): void;

    public static function keyNotNegative(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotNfeAccessKey(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotNif(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotNip(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotNo(mixed $input, mixed $key, bool $useLocale = false, null|string|Throwable $description = null): void;

    public static function keyNotNoWhitespace(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotNullType(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotNumber(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotNumericVal(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotObjectType(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotOdd(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotPerfectSquare(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotPesel(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotPhone(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotPhpLabel(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotPis(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotPolishIdCard(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotPositive(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotPostalCode(mixed $input, mixed $key, string $countryCode, null|string|Throwable $description = null): void;

    public static function keyNotPrimeNumber(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotPrintable(mixed $input, mixed $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyNotPunct(mixed $input, mixed $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyNotReadable(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotRegex(mixed $input, mixed $key, string $regex, null|string|Throwable $description = null): void;

    public static function keyNotResourceType(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotRoman(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotScalarVal(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotSize(mixed $input, mixed $key, ?string $minSize = null, ?string $maxSize = null, null|string|Throwable $description = null): void;

    public static function keyNotSlug(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotSorted(mixed $input, mixed $key, string $direction, null|string|Throwable $description = null): void;

    public static function keyNotSpace(mixed $input, mixed $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyNotStartsWith(mixed $input, mixed $key, mixed $startValue, bool $identical = false, null|string|Throwable $description = null): void;

    public static function keyNotStringType(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotStringVal(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotSubdivisionCode(mixed $input, mixed $key, string $countryCode, null|string|Throwable $description = null): void;

    /**
    * @param mixed[] $superset
    */
    public static function keyNotSubset(mixed $input, mixed $key, array $superset, null|string|Throwable $description = null): void;

    public static function keyNotSymbolicLink(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotTime(mixed $input, mixed $key, string $format = 'H:i:s', null|string|Throwable $description = null): void;

    public static function keyNotTld(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotTrueVal(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotType(mixed $input, mixed $key, string $type, null|string|Throwable $description = null): void;

    public static function keyNotUnique(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotUploaded(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotUppercase(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotUrl(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotUuid(mixed $input, mixed $key, ?int $version = null, null|string|Throwable $description = null): void;

    public static function keyNotVersion(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotVideoUrl(mixed $input, mixed $key, ?string $service = null, null|string|Throwable $description = null): void;

    public static function keyNotVowel(mixed $input, mixed $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyNotWritable(mixed $input, mixed $key, null|string|Throwable $description = null): void;

    public static function keyNotXdigit(mixed $input, mixed $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyNotYes(mixed $input, mixed $key, bool $useLocale = false, null|string|Throwable $description = null): void;
}
