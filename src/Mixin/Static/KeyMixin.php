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

    public static function keyAlnum(mixed $input, int|string $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyAlpha(mixed $input, int|string $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyArrayType(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyArrayVal(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyBase(mixed $input, int|string $key, int $base, ?string $chars = null, null|string|Throwable $description = null): void;

    public static function keyBase64(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyBetween(mixed $input, int|string $key, mixed $minimum, mixed $maximum, null|string|Throwable $description = null): void;

    public static function keyBic(mixed $input, int|string $key, string $countryCode, null|string|Throwable $description = null): void;

    public static function keyBoolType(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyBoolVal(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyBsn(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyCallableType(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyCallback(mixed $input, int|string $key, callable $callback, null|string|Throwable $description = null): void;

    public static function keyCharset(mixed $input, int|string $key, string $charset = '', null|string|Throwable $description = null): void;

    public static function keyCnh(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyCnpj(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyControl(mixed $input, int|string $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyConsonant(mixed $input, int|string $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyContains(mixed $input, int|string $key, mixed $containsValue, bool $identical = false, null|string|Throwable $description = null): void;

    /**
    * @param mixed[] $needles
    */
    public static function keyContainsAny(mixed $input, int|string $key, array $needles, bool $strictCompareArray = false, null|string|Throwable $description = null): void;

    public static function keyCountable(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyCountryCode(mixed $input, int|string $key, ?string $set = null, null|string|Throwable $description = null): void;

    public static function keyCurrencyCode(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyCpf(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyCreditCard(mixed $input, int|string $key, ?string $brand = null, null|string|Throwable $description = null): void;

    public static function keyDate(mixed $input, int|string $key, string $format = 'Y-m-d', null|string|Throwable $description = null): void;

    public static function keyDateTime(mixed $input, int|string $key, ?string $format = null, null|string|Throwable $description = null): void;

    public static function keyDecimal(mixed $input, int|string $key, int $decimals, null|string|Throwable $description = null): void;

    public static function keyDigit(mixed $input, int|string $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyDirectory(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyDomain(mixed $input, int|string $key, bool $tldCheck = true, null|string|Throwable $description = null): void;

    public static function keyEmail(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyEndsWith(mixed $input, int|string $key, mixed $endValue, bool $identical = false, null|string|Throwable $description = null): void;

    public static function keyEquals(mixed $input, int|string $key, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function keyEquivalent(mixed $input, int|string $key, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function keyEven(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyExecutable(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyExists(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyExtension(mixed $input, int|string $key, string $extension, null|string|Throwable $description = null): void;

    public static function keyFactor(mixed $input, int|string $key, int $dividend, null|string|Throwable $description = null): void;

    public static function keyFalseVal(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyFibonacci(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyFile(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    /**
    * @param mixed[]|int $options
    */
    public static function keyFilterVar(mixed $input, int|string $key, int $filter, array|int|null $options = null, null|string|Throwable $description = null): void;

    public static function keyFinite(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyFloatVal(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyFloatType(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyGraph(mixed $input, int|string $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyGreaterThan(mixed $input, int|string $key, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function keyHexRgbColor(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyIban(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyIdentical(mixed $input, int|string $key, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function keyImage(mixed $input, int|string $key, ?finfo $fileInfo = null, null|string|Throwable $description = null): void;

    public static function keyImei(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyIn(mixed $input, int|string $key, mixed $haystack, bool $compareIdentical = false, null|string|Throwable $description = null): void;

    public static function keyInfinite(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyInstance(mixed $input, int|string $key, string $instanceName, null|string|Throwable $description = null): void;

    public static function keyIntVal(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyIntType(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyIp(mixed $input, int|string $key, string $range = '*', ?int $options = null, null|string|Throwable $description = null): void;

    public static function keyIsbn(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyIterableType(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyJson(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyLanguageCode(mixed $input, int|string $key, ?string $set = null, null|string|Throwable $description = null): void;

    public static function keyLeapDate(mixed $input, int|string $key, string $format, null|string|Throwable $description = null): void;

    public static function keyLeapYear(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyLowercase(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyLessThan(mixed $input, int|string $key, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function keyLuhn(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyMacAddress(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyMaxAge(mixed $input, int|string $key, int $age, ?string $format = null, null|string|Throwable $description = null): void;

    public static function keyMimetype(mixed $input, int|string $key, string $mimetype, null|string|Throwable $description = null): void;

    public static function keyMinAge(mixed $input, int|string $key, int $age, ?string $format = null, null|string|Throwable $description = null): void;

    public static function keyMultiple(mixed $input, int|string $key, int $multipleOf, null|string|Throwable $description = null): void;

    public static function keyNegative(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNfeAccessKey(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNif(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNip(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNo(mixed $input, int|string $key, bool $useLocale = false, null|string|Throwable $description = null): void;

    public static function keyNotBlank(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotEmoji(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotEmpty(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotOptional(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNoWhitespace(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNullType(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNumber(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNumericVal(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyObjectType(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyOdd(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyPerfectSquare(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyPesel(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyPhone(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyPhpLabel(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyPis(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyPolishIdCard(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyPositive(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyPostalCode(mixed $input, int|string $key, string $countryCode, null|string|Throwable $description = null): void;

    public static function keyPrimeNumber(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyPrintable(mixed $input, int|string $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyPunct(mixed $input, int|string $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyReadable(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyRegex(mixed $input, int|string $key, string $regex, null|string|Throwable $description = null): void;

    public static function keyResourceType(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyRoman(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyScalarVal(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keySize(mixed $input, int|string $key, ?string $minSize = null, ?string $maxSize = null, null|string|Throwable $description = null): void;

    public static function keySlug(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keySorted(mixed $input, int|string $key, string $direction, null|string|Throwable $description = null): void;

    public static function keySpace(mixed $input, int|string $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyStartsWith(mixed $input, int|string $key, mixed $startValue, bool $identical = false, null|string|Throwable $description = null): void;

    public static function keyStringType(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyStringVal(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keySubdivisionCode(mixed $input, int|string $key, string $countryCode, null|string|Throwable $description = null): void;

    /**
    * @param mixed[] $superset
    */
    public static function keySubset(mixed $input, int|string $key, array $superset, null|string|Throwable $description = null): void;

    public static function keySymbolicLink(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyTime(mixed $input, int|string $key, string $format = 'H:i:s', null|string|Throwable $description = null): void;

    public static function keyTld(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyTrueVal(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyType(mixed $input, int|string $key, string $type, null|string|Throwable $description = null): void;

    public static function keyUnique(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyUploaded(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyUppercase(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyUrl(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyUuid(mixed $input, int|string $key, ?int $version = null, null|string|Throwable $description = null): void;

    public static function keyVersion(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyVideoUrl(mixed $input, int|string $key, ?string $service = null, null|string|Throwable $description = null): void;

    public static function keyVowel(mixed $input, int|string $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyWritable(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyXdigit(mixed $input, int|string $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyYes(mixed $input, int|string $key, bool $useLocale = false, null|string|Throwable $description = null): void;

    public static function keyNotAlnum(mixed $input, int|string $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyNotAlpha(mixed $input, int|string $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyNotArrayType(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotArrayVal(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotBase(mixed $input, int|string $key, int $base, ?string $chars = null, null|string|Throwable $description = null): void;

    public static function keyNotBase64(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotBetween(mixed $input, int|string $key, mixed $minimum, mixed $maximum, null|string|Throwable $description = null): void;

    public static function keyNotBic(mixed $input, int|string $key, string $countryCode, null|string|Throwable $description = null): void;

    public static function keyNotBoolType(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotBoolVal(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotBsn(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotCallableType(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotCallback(mixed $input, int|string $key, callable $callback, null|string|Throwable $description = null): void;

    public static function keyNotCharset(mixed $input, int|string $key, string $charset = '', null|string|Throwable $description = null): void;

    public static function keyNotCnh(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotCnpj(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotControl(mixed $input, int|string $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyNotConsonant(mixed $input, int|string $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyNotContains(mixed $input, int|string $key, mixed $containsValue, bool $identical = false, null|string|Throwable $description = null): void;

    /**
    * @param mixed[] $needles
    */
    public static function keyNotContainsAny(mixed $input, int|string $key, array $needles, bool $strictCompareArray = false, null|string|Throwable $description = null): void;

    public static function keyNotCountable(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotCountryCode(mixed $input, int|string $key, ?string $set = null, null|string|Throwable $description = null): void;

    public static function keyNotCurrencyCode(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotCpf(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotCreditCard(mixed $input, int|string $key, ?string $brand = null, null|string|Throwable $description = null): void;

    public static function keyNotDate(mixed $input, int|string $key, string $format = 'Y-m-d', null|string|Throwable $description = null): void;

    public static function keyNotDateTime(mixed $input, int|string $key, ?string $format = null, null|string|Throwable $description = null): void;

    public static function keyNotDecimal(mixed $input, int|string $key, int $decimals, null|string|Throwable $description = null): void;

    public static function keyNotDigit(mixed $input, int|string $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyNotDirectory(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotDomain(mixed $input, int|string $key, bool $tldCheck = true, null|string|Throwable $description = null): void;

    public static function keyNotEmail(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotEndsWith(mixed $input, int|string $key, mixed $endValue, bool $identical = false, null|string|Throwable $description = null): void;

    public static function keyNotEquals(mixed $input, int|string $key, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function keyNotEquivalent(mixed $input, int|string $key, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function keyNotEven(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotExecutable(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotExists(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotExtension(mixed $input, int|string $key, string $extension, null|string|Throwable $description = null): void;

    public static function keyNotFactor(mixed $input, int|string $key, int $dividend, null|string|Throwable $description = null): void;

    public static function keyNotFalseVal(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotFibonacci(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotFile(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    /**
    * @param mixed[]|int $options
    */
    public static function keyNotFilterVar(mixed $input, int|string $key, int $filter, array|int|null $options = null, null|string|Throwable $description = null): void;

    public static function keyNotFinite(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotFloatVal(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotFloatType(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotGraph(mixed $input, int|string $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyNotGreaterThan(mixed $input, int|string $key, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function keyNotHexRgbColor(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotIban(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotIdentical(mixed $input, int|string $key, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function keyNotImage(mixed $input, int|string $key, ?finfo $fileInfo = null, null|string|Throwable $description = null): void;

    public static function keyNotImei(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotIn(mixed $input, int|string $key, mixed $haystack, bool $compareIdentical = false, null|string|Throwable $description = null): void;

    public static function keyNotInfinite(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotInstance(mixed $input, int|string $key, string $instanceName, null|string|Throwable $description = null): void;

    public static function keyNotIntVal(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotIntType(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotIp(mixed $input, int|string $key, string $range = '*', ?int $options = null, null|string|Throwable $description = null): void;

    public static function keyNotIsbn(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotIterableType(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotJson(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotLanguageCode(mixed $input, int|string $key, ?string $set = null, null|string|Throwable $description = null): void;

    public static function keyNotLeapDate(mixed $input, int|string $key, string $format, null|string|Throwable $description = null): void;

    public static function keyNotLeapYear(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotLowercase(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotLessThan(mixed $input, int|string $key, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function keyNotLuhn(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotMacAddress(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotMaxAge(mixed $input, int|string $key, int $age, ?string $format = null, null|string|Throwable $description = null): void;

    public static function keyNotMimetype(mixed $input, int|string $key, string $mimetype, null|string|Throwable $description = null): void;

    public static function keyNotMinAge(mixed $input, int|string $key, int $age, ?string $format = null, null|string|Throwable $description = null): void;

    public static function keyNotMultiple(mixed $input, int|string $key, int $multipleOf, null|string|Throwable $description = null): void;

    public static function keyNotNegative(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotNfeAccessKey(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotNif(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotNip(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotNo(mixed $input, int|string $key, bool $useLocale = false, null|string|Throwable $description = null): void;

    public static function keyNotNoWhitespace(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotNullType(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotNumber(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotNumericVal(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotObjectType(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotOdd(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotPerfectSquare(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotPesel(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotPhone(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotPhpLabel(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotPis(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotPolishIdCard(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotPositive(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotPostalCode(mixed $input, int|string $key, string $countryCode, null|string|Throwable $description = null): void;

    public static function keyNotPrimeNumber(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotPrintable(mixed $input, int|string $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyNotPunct(mixed $input, int|string $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyNotReadable(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotRegex(mixed $input, int|string $key, string $regex, null|string|Throwable $description = null): void;

    public static function keyNotResourceType(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotRoman(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotScalarVal(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotSize(mixed $input, int|string $key, ?string $minSize = null, ?string $maxSize = null, null|string|Throwable $description = null): void;

    public static function keyNotSlug(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotSorted(mixed $input, int|string $key, string $direction, null|string|Throwable $description = null): void;

    public static function keyNotSpace(mixed $input, int|string $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyNotStartsWith(mixed $input, int|string $key, mixed $startValue, bool $identical = false, null|string|Throwable $description = null): void;

    public static function keyNotStringType(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotStringVal(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotSubdivisionCode(mixed $input, int|string $key, string $countryCode, null|string|Throwable $description = null): void;

    /**
    * @param mixed[] $superset
    */
    public static function keyNotSubset(mixed $input, int|string $key, array $superset, null|string|Throwable $description = null): void;

    public static function keyNotSymbolicLink(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotTime(mixed $input, int|string $key, string $format = 'H:i:s', null|string|Throwable $description = null): void;

    public static function keyNotTld(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotTrueVal(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotType(mixed $input, int|string $key, string $type, null|string|Throwable $description = null): void;

    public static function keyNotUnique(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotUploaded(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotUppercase(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotUrl(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotUuid(mixed $input, int|string $key, ?int $version = null, null|string|Throwable $description = null): void;

    public static function keyNotVersion(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotVideoUrl(mixed $input, int|string $key, ?string $service = null, null|string|Throwable $description = null): void;

    public static function keyNotVowel(mixed $input, int|string $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyNotWritable(mixed $input, int|string $key, null|string|Throwable $description = null): void;

    public static function keyNotXdigit(mixed $input, int|string $key, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function keyNotYes(mixed $input, int|string $key, bool $useLocale = false, null|string|Throwable $description = null): void;
}
