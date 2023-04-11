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
interface AllMixin
{
    public static function allAlnum(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function allAlpha(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function allArrayType(mixed $input, null|string|Throwable $description = null): void;

    public static function allArrayVal(mixed $input, null|string|Throwable $description = null): void;

    public static function allBase(mixed $input, int $base, ?string $chars = null, null|string|Throwable $description = null): void;

    public static function allBase64(mixed $input, null|string|Throwable $description = null): void;

    public static function allBetween(mixed $input, mixed $minimum, mixed $maximum, null|string|Throwable $description = null): void;

    public static function allBic(mixed $input, string $countryCode, null|string|Throwable $description = null): void;

    public static function allBoolType(mixed $input, null|string|Throwable $description = null): void;

    public static function allBoolVal(mixed $input, null|string|Throwable $description = null): void;

    public static function allBsn(mixed $input, null|string|Throwable $description = null): void;

    public static function allCallableType(mixed $input, null|string|Throwable $description = null): void;

    public static function allCallback(mixed $input, callable $callback, null|string|Throwable $description = null): void;

    public static function allCharset(mixed $input, string $charset = '', null|string|Throwable $description = null): void;

    public static function allCnh(mixed $input, null|string|Throwable $description = null): void;

    public static function allCnpj(mixed $input, null|string|Throwable $description = null): void;

    public static function allControl(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function allConsonant(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function allContains(mixed $input, mixed $containsValue, bool $identical = false, null|string|Throwable $description = null): void;

    /**
    * @param mixed[] $needles
    */
    public static function allContainsAny(mixed $input, array $needles, bool $strictCompareArray = false, null|string|Throwable $description = null): void;

    public static function allCountable(mixed $input, null|string|Throwable $description = null): void;

    public static function allCountryCode(mixed $input, ?string $set = null, null|string|Throwable $description = null): void;

    public static function allCurrencyCode(mixed $input, null|string|Throwable $description = null): void;

    public static function allCpf(mixed $input, null|string|Throwable $description = null): void;

    public static function allCreditCard(mixed $input, ?string $brand = null, null|string|Throwable $description = null): void;

    public static function allDate(mixed $input, string $format = 'Y-m-d', null|string|Throwable $description = null): void;

    public static function allDateTime(mixed $input, ?string $format = null, null|string|Throwable $description = null): void;

    public static function allDecimal(mixed $input, int $decimals, null|string|Throwable $description = null): void;

    public static function allDigit(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function allDirectory(mixed $input, null|string|Throwable $description = null): void;

    public static function allDomain(mixed $input, bool $tldCheck = true, null|string|Throwable $description = null): void;

    public static function allEmail(mixed $input, null|string|Throwable $description = null): void;

    public static function allEndsWith(mixed $input, mixed $endValue, bool $identical = false, null|string|Throwable $description = null): void;

    public static function allEquals(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function allEquivalent(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function allEven(mixed $input, null|string|Throwable $description = null): void;

    public static function allExecutable(mixed $input, null|string|Throwable $description = null): void;

    public static function allExists(mixed $input, null|string|Throwable $description = null): void;

    public static function allExtension(mixed $input, string $extension, null|string|Throwable $description = null): void;

    public static function allFactor(mixed $input, int $dividend, null|string|Throwable $description = null): void;

    public static function allFalseVal(mixed $input, null|string|Throwable $description = null): void;

    public static function allFibonacci(mixed $input, null|string|Throwable $description = null): void;

    public static function allFile(mixed $input, null|string|Throwable $description = null): void;

    /**
    * @param mixed[]|int $options
    */
    public static function allFilterVar(mixed $input, int $filter, array|int|null $options = null, null|string|Throwable $description = null): void;

    public static function allFinite(mixed $input, null|string|Throwable $description = null): void;

    public static function allFloatVal(mixed $input, null|string|Throwable $description = null): void;

    public static function allFloatType(mixed $input, null|string|Throwable $description = null): void;

    public static function allGraph(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function allGreaterThan(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function allHexRgbColor(mixed $input, null|string|Throwable $description = null): void;

    public static function allIban(mixed $input, null|string|Throwable $description = null): void;

    public static function allIdentical(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function allImage(mixed $input, ?finfo $fileInfo = null, null|string|Throwable $description = null): void;

    public static function allImei(mixed $input, null|string|Throwable $description = null): void;

    public static function allIn(mixed $input, mixed $haystack, bool $compareIdentical = false, null|string|Throwable $description = null): void;

    public static function allInfinite(mixed $input, null|string|Throwable $description = null): void;

    public static function allInstance(mixed $input, string $instanceName, null|string|Throwable $description = null): void;

    public static function allIntVal(mixed $input, null|string|Throwable $description = null): void;

    public static function allIntType(mixed $input, null|string|Throwable $description = null): void;

    public static function allIp(mixed $input, string $range = '*', ?int $options = null, null|string|Throwable $description = null): void;

    public static function allIsbn(mixed $input, null|string|Throwable $description = null): void;

    public static function allIterableType(mixed $input, null|string|Throwable $description = null): void;

    public static function allJson(mixed $input, null|string|Throwable $description = null): void;

    public static function allLanguageCode(mixed $input, ?string $set = null, null|string|Throwable $description = null): void;

    public static function allLeapDate(mixed $input, string $format, null|string|Throwable $description = null): void;

    public static function allLeapYear(mixed $input, null|string|Throwable $description = null): void;

    public static function allLowercase(mixed $input, null|string|Throwable $description = null): void;

    public static function allLessThan(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function allLuhn(mixed $input, null|string|Throwable $description = null): void;

    public static function allMacAddress(mixed $input, null|string|Throwable $description = null): void;

    public static function allMaxAge(mixed $input, int $age, ?string $format = null, null|string|Throwable $description = null): void;

    public static function allMimetype(mixed $input, string $mimetype, null|string|Throwable $description = null): void;

    public static function allMinAge(mixed $input, int $age, ?string $format = null, null|string|Throwable $description = null): void;

    public static function allMultiple(mixed $input, int $multipleOf, null|string|Throwable $description = null): void;

    public static function allNegative(mixed $input, null|string|Throwable $description = null): void;

    public static function allNfeAccessKey(mixed $input, null|string|Throwable $description = null): void;

    public static function allNif(mixed $input, null|string|Throwable $description = null): void;

    public static function allNip(mixed $input, null|string|Throwable $description = null): void;

    public static function allNo(mixed $input, bool $useLocale = false, null|string|Throwable $description = null): void;

    public static function allNotBlank(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotEmoji(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotEmpty(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotOptional(mixed $input, null|string|Throwable $description = null): void;

    public static function allNoWhitespace(mixed $input, null|string|Throwable $description = null): void;

    public static function allNullType(mixed $input, null|string|Throwable $description = null): void;

    public static function allNumber(mixed $input, null|string|Throwable $description = null): void;

    public static function allNumericVal(mixed $input, null|string|Throwable $description = null): void;

    public static function allObjectType(mixed $input, null|string|Throwable $description = null): void;

    public static function allOdd(mixed $input, null|string|Throwable $description = null): void;

    public static function allPerfectSquare(mixed $input, null|string|Throwable $description = null): void;

    public static function allPesel(mixed $input, null|string|Throwable $description = null): void;

    public static function allPhone(mixed $input, null|string|Throwable $description = null): void;

    public static function allPhpLabel(mixed $input, null|string|Throwable $description = null): void;

    public static function allPis(mixed $input, null|string|Throwable $description = null): void;

    public static function allPolishIdCard(mixed $input, null|string|Throwable $description = null): void;

    public static function allPositive(mixed $input, null|string|Throwable $description = null): void;

    public static function allPostalCode(mixed $input, string $countryCode, null|string|Throwable $description = null): void;

    public static function allPrimeNumber(mixed $input, null|string|Throwable $description = null): void;

    public static function allPrintable(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function allPunct(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function allReadable(mixed $input, null|string|Throwable $description = null): void;

    public static function allRegex(mixed $input, string $regex, null|string|Throwable $description = null): void;

    public static function allResourceType(mixed $input, null|string|Throwable $description = null): void;

    public static function allRoman(mixed $input, null|string|Throwable $description = null): void;

    public static function allScalarVal(mixed $input, null|string|Throwable $description = null): void;

    public static function allSize(mixed $input, ?string $minSize = null, ?string $maxSize = null, null|string|Throwable $description = null): void;

    public static function allSlug(mixed $input, null|string|Throwable $description = null): void;

    public static function allSorted(mixed $input, string $direction, null|string|Throwable $description = null): void;

    public static function allSpace(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function allStartsWith(mixed $input, mixed $startValue, bool $identical = false, null|string|Throwable $description = null): void;

    public static function allStringType(mixed $input, null|string|Throwable $description = null): void;

    public static function allStringVal(mixed $input, null|string|Throwable $description = null): void;

    public static function allSubdivisionCode(mixed $input, string $countryCode, null|string|Throwable $description = null): void;

    /**
    * @param mixed[] $superset
    */
    public static function allSubset(mixed $input, array $superset, null|string|Throwable $description = null): void;

    public static function allSymbolicLink(mixed $input, null|string|Throwable $description = null): void;

    public static function allTime(mixed $input, string $format = 'H:i:s', null|string|Throwable $description = null): void;

    public static function allTld(mixed $input, null|string|Throwable $description = null): void;

    public static function allTrueVal(mixed $input, null|string|Throwable $description = null): void;

    public static function allType(mixed $input, string $type, null|string|Throwable $description = null): void;

    public static function allUnique(mixed $input, null|string|Throwable $description = null): void;

    public static function allUploaded(mixed $input, null|string|Throwable $description = null): void;

    public static function allUppercase(mixed $input, null|string|Throwable $description = null): void;

    public static function allUrl(mixed $input, null|string|Throwable $description = null): void;

    public static function allUuid(mixed $input, ?int $version = null, null|string|Throwable $description = null): void;

    public static function allVersion(mixed $input, null|string|Throwable $description = null): void;

    public static function allVideoUrl(mixed $input, ?string $service = null, null|string|Throwable $description = null): void;

    public static function allVowel(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function allWritable(mixed $input, null|string|Throwable $description = null): void;

    public static function allXdigit(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function allYes(mixed $input, bool $useLocale = false, null|string|Throwable $description = null): void;

    public static function allNotAlnum(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function allNotAlpha(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function allNotArrayType(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotArrayVal(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotBase(mixed $input, int $base, ?string $chars = null, null|string|Throwable $description = null): void;

    public static function allNotBase64(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotBetween(mixed $input, mixed $minimum, mixed $maximum, null|string|Throwable $description = null): void;

    public static function allNotBic(mixed $input, string $countryCode, null|string|Throwable $description = null): void;

    public static function allNotBoolType(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotBoolVal(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotBsn(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotCallableType(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotCallback(mixed $input, callable $callback, null|string|Throwable $description = null): void;

    public static function allNotCharset(mixed $input, string $charset = '', null|string|Throwable $description = null): void;

    public static function allNotCnh(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotCnpj(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotControl(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function allNotConsonant(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function allNotContains(mixed $input, mixed $containsValue, bool $identical = false, null|string|Throwable $description = null): void;

    /**
    * @param mixed[] $needles
    */
    public static function allNotContainsAny(mixed $input, array $needles, bool $strictCompareArray = false, null|string|Throwable $description = null): void;

    public static function allNotCountable(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotCountryCode(mixed $input, ?string $set = null, null|string|Throwable $description = null): void;

    public static function allNotCurrencyCode(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotCpf(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotCreditCard(mixed $input, ?string $brand = null, null|string|Throwable $description = null): void;

    public static function allNotDate(mixed $input, string $format = 'Y-m-d', null|string|Throwable $description = null): void;

    public static function allNotDateTime(mixed $input, ?string $format = null, null|string|Throwable $description = null): void;

    public static function allNotDecimal(mixed $input, int $decimals, null|string|Throwable $description = null): void;

    public static function allNotDigit(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function allNotDirectory(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotDomain(mixed $input, bool $tldCheck = true, null|string|Throwable $description = null): void;

    public static function allNotEmail(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotEndsWith(mixed $input, mixed $endValue, bool $identical = false, null|string|Throwable $description = null): void;

    public static function allNotEquals(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function allNotEquivalent(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function allNotEven(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotExecutable(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotExists(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotExtension(mixed $input, string $extension, null|string|Throwable $description = null): void;

    public static function allNotFactor(mixed $input, int $dividend, null|string|Throwable $description = null): void;

    public static function allNotFalseVal(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotFibonacci(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotFile(mixed $input, null|string|Throwable $description = null): void;

    /**
    * @param mixed[]|int $options
    */
    public static function allNotFilterVar(mixed $input, int $filter, array|int|null $options = null, null|string|Throwable $description = null): void;

    public static function allNotFinite(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotFloatVal(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotFloatType(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotGraph(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function allNotGreaterThan(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function allNotHexRgbColor(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotIban(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotIdentical(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function allNotImage(mixed $input, ?finfo $fileInfo = null, null|string|Throwable $description = null): void;

    public static function allNotImei(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotIn(mixed $input, mixed $haystack, bool $compareIdentical = false, null|string|Throwable $description = null): void;

    public static function allNotInfinite(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotInstance(mixed $input, string $instanceName, null|string|Throwable $description = null): void;

    public static function allNotIntVal(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotIntType(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotIp(mixed $input, string $range = '*', ?int $options = null, null|string|Throwable $description = null): void;

    public static function allNotIsbn(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotIterableType(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotJson(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotLanguageCode(mixed $input, ?string $set = null, null|string|Throwable $description = null): void;

    public static function allNotLeapDate(mixed $input, string $format, null|string|Throwable $description = null): void;

    public static function allNotLeapYear(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotLowercase(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotLessThan(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function allNotLuhn(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotMacAddress(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotMaxAge(mixed $input, int $age, ?string $format = null, null|string|Throwable $description = null): void;

    public static function allNotMimetype(mixed $input, string $mimetype, null|string|Throwable $description = null): void;

    public static function allNotMinAge(mixed $input, int $age, ?string $format = null, null|string|Throwable $description = null): void;

    public static function allNotMultiple(mixed $input, int $multipleOf, null|string|Throwable $description = null): void;

    public static function allNotNegative(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotNfeAccessKey(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotNif(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotNip(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotNo(mixed $input, bool $useLocale = false, null|string|Throwable $description = null): void;

    public static function allNotNoWhitespace(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotNullType(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotNumber(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotNumericVal(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotObjectType(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotOdd(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotPerfectSquare(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotPesel(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotPhone(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotPhpLabel(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotPis(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotPolishIdCard(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotPositive(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotPostalCode(mixed $input, string $countryCode, null|string|Throwable $description = null): void;

    public static function allNotPrimeNumber(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotPrintable(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function allNotPunct(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function allNotReadable(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotRegex(mixed $input, string $regex, null|string|Throwable $description = null): void;

    public static function allNotResourceType(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotRoman(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotScalarVal(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotSize(mixed $input, ?string $minSize = null, ?string $maxSize = null, null|string|Throwable $description = null): void;

    public static function allNotSlug(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotSorted(mixed $input, string $direction, null|string|Throwable $description = null): void;

    public static function allNotSpace(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function allNotStartsWith(mixed $input, mixed $startValue, bool $identical = false, null|string|Throwable $description = null): void;

    public static function allNotStringType(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotStringVal(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotSubdivisionCode(mixed $input, string $countryCode, null|string|Throwable $description = null): void;

    /**
    * @param mixed[] $superset
    */
    public static function allNotSubset(mixed $input, array $superset, null|string|Throwable $description = null): void;

    public static function allNotSymbolicLink(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotTime(mixed $input, string $format = 'H:i:s', null|string|Throwable $description = null): void;

    public static function allNotTld(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotTrueVal(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotType(mixed $input, string $type, null|string|Throwable $description = null): void;

    public static function allNotUnique(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotUploaded(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotUppercase(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotUrl(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotUuid(mixed $input, ?int $version = null, null|string|Throwable $description = null): void;

    public static function allNotVersion(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotVideoUrl(mixed $input, ?string $service = null, null|string|Throwable $description = null): void;

    public static function allNotVowel(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function allNotWritable(mixed $input, null|string|Throwable $description = null): void;

    public static function allNotXdigit(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function allNotYes(mixed $input, bool $useLocale = false, null|string|Throwable $description = null): void;
}
