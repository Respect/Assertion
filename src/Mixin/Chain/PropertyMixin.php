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

use finfo;
use Throwable;

// phpcs:disable Generic.Files.LineLength.TooLong
interface PropertyMixin
{
    public function propertyPresent(string $property, null|string|Throwable $description = null): static;

    public function propertyNotPresent(string $property, null|string|Throwable $description = null): static;

    public function property(string $property, mixed $compareTo, null|string|Throwable $description = null): static;

    public function propertyAlnum(string $property, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function propertyAlpha(string $property, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function propertyArrayType(string $property, null|string|Throwable $description = null): static;

    public function propertyArrayVal(string $property, null|string|Throwable $description = null): static;

    public function propertyBase(string $property, int $base, ?string $chars = null, null|string|Throwable $description = null): static;

    public function propertyBase64(string $property, null|string|Throwable $description = null): static;

    public function propertyBetween(string $property, mixed $minimum, mixed $maximum, null|string|Throwable $description = null): static;

    public function propertyBic(string $property, string $countryCode, null|string|Throwable $description = null): static;

    public function propertyBoolType(string $property, null|string|Throwable $description = null): static;

    public function propertyBoolVal(string $property, null|string|Throwable $description = null): static;

    public function propertyBsn(string $property, null|string|Throwable $description = null): static;

    public function propertyCallableType(string $property, null|string|Throwable $description = null): static;

    public function propertyCallback(string $property, callable $callback, null|string|Throwable $description = null): static;

    public function propertyCharset(string $property, string $charset = '', null|string|Throwable $description = null): static;

    public function propertyCnh(string $property, null|string|Throwable $description = null): static;

    public function propertyCnpj(string $property, null|string|Throwable $description = null): static;

    public function propertyControl(string $property, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function propertyConsonant(string $property, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function propertyContains(string $property, mixed $containsValue, bool $identical = false, null|string|Throwable $description = null): static;

    /**
    * @param mixed[] $needles
    */
    public function propertyContainsAny(string $property, array $needles, bool $strictCompareArray = false, null|string|Throwable $description = null): static;

    public function propertyCountable(string $property, null|string|Throwable $description = null): static;

    public function propertyCountryCode(string $property, ?string $set = null, null|string|Throwable $description = null): static;

    public function propertyCurrencyCode(string $property, null|string|Throwable $description = null): static;

    public function propertyCpf(string $property, null|string|Throwable $description = null): static;

    public function propertyCreditCard(string $property, ?string $brand = null, null|string|Throwable $description = null): static;

    public function propertyDate(string $property, string $format = 'Y-m-d', null|string|Throwable $description = null): static;

    public function propertyDateTime(string $property, ?string $format = null, null|string|Throwable $description = null): static;

    public function propertyDecimal(string $property, int $decimals, null|string|Throwable $description = null): static;

    public function propertyDigit(string $property, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function propertyDirectory(string $property, null|string|Throwable $description = null): static;

    public function propertyDomain(string $property, bool $tldCheck = true, null|string|Throwable $description = null): static;

    public function propertyEmail(string $property, null|string|Throwable $description = null): static;

    public function propertyEndsWith(string $property, mixed $endValue, bool $identical = false, null|string|Throwable $description = null): static;

    public function propertyEquals(string $property, mixed $compareTo, null|string|Throwable $description = null): static;

    public function propertyEquivalent(string $property, mixed $compareTo, null|string|Throwable $description = null): static;

    public function propertyEven(string $property, null|string|Throwable $description = null): static;

    public function propertyExecutable(string $property, null|string|Throwable $description = null): static;

    public function propertyExists(string $property, null|string|Throwable $description = null): static;

    public function propertyExtension(string $property, string $extension, null|string|Throwable $description = null): static;

    public function propertyFactor(string $property, int $dividend, null|string|Throwable $description = null): static;

    public function propertyFalseVal(string $property, null|string|Throwable $description = null): static;

    public function propertyFibonacci(string $property, null|string|Throwable $description = null): static;

    public function propertyFile(string $property, null|string|Throwable $description = null): static;

    /**
    * @param mixed[]|int $options
    */
    public function propertyFilterVar(string $property, int $filter, array|int|null $options = null, null|string|Throwable $description = null): static;

    public function propertyFinite(string $property, null|string|Throwable $description = null): static;

    public function propertyFloatVal(string $property, null|string|Throwable $description = null): static;

    public function propertyFloatType(string $property, null|string|Throwable $description = null): static;

    public function propertyGraph(string $property, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function propertyGreaterThan(string $property, mixed $compareTo, null|string|Throwable $description = null): static;

    public function propertyHexRgbColor(string $property, null|string|Throwable $description = null): static;

    public function propertyIban(string $property, null|string|Throwable $description = null): static;

    public function propertyIdentical(string $property, mixed $compareTo, null|string|Throwable $description = null): static;

    public function propertyImage(string $property, ?finfo $fileInfo = null, null|string|Throwable $description = null): static;

    public function propertyImei(string $property, null|string|Throwable $description = null): static;

    public function propertyIn(string $property, mixed $haystack, bool $compareIdentical = false, null|string|Throwable $description = null): static;

    public function propertyInfinite(string $property, null|string|Throwable $description = null): static;

    public function propertyInstance(string $property, string $instanceName, null|string|Throwable $description = null): static;

    public function propertyIntVal(string $property, null|string|Throwable $description = null): static;

    public function propertyIntType(string $property, null|string|Throwable $description = null): static;

    public function propertyIp(string $property, string $range = '*', ?int $options = null, null|string|Throwable $description = null): static;

    public function propertyIsbn(string $property, null|string|Throwable $description = null): static;

    public function propertyIterableType(string $property, null|string|Throwable $description = null): static;

    public function propertyJson(string $property, null|string|Throwable $description = null): static;

    public function propertyLanguageCode(string $property, ?string $set = null, null|string|Throwable $description = null): static;

    public function propertyLeapDate(string $property, string $format, null|string|Throwable $description = null): static;

    public function propertyLeapYear(string $property, null|string|Throwable $description = null): static;

    public function propertyLowercase(string $property, null|string|Throwable $description = null): static;

    public function propertyLessThan(string $property, mixed $compareTo, null|string|Throwable $description = null): static;

    public function propertyLuhn(string $property, null|string|Throwable $description = null): static;

    public function propertyMacAddress(string $property, null|string|Throwable $description = null): static;

    public function propertyMaxAge(string $property, int $age, ?string $format = null, null|string|Throwable $description = null): static;

    public function propertyMimetype(string $property, string $mimetype, null|string|Throwable $description = null): static;

    public function propertyMinAge(string $property, int $age, ?string $format = null, null|string|Throwable $description = null): static;

    public function propertyMultiple(string $property, int $multipleOf, null|string|Throwable $description = null): static;

    public function propertyNegative(string $property, null|string|Throwable $description = null): static;

    public function propertyNfeAccessKey(string $property, null|string|Throwable $description = null): static;

    public function propertyNif(string $property, null|string|Throwable $description = null): static;

    public function propertyNip(string $property, null|string|Throwable $description = null): static;

    public function propertyNo(string $property, bool $useLocale = false, null|string|Throwable $description = null): static;

    public function propertyNotBlank(string $property, null|string|Throwable $description = null): static;

    public function propertyNotEmoji(string $property, null|string|Throwable $description = null): static;

    public function propertyNotEmpty(string $property, null|string|Throwable $description = null): static;

    public function propertyNotOptional(string $property, null|string|Throwable $description = null): static;

    public function propertyNoWhitespace(string $property, null|string|Throwable $description = null): static;

    public function propertyNullType(string $property, null|string|Throwable $description = null): static;

    public function propertyNumber(string $property, null|string|Throwable $description = null): static;

    public function propertyNumericVal(string $property, null|string|Throwable $description = null): static;

    public function propertyObjectType(string $property, null|string|Throwable $description = null): static;

    public function propertyOdd(string $property, null|string|Throwable $description = null): static;

    public function propertyPerfectSquare(string $property, null|string|Throwable $description = null): static;

    public function propertyPesel(string $property, null|string|Throwable $description = null): static;

    public function propertyPhone(string $property, null|string|Throwable $description = null): static;

    public function propertyPhpLabel(string $property, null|string|Throwable $description = null): static;

    public function propertyPis(string $property, null|string|Throwable $description = null): static;

    public function propertyPolishIdCard(string $property, null|string|Throwable $description = null): static;

    public function propertyPositive(string $property, null|string|Throwable $description = null): static;

    public function propertyPostalCode(string $property, string $countryCode, null|string|Throwable $description = null): static;

    public function propertyPrimeNumber(string $property, null|string|Throwable $description = null): static;

    public function propertyPrintable(string $property, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function propertyPunct(string $property, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function propertyReadable(string $property, null|string|Throwable $description = null): static;

    public function propertyRegex(string $property, string $regex, null|string|Throwable $description = null): static;

    public function propertyResourceType(string $property, null|string|Throwable $description = null): static;

    public function propertyRoman(string $property, null|string|Throwable $description = null): static;

    public function propertyScalarVal(string $property, null|string|Throwable $description = null): static;

    public function propertySize(string $property, ?string $minSize = null, ?string $maxSize = null, null|string|Throwable $description = null): static;

    public function propertySlug(string $property, null|string|Throwable $description = null): static;

    public function propertySorted(string $property, string $direction, null|string|Throwable $description = null): static;

    public function propertySpace(string $property, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function propertyStartsWith(string $property, mixed $startValue, bool $identical = false, null|string|Throwable $description = null): static;

    public function propertyStringType(string $property, null|string|Throwable $description = null): static;

    public function propertyStringVal(string $property, null|string|Throwable $description = null): static;

    public function propertySubdivisionCode(string $property, string $countryCode, null|string|Throwable $description = null): static;

    /**
    * @param mixed[] $superset
    */
    public function propertySubset(string $property, array $superset, null|string|Throwable $description = null): static;

    public function propertySymbolicLink(string $property, null|string|Throwable $description = null): static;

    public function propertyTime(string $property, string $format = 'H:i:s', null|string|Throwable $description = null): static;

    public function propertyTld(string $property, null|string|Throwable $description = null): static;

    public function propertyTrueVal(string $property, null|string|Throwable $description = null): static;

    public function propertyType(string $property, string $type, null|string|Throwable $description = null): static;

    public function propertyUnique(string $property, null|string|Throwable $description = null): static;

    public function propertyUploaded(string $property, null|string|Throwable $description = null): static;

    public function propertyUppercase(string $property, null|string|Throwable $description = null): static;

    public function propertyUrl(string $property, null|string|Throwable $description = null): static;

    public function propertyUuid(string $property, ?int $version = null, null|string|Throwable $description = null): static;

    public function propertyVersion(string $property, null|string|Throwable $description = null): static;

    public function propertyVideoUrl(string $property, ?string $service = null, null|string|Throwable $description = null): static;

    public function propertyVowel(string $property, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function propertyWritable(string $property, null|string|Throwable $description = null): static;

    public function propertyXdigit(string $property, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function propertyYes(string $property, bool $useLocale = false, null|string|Throwable $description = null): static;

    public function propertyNot(string $property, mixed $compareTo, null|string|Throwable $description = null): static;

    public function propertyNotAlnum(string $property, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function propertyNotAlpha(string $property, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function propertyNotArrayType(string $property, null|string|Throwable $description = null): static;

    public function propertyNotArrayVal(string $property, null|string|Throwable $description = null): static;

    public function propertyNotBase(string $property, int $base, ?string $chars = null, null|string|Throwable $description = null): static;

    public function propertyNotBase64(string $property, null|string|Throwable $description = null): static;

    public function propertyNotBetween(string $property, mixed $minimum, mixed $maximum, null|string|Throwable $description = null): static;

    public function propertyNotBic(string $property, string $countryCode, null|string|Throwable $description = null): static;

    public function propertyNotBoolType(string $property, null|string|Throwable $description = null): static;

    public function propertyNotBoolVal(string $property, null|string|Throwable $description = null): static;

    public function propertyNotBsn(string $property, null|string|Throwable $description = null): static;

    public function propertyNotCallableType(string $property, null|string|Throwable $description = null): static;

    public function propertyNotCallback(string $property, callable $callback, null|string|Throwable $description = null): static;

    public function propertyNotCharset(string $property, string $charset = '', null|string|Throwable $description = null): static;

    public function propertyNotCnh(string $property, null|string|Throwable $description = null): static;

    public function propertyNotCnpj(string $property, null|string|Throwable $description = null): static;

    public function propertyNotControl(string $property, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function propertyNotConsonant(string $property, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function propertyNotContains(string $property, mixed $containsValue, bool $identical = false, null|string|Throwable $description = null): static;

    /**
    * @param mixed[] $needles
    */
    public function propertyNotContainsAny(string $property, array $needles, bool $strictCompareArray = false, null|string|Throwable $description = null): static;

    public function propertyNotCountable(string $property, null|string|Throwable $description = null): static;

    public function propertyNotCountryCode(string $property, ?string $set = null, null|string|Throwable $description = null): static;

    public function propertyNotCurrencyCode(string $property, null|string|Throwable $description = null): static;

    public function propertyNotCpf(string $property, null|string|Throwable $description = null): static;

    public function propertyNotCreditCard(string $property, ?string $brand = null, null|string|Throwable $description = null): static;

    public function propertyNotDate(string $property, string $format = 'Y-m-d', null|string|Throwable $description = null): static;

    public function propertyNotDateTime(string $property, ?string $format = null, null|string|Throwable $description = null): static;

    public function propertyNotDecimal(string $property, int $decimals, null|string|Throwable $description = null): static;

    public function propertyNotDigit(string $property, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function propertyNotDirectory(string $property, null|string|Throwable $description = null): static;

    public function propertyNotDomain(string $property, bool $tldCheck = true, null|string|Throwable $description = null): static;

    public function propertyNotEmail(string $property, null|string|Throwable $description = null): static;

    public function propertyNotEndsWith(string $property, mixed $endValue, bool $identical = false, null|string|Throwable $description = null): static;

    public function propertyNotEquals(string $property, mixed $compareTo, null|string|Throwable $description = null): static;

    public function propertyNotEquivalent(string $property, mixed $compareTo, null|string|Throwable $description = null): static;

    public function propertyNotEven(string $property, null|string|Throwable $description = null): static;

    public function propertyNotExecutable(string $property, null|string|Throwable $description = null): static;

    public function propertyNotExists(string $property, null|string|Throwable $description = null): static;

    public function propertyNotExtension(string $property, string $extension, null|string|Throwable $description = null): static;

    public function propertyNotFactor(string $property, int $dividend, null|string|Throwable $description = null): static;

    public function propertyNotFalseVal(string $property, null|string|Throwable $description = null): static;

    public function propertyNotFibonacci(string $property, null|string|Throwable $description = null): static;

    public function propertyNotFile(string $property, null|string|Throwable $description = null): static;

    /**
    * @param mixed[]|int $options
    */
    public function propertyNotFilterVar(string $property, int $filter, array|int|null $options = null, null|string|Throwable $description = null): static;

    public function propertyNotFinite(string $property, null|string|Throwable $description = null): static;

    public function propertyNotFloatVal(string $property, null|string|Throwable $description = null): static;

    public function propertyNotFloatType(string $property, null|string|Throwable $description = null): static;

    public function propertyNotGraph(string $property, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function propertyNotGreaterThan(string $property, mixed $compareTo, null|string|Throwable $description = null): static;

    public function propertyNotHexRgbColor(string $property, null|string|Throwable $description = null): static;

    public function propertyNotIban(string $property, null|string|Throwable $description = null): static;

    public function propertyNotIdentical(string $property, mixed $compareTo, null|string|Throwable $description = null): static;

    public function propertyNotImage(string $property, ?finfo $fileInfo = null, null|string|Throwable $description = null): static;

    public function propertyNotImei(string $property, null|string|Throwable $description = null): static;

    public function propertyNotIn(string $property, mixed $haystack, bool $compareIdentical = false, null|string|Throwable $description = null): static;

    public function propertyNotInfinite(string $property, null|string|Throwable $description = null): static;

    public function propertyNotInstance(string $property, string $instanceName, null|string|Throwable $description = null): static;

    public function propertyNotIntVal(string $property, null|string|Throwable $description = null): static;

    public function propertyNotIntType(string $property, null|string|Throwable $description = null): static;

    public function propertyNotIp(string $property, string $range = '*', ?int $options = null, null|string|Throwable $description = null): static;

    public function propertyNotIsbn(string $property, null|string|Throwable $description = null): static;

    public function propertyNotIterableType(string $property, null|string|Throwable $description = null): static;

    public function propertyNotJson(string $property, null|string|Throwable $description = null): static;

    public function propertyNotLanguageCode(string $property, ?string $set = null, null|string|Throwable $description = null): static;

    public function propertyNotLeapDate(string $property, string $format, null|string|Throwable $description = null): static;

    public function propertyNotLeapYear(string $property, null|string|Throwable $description = null): static;

    public function propertyNotLowercase(string $property, null|string|Throwable $description = null): static;

    public function propertyNotLessThan(string $property, mixed $compareTo, null|string|Throwable $description = null): static;

    public function propertyNotLuhn(string $property, null|string|Throwable $description = null): static;

    public function propertyNotMacAddress(string $property, null|string|Throwable $description = null): static;

    public function propertyNotMaxAge(string $property, int $age, ?string $format = null, null|string|Throwable $description = null): static;

    public function propertyNotMimetype(string $property, string $mimetype, null|string|Throwable $description = null): static;

    public function propertyNotMinAge(string $property, int $age, ?string $format = null, null|string|Throwable $description = null): static;

    public function propertyNotMultiple(string $property, int $multipleOf, null|string|Throwable $description = null): static;

    public function propertyNotNegative(string $property, null|string|Throwable $description = null): static;

    public function propertyNotNfeAccessKey(string $property, null|string|Throwable $description = null): static;

    public function propertyNotNif(string $property, null|string|Throwable $description = null): static;

    public function propertyNotNip(string $property, null|string|Throwable $description = null): static;

    public function propertyNotNo(string $property, bool $useLocale = false, null|string|Throwable $description = null): static;

    public function propertyNotNoWhitespace(string $property, null|string|Throwable $description = null): static;

    public function propertyNotNullType(string $property, null|string|Throwable $description = null): static;

    public function propertyNotNumber(string $property, null|string|Throwable $description = null): static;

    public function propertyNotNumericVal(string $property, null|string|Throwable $description = null): static;

    public function propertyNotObjectType(string $property, null|string|Throwable $description = null): static;

    public function propertyNotOdd(string $property, null|string|Throwable $description = null): static;

    public function propertyNotPerfectSquare(string $property, null|string|Throwable $description = null): static;

    public function propertyNotPesel(string $property, null|string|Throwable $description = null): static;

    public function propertyNotPhone(string $property, null|string|Throwable $description = null): static;

    public function propertyNotPhpLabel(string $property, null|string|Throwable $description = null): static;

    public function propertyNotPis(string $property, null|string|Throwable $description = null): static;

    public function propertyNotPolishIdCard(string $property, null|string|Throwable $description = null): static;

    public function propertyNotPositive(string $property, null|string|Throwable $description = null): static;

    public function propertyNotPostalCode(string $property, string $countryCode, null|string|Throwable $description = null): static;

    public function propertyNotPrimeNumber(string $property, null|string|Throwable $description = null): static;

    public function propertyNotPrintable(string $property, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function propertyNotPunct(string $property, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function propertyNotReadable(string $property, null|string|Throwable $description = null): static;

    public function propertyNotRegex(string $property, string $regex, null|string|Throwable $description = null): static;

    public function propertyNotResourceType(string $property, null|string|Throwable $description = null): static;

    public function propertyNotRoman(string $property, null|string|Throwable $description = null): static;

    public function propertyNotScalarVal(string $property, null|string|Throwable $description = null): static;

    public function propertyNotSize(string $property, ?string $minSize = null, ?string $maxSize = null, null|string|Throwable $description = null): static;

    public function propertyNotSlug(string $property, null|string|Throwable $description = null): static;

    public function propertyNotSorted(string $property, string $direction, null|string|Throwable $description = null): static;

    public function propertyNotSpace(string $property, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function propertyNotStartsWith(string $property, mixed $startValue, bool $identical = false, null|string|Throwable $description = null): static;

    public function propertyNotStringType(string $property, null|string|Throwable $description = null): static;

    public function propertyNotStringVal(string $property, null|string|Throwable $description = null): static;

    public function propertyNotSubdivisionCode(string $property, string $countryCode, null|string|Throwable $description = null): static;

    /**
    * @param mixed[] $superset
    */
    public function propertyNotSubset(string $property, array $superset, null|string|Throwable $description = null): static;

    public function propertyNotSymbolicLink(string $property, null|string|Throwable $description = null): static;

    public function propertyNotTime(string $property, string $format = 'H:i:s', null|string|Throwable $description = null): static;

    public function propertyNotTld(string $property, null|string|Throwable $description = null): static;

    public function propertyNotTrueVal(string $property, null|string|Throwable $description = null): static;

    public function propertyNotType(string $property, string $type, null|string|Throwable $description = null): static;

    public function propertyNotUnique(string $property, null|string|Throwable $description = null): static;

    public function propertyNotUploaded(string $property, null|string|Throwable $description = null): static;

    public function propertyNotUppercase(string $property, null|string|Throwable $description = null): static;

    public function propertyNotUrl(string $property, null|string|Throwable $description = null): static;

    public function propertyNotUuid(string $property, ?int $version = null, null|string|Throwable $description = null): static;

    public function propertyNotVersion(string $property, null|string|Throwable $description = null): static;

    public function propertyNotVideoUrl(string $property, ?string $service = null, null|string|Throwable $description = null): static;

    public function propertyNotVowel(string $property, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function propertyNotWritable(string $property, null|string|Throwable $description = null): static;

    public function propertyNotXdigit(string $property, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function propertyNotYes(string $property, bool $useLocale = false, null|string|Throwable $description = null): static;
}
