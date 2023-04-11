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
interface PropertyMixin
{
    public static function propertyPresent(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotPresent(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyAlnum(mixed $input, string $property, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function propertyAlpha(mixed $input, string $property, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function propertyArrayType(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyArrayVal(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyBase(mixed $input, string $property, int $base, ?string $chars = null, null|string|Throwable $description = null): void;

    public static function propertyBase64(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyBetween(mixed $input, string $property, mixed $minimum, mixed $maximum, null|string|Throwable $description = null): void;

    public static function propertyBic(mixed $input, string $property, string $countryCode, null|string|Throwable $description = null): void;

    public static function propertyBoolType(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyBoolVal(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyBsn(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyCallableType(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyCallback(mixed $input, string $property, callable $callback, null|string|Throwable $description = null): void;

    public static function propertyCharset(mixed $input, string $property, string $charset = '', null|string|Throwable $description = null): void;

    public static function propertyCnh(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyCnpj(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyControl(mixed $input, string $property, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function propertyConsonant(mixed $input, string $property, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function propertyContains(mixed $input, string $property, mixed $containsValue, bool $identical = false, null|string|Throwable $description = null): void;

    /**
    * @param mixed[] $needles
    */
    public static function propertyContainsAny(mixed $input, string $property, array $needles, bool $strictCompareArray = false, null|string|Throwable $description = null): void;

    public static function propertyCountable(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyCountryCode(mixed $input, string $property, ?string $set = null, null|string|Throwable $description = null): void;

    public static function propertyCurrencyCode(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyCpf(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyCreditCard(mixed $input, string $property, ?string $brand = null, null|string|Throwable $description = null): void;

    public static function propertyDate(mixed $input, string $property, string $format = 'Y-m-d', null|string|Throwable $description = null): void;

    public static function propertyDateTime(mixed $input, string $property, ?string $format = null, null|string|Throwable $description = null): void;

    public static function propertyDecimal(mixed $input, string $property, int $decimals, null|string|Throwable $description = null): void;

    public static function propertyDigit(mixed $input, string $property, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function propertyDirectory(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyDomain(mixed $input, string $property, bool $tldCheck = true, null|string|Throwable $description = null): void;

    public static function propertyEmail(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyEndsWith(mixed $input, string $property, mixed $endValue, bool $identical = false, null|string|Throwable $description = null): void;

    public static function propertyEquals(mixed $input, string $property, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function propertyEquivalent(mixed $input, string $property, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function propertyEven(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyExecutable(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyExists(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyExtension(mixed $input, string $property, string $extension, null|string|Throwable $description = null): void;

    public static function propertyFactor(mixed $input, string $property, int $dividend, null|string|Throwable $description = null): void;

    public static function propertyFalseVal(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyFibonacci(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyFile(mixed $input, string $property, null|string|Throwable $description = null): void;

    /**
    * @param mixed[]|int $options
    */
    public static function propertyFilterVar(mixed $input, string $property, int $filter, array|int|null $options = null, null|string|Throwable $description = null): void;

    public static function propertyFinite(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyFloatVal(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyFloatType(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyGraph(mixed $input, string $property, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function propertyGreaterThan(mixed $input, string $property, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function propertyHexRgbColor(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyIban(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyIdentical(mixed $input, string $property, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function propertyImage(mixed $input, string $property, ?finfo $fileInfo = null, null|string|Throwable $description = null): void;

    public static function propertyImei(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyIn(mixed $input, string $property, mixed $haystack, bool $compareIdentical = false, null|string|Throwable $description = null): void;

    public static function propertyInfinite(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyInstance(mixed $input, string $property, string $instanceName, null|string|Throwable $description = null): void;

    public static function propertyIntVal(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyIntType(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyIp(mixed $input, string $property, string $range = '*', ?int $options = null, null|string|Throwable $description = null): void;

    public static function propertyIsbn(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyIterableType(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyJson(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyLanguageCode(mixed $input, string $property, ?string $set = null, null|string|Throwable $description = null): void;

    public static function propertyLeapDate(mixed $input, string $property, string $format, null|string|Throwable $description = null): void;

    public static function propertyLeapYear(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyLowercase(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyLessThan(mixed $input, string $property, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function propertyLuhn(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyMacAddress(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyMaxAge(mixed $input, string $property, int $age, ?string $format = null, null|string|Throwable $description = null): void;

    public static function propertyMimetype(mixed $input, string $property, string $mimetype, null|string|Throwable $description = null): void;

    public static function propertyMinAge(mixed $input, string $property, int $age, ?string $format = null, null|string|Throwable $description = null): void;

    public static function propertyMultiple(mixed $input, string $property, int $multipleOf, null|string|Throwable $description = null): void;

    public static function propertyNegative(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNfeAccessKey(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNif(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNip(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNo(mixed $input, string $property, bool $useLocale = false, null|string|Throwable $description = null): void;

    public static function propertyNotBlank(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotEmoji(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotEmpty(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotOptional(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNoWhitespace(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNullType(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNumber(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNumericVal(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyObjectType(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyOdd(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyPerfectSquare(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyPesel(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyPhone(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyPhpLabel(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyPis(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyPolishIdCard(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyPositive(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyPostalCode(mixed $input, string $property, string $countryCode, null|string|Throwable $description = null): void;

    public static function propertyPrimeNumber(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyPrintable(mixed $input, string $property, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function propertyPunct(mixed $input, string $property, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function propertyReadable(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyRegex(mixed $input, string $property, string $regex, null|string|Throwable $description = null): void;

    public static function propertyResourceType(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyRoman(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyScalarVal(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertySize(mixed $input, string $property, ?string $minSize = null, ?string $maxSize = null, null|string|Throwable $description = null): void;

    public static function propertySlug(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertySorted(mixed $input, string $property, string $direction, null|string|Throwable $description = null): void;

    public static function propertySpace(mixed $input, string $property, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function propertyStartsWith(mixed $input, string $property, mixed $startValue, bool $identical = false, null|string|Throwable $description = null): void;

    public static function propertyStringType(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyStringVal(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertySubdivisionCode(mixed $input, string $property, string $countryCode, null|string|Throwable $description = null): void;

    /**
    * @param mixed[] $superset
    */
    public static function propertySubset(mixed $input, string $property, array $superset, null|string|Throwable $description = null): void;

    public static function propertySymbolicLink(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyTime(mixed $input, string $property, string $format = 'H:i:s', null|string|Throwable $description = null): void;

    public static function propertyTld(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyTrueVal(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyType(mixed $input, string $property, string $type, null|string|Throwable $description = null): void;

    public static function propertyUnique(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyUploaded(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyUppercase(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyUrl(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyUuid(mixed $input, string $property, ?int $version = null, null|string|Throwable $description = null): void;

    public static function propertyVersion(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyVideoUrl(mixed $input, string $property, ?string $service = null, null|string|Throwable $description = null): void;

    public static function propertyVowel(mixed $input, string $property, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function propertyWritable(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyXdigit(mixed $input, string $property, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function propertyYes(mixed $input, string $property, bool $useLocale = false, null|string|Throwable $description = null): void;

    public static function propertyNotAlnum(mixed $input, string $property, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function propertyNotAlpha(mixed $input, string $property, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function propertyNotArrayType(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotArrayVal(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotBase(mixed $input, string $property, int $base, ?string $chars = null, null|string|Throwable $description = null): void;

    public static function propertyNotBase64(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotBetween(mixed $input, string $property, mixed $minimum, mixed $maximum, null|string|Throwable $description = null): void;

    public static function propertyNotBic(mixed $input, string $property, string $countryCode, null|string|Throwable $description = null): void;

    public static function propertyNotBoolType(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotBoolVal(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotBsn(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotCallableType(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotCallback(mixed $input, string $property, callable $callback, null|string|Throwable $description = null): void;

    public static function propertyNotCharset(mixed $input, string $property, string $charset = '', null|string|Throwable $description = null): void;

    public static function propertyNotCnh(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotCnpj(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotControl(mixed $input, string $property, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function propertyNotConsonant(mixed $input, string $property, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function propertyNotContains(mixed $input, string $property, mixed $containsValue, bool $identical = false, null|string|Throwable $description = null): void;

    /**
    * @param mixed[] $needles
    */
    public static function propertyNotContainsAny(mixed $input, string $property, array $needles, bool $strictCompareArray = false, null|string|Throwable $description = null): void;

    public static function propertyNotCountable(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotCountryCode(mixed $input, string $property, ?string $set = null, null|string|Throwable $description = null): void;

    public static function propertyNotCurrencyCode(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotCpf(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotCreditCard(mixed $input, string $property, ?string $brand = null, null|string|Throwable $description = null): void;

    public static function propertyNotDate(mixed $input, string $property, string $format = 'Y-m-d', null|string|Throwable $description = null): void;

    public static function propertyNotDateTime(mixed $input, string $property, ?string $format = null, null|string|Throwable $description = null): void;

    public static function propertyNotDecimal(mixed $input, string $property, int $decimals, null|string|Throwable $description = null): void;

    public static function propertyNotDigit(mixed $input, string $property, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function propertyNotDirectory(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotDomain(mixed $input, string $property, bool $tldCheck = true, null|string|Throwable $description = null): void;

    public static function propertyNotEmail(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotEndsWith(mixed $input, string $property, mixed $endValue, bool $identical = false, null|string|Throwable $description = null): void;

    public static function propertyNotEquals(mixed $input, string $property, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function propertyNotEquivalent(mixed $input, string $property, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function propertyNotEven(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotExecutable(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotExists(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotExtension(mixed $input, string $property, string $extension, null|string|Throwable $description = null): void;

    public static function propertyNotFactor(mixed $input, string $property, int $dividend, null|string|Throwable $description = null): void;

    public static function propertyNotFalseVal(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotFibonacci(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotFile(mixed $input, string $property, null|string|Throwable $description = null): void;

    /**
    * @param mixed[]|int $options
    */
    public static function propertyNotFilterVar(mixed $input, string $property, int $filter, array|int|null $options = null, null|string|Throwable $description = null): void;

    public static function propertyNotFinite(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotFloatVal(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotFloatType(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotGraph(mixed $input, string $property, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function propertyNotGreaterThan(mixed $input, string $property, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function propertyNotHexRgbColor(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotIban(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotIdentical(mixed $input, string $property, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function propertyNotImage(mixed $input, string $property, ?finfo $fileInfo = null, null|string|Throwable $description = null): void;

    public static function propertyNotImei(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotIn(mixed $input, string $property, mixed $haystack, bool $compareIdentical = false, null|string|Throwable $description = null): void;

    public static function propertyNotInfinite(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotInstance(mixed $input, string $property, string $instanceName, null|string|Throwable $description = null): void;

    public static function propertyNotIntVal(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotIntType(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotIp(mixed $input, string $property, string $range = '*', ?int $options = null, null|string|Throwable $description = null): void;

    public static function propertyNotIsbn(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotIterableType(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotJson(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotLanguageCode(mixed $input, string $property, ?string $set = null, null|string|Throwable $description = null): void;

    public static function propertyNotLeapDate(mixed $input, string $property, string $format, null|string|Throwable $description = null): void;

    public static function propertyNotLeapYear(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotLowercase(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotLessThan(mixed $input, string $property, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function propertyNotLuhn(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotMacAddress(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotMaxAge(mixed $input, string $property, int $age, ?string $format = null, null|string|Throwable $description = null): void;

    public static function propertyNotMimetype(mixed $input, string $property, string $mimetype, null|string|Throwable $description = null): void;

    public static function propertyNotMinAge(mixed $input, string $property, int $age, ?string $format = null, null|string|Throwable $description = null): void;

    public static function propertyNotMultiple(mixed $input, string $property, int $multipleOf, null|string|Throwable $description = null): void;

    public static function propertyNotNegative(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotNfeAccessKey(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotNif(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotNip(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotNo(mixed $input, string $property, bool $useLocale = false, null|string|Throwable $description = null): void;

    public static function propertyNotNoWhitespace(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotNullType(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotNumber(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotNumericVal(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotObjectType(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotOdd(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotPerfectSquare(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotPesel(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotPhone(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotPhpLabel(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotPis(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotPolishIdCard(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotPositive(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotPostalCode(mixed $input, string $property, string $countryCode, null|string|Throwable $description = null): void;

    public static function propertyNotPrimeNumber(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotPrintable(mixed $input, string $property, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function propertyNotPunct(mixed $input, string $property, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function propertyNotReadable(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotRegex(mixed $input, string $property, string $regex, null|string|Throwable $description = null): void;

    public static function propertyNotResourceType(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotRoman(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotScalarVal(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotSize(mixed $input, string $property, ?string $minSize = null, ?string $maxSize = null, null|string|Throwable $description = null): void;

    public static function propertyNotSlug(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotSorted(mixed $input, string $property, string $direction, null|string|Throwable $description = null): void;

    public static function propertyNotSpace(mixed $input, string $property, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function propertyNotStartsWith(mixed $input, string $property, mixed $startValue, bool $identical = false, null|string|Throwable $description = null): void;

    public static function propertyNotStringType(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotStringVal(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotSubdivisionCode(mixed $input, string $property, string $countryCode, null|string|Throwable $description = null): void;

    /**
    * @param mixed[] $superset
    */
    public static function propertyNotSubset(mixed $input, string $property, array $superset, null|string|Throwable $description = null): void;

    public static function propertyNotSymbolicLink(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotTime(mixed $input, string $property, string $format = 'H:i:s', null|string|Throwable $description = null): void;

    public static function propertyNotTld(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotTrueVal(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotType(mixed $input, string $property, string $type, null|string|Throwable $description = null): void;

    public static function propertyNotUnique(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotUploaded(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotUppercase(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotUrl(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotUuid(mixed $input, string $property, ?int $version = null, null|string|Throwable $description = null): void;

    public static function propertyNotVersion(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotVideoUrl(mixed $input, string $property, ?string $service = null, null|string|Throwable $description = null): void;

    public static function propertyNotVowel(mixed $input, string $property, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function propertyNotWritable(mixed $input, string $property, null|string|Throwable $description = null): void;

    public static function propertyNotXdigit(mixed $input, string $property, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function propertyNotYes(mixed $input, string $property, bool $useLocale = false, null|string|Throwable $description = null): void;
}
