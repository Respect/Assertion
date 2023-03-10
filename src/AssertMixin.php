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

// phpcs:disable Generic.Files.LineLength.TooLong
interface AssertMixin
{
    public static function all(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function allAlnum(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function allAlpha(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function allArrayType(mixed $input, Throwable|string|null $description = null): void;

    public static function allArrayVal(mixed $input, Throwable|string|null $description = null): void;

    public static function allBase(mixed $input, int $base, ?string $chars = null, Throwable|string|null $description = null): void;

    public static function allBase64(mixed $input, Throwable|string|null $description = null): void;

    public static function allBetween(mixed $input, mixed $minimum, mixed $maximum, Throwable|string|null $description = null): void;

    public static function allBic(mixed $input, string $countryCode, Throwable|string|null $description = null): void;

    public static function allBoolType(mixed $input, Throwable|string|null $description = null): void;

    public static function allBoolVal(mixed $input, Throwable|string|null $description = null): void;

    public static function allBsn(mixed $input, Throwable|string|null $description = null): void;

    public static function allCallableType(mixed $input, Throwable|string|null $description = null): void;

    public static function allCallback(mixed $input, callable $callback, Throwable|string|null $description = null): void;

    public static function allCharset(mixed $input, ?string $charset = null, Throwable|string|null $description = null): void;

    public static function allCnh(mixed $input, Throwable|string|null $description = null): void;

    public static function allCnpj(mixed $input, Throwable|string|null $description = null): void;

    public static function allConsonant(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function allContains(mixed $input, mixed $containsValue, bool $identical = false, Throwable|string|null $description = null): void;

    /**
     * @param array<mixed> $needles
     */
    public static function allContainsAny(mixed $input, array $needles, bool $strictCompareArray = false, Throwable|string|null $description = null): void;

    public static function allControl(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function allCountable(mixed $input, Throwable|string|null $description = null): void;

    public static function allCountryCode(mixed $input, ?string $set = null, Throwable|string|null $description = null): void;

    public static function allCpf(mixed $input, Throwable|string|null $description = null): void;

    public static function allCreditCard(mixed $input, ?string $brand = null, Throwable|string|null $description = null): void;

    public static function allCurrencyCode(mixed $input, Throwable|string|null $description = null): void;

    public static function allDate(mixed $input, string $format = 'Y-m-d', Throwable|string|null $description = null): void;

    public static function allDateTime(mixed $input, ?string $format = null, Throwable|string|null $description = null): void;

    public static function allDigit(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function allDirectory(mixed $input, Throwable|string|null $description = null): void;

    public static function allDomain(mixed $input, bool $tldCheck = true, Throwable|string|null $description = null): void;

    public static function allEmail(mixed $input, Throwable|string|null $description = null): void;

    public static function allEndsWith(mixed $input, mixed $endValue, bool $identical = false, Throwable|string|null $description = null): void;

    public static function allEquals(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function allEquivalent(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function allEven(mixed $input, Throwable|string|null $description = null): void;

    public static function allExecutable(mixed $input, Throwable|string|null $description = null): void;

    public static function allExists(mixed $input, Throwable|string|null $description = null): void;

    public static function allExtension(mixed $input, string $extension, Throwable|string|null $description = null): void;

    public static function allFactor(mixed $input, int $dividend, Throwable|string|null $description = null): void;

    public static function allFalseVal(mixed $input, Throwable|string|null $description = null): void;

    public static function allFibonacci(mixed $input, Throwable|string|null $description = null): void;

    public static function allFile(mixed $input, Throwable|string|null $description = null): void;

    public static function allFilterVar(mixed $input, int $filter, mixed $options = null, Throwable|string|null $description = null): void;

    public static function allFinite(mixed $input, Throwable|string|null $description = null): void;

    public static function allFloatType(mixed $input, Throwable|string|null $description = null): void;

    public static function allFloatVal(mixed $input, Throwable|string|null $description = null): void;

    public static function allGraph(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function allGreaterThan(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function allHexRgbColor(mixed $input, Throwable|string|null $description = null): void;

    public static function allIban(mixed $input, Throwable|string|null $description = null): void;

    public static function allIdentical(mixed $input, mixed $value, Throwable|string|null $description = null): void;

    public static function allImage(mixed $input, ?finfo $fileInfo = null, Throwable|string|null $description = null): void;

    public static function allImei(mixed $input, Throwable|string|null $description = null): void;

    public static function allIn(mixed $input, mixed $haystack, bool $compareIdentical = false, Throwable|string|null $description = null): void;

    public static function allInfinite(mixed $input, Throwable|string|null $description = null): void;

    public static function allInstance(mixed $input, string $instanceName, Throwable|string|null $description = null): void;

    public static function allIntType(mixed $input, Throwable|string|null $description = null): void;

    public static function allIntVal(mixed $input, Throwable|string|null $description = null): void;

    public static function allIp(mixed $input, string $range = '*', ?int $options = null, Throwable|string|null $description = null): void;

    public static function allIsbn(mixed $input, Throwable|string|null $description = null): void;

    public static function allIterableType(mixed $input, Throwable|string|null $description = null): void;

    public static function allJson(mixed $input, Throwable|string|null $description = null): void;

    public static function allLanguageCode(mixed $input, ?string $set = null, Throwable|string|null $description = null): void;

    public static function allLeapDate(mixed $input, string $format, Throwable|string|null $description = null): void;

    public static function allLeapYear(mixed $input, Throwable|string|null $description = null): void;

    public static function allLessThan(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function allLowercase(mixed $input, Throwable|string|null $description = null): void;

    public static function allLuhn(mixed $input, Throwable|string|null $description = null): void;

    public static function allMacAddress(mixed $input, Throwable|string|null $description = null): void;

    public static function allMaxAge(mixed $input, int $age, ?string $format = null, Throwable|string|null $description = null): void;

    public static function allMimetype(mixed $input, string $mimetype, Throwable|string|null $description = null): void;

    public static function allMinAge(mixed $input, int $age, ?string $format = null, Throwable|string|null $description = null): void;

    public static function allMultiple(mixed $input, int $multipleOf, Throwable|string|null $description = null): void;

    public static function allNegative(mixed $input, Throwable|string|null $description = null): void;

    public static function allNfeAccessKey(mixed $input, Throwable|string|null $description = null): void;

    public static function allNif(mixed $input, Throwable|string|null $description = null): void;

    public static function allNip(mixed $input, Throwable|string|null $description = null): void;

    public static function allNo(mixed $input, mixed $useLocale = false, Throwable|string|null $description = null): void;

    public static function allNoWhitespace(mixed $input, Throwable|string|null $description = null): void;

    public static function allNot(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function allNotAlnum(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function allNotAlpha(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function allNotArrayType(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotArrayVal(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotBase(mixed $input, int $base, ?string $chars = null, Throwable|string|null $description = null): void;

    public static function allNotBase64(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotBetween(mixed $input, mixed $minimum, mixed $maximum, Throwable|string|null $description = null): void;

    public static function allNotBic(mixed $input, string $countryCode, Throwable|string|null $description = null): void;

    public static function allNotBlank(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotBoolType(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotBoolVal(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotBsn(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotCallableType(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotCallback(mixed $input, callable $callback, Throwable|string|null $description = null): void;

    public static function allNotCharset(mixed $input, ?string $charset = null, Throwable|string|null $description = null): void;

    public static function allNotCnh(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotCnpj(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotConsonant(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function allNotContains(mixed $input, mixed $containsValue, bool $identical = false, Throwable|string|null $description = null): void;

    /**
     * @param array<mixed> $needles
     */
    public static function allNotContainsAny(mixed $input, array $needles, bool $strictCompareArray = false, Throwable|string|null $description = null): void;

    public static function allNotControl(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function allNotCountable(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotCountryCode(mixed $input, ?string $set = null, Throwable|string|null $description = null): void;

    public static function allNotCpf(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotCreditCard(mixed $input, ?string $brand = null, Throwable|string|null $description = null): void;

    public static function allNotCurrencyCode(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotDate(mixed $input, string $format = 'Y-m-d', Throwable|string|null $description = null): void;

    public static function allNotDateTime(mixed $input, ?string $format = null, Throwable|string|null $description = null): void;

    public static function allNotDigit(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function allNotDirectory(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotDomain(mixed $input, bool $tldCheck = true, Throwable|string|null $description = null): void;

    public static function allNotEmail(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotEmoji(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotEmpty(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotEndsWith(mixed $input, mixed $endValue, bool $identical = false, Throwable|string|null $description = null): void;

    public static function allNotEquals(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function allNotEquivalent(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function allNotEven(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotExecutable(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotExists(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotExtension(mixed $input, string $extension, Throwable|string|null $description = null): void;

    public static function allNotFactor(mixed $input, int $dividend, Throwable|string|null $description = null): void;

    public static function allNotFalseVal(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotFibonacci(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotFile(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotFilterVar(mixed $input, int $filter, mixed $options = null, Throwable|string|null $description = null): void;

    public static function allNotFinite(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotFloatType(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotFloatVal(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotGraph(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function allNotGreaterThan(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function allNotHexRgbColor(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotIban(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotIdentical(mixed $input, mixed $value, Throwable|string|null $description = null): void;

    public static function allNotImage(mixed $input, ?finfo $fileInfo = null, Throwable|string|null $description = null): void;

    public static function allNotImei(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotIn(mixed $input, mixed $haystack, bool $compareIdentical = false, Throwable|string|null $description = null): void;

    public static function allNotInfinite(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotInstance(mixed $input, string $instanceName, Throwable|string|null $description = null): void;

    public static function allNotIntType(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotIntVal(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotIp(mixed $input, string $range = '*', ?int $options = null, Throwable|string|null $description = null): void;

    public static function allNotIsbn(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotIterableType(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotJson(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotLanguageCode(mixed $input, ?string $set = null, Throwable|string|null $description = null): void;

    public static function allNotLeapDate(mixed $input, string $format, Throwable|string|null $description = null): void;

    public static function allNotLeapYear(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotLessThan(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function allNotLowercase(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotLuhn(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotMacAddress(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotMaxAge(mixed $input, int $age, ?string $format = null, Throwable|string|null $description = null): void;

    public static function allNotMimetype(mixed $input, string $mimetype, Throwable|string|null $description = null): void;

    public static function allNotMinAge(mixed $input, int $age, ?string $format = null, Throwable|string|null $description = null): void;

    public static function allNotMultiple(mixed $input, int $multipleOf, Throwable|string|null $description = null): void;

    public static function allNotNegative(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotNfeAccessKey(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotNif(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotNip(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotNo(mixed $input, mixed $useLocale = false, Throwable|string|null $description = null): void;

    public static function allNotNoWhitespace(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotNullType(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotNumber(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotNumericVal(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotObjectType(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotOdd(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotOptional(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotPerfectSquare(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotPesel(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotPhone(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotPhpLabel(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotPis(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotPolishIdCard(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotPositive(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotPostalCode(mixed $input, string $countryCode, Throwable|string|null $description = null): void;

    public static function allNotPrimeNumber(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotPrintable(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function allNotPunct(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function allNotReadable(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotRegex(mixed $input, string $regex, Throwable|string|null $description = null): void;

    public static function allNotResourceType(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotRoman(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotScalarVal(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotSize(mixed $input, ?string $minSize = null, ?string $maxSize = null, Throwable|string|null $description = null): void;

    public static function allNotSlug(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotSorted(mixed $input, string $direction, Throwable|string|null $description = null): void;

    public static function allNotSpace(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function allNotStartsWith(mixed $input, mixed $startValue, bool $identical = false, Throwable|string|null $description = null): void;

    public static function allNotStringType(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotStringVal(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotSubdivisionCode(mixed $input, string $countryCode, Throwable|string|null $description = null): void;

    /**
     * @param array<mixed> $superset
     */
    public static function allNotSubset(mixed $input, array $superset, Throwable|string|null $description = null): void;

    public static function allNotSymbolicLink(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotTime(mixed $input, string $format = 'H:i:s', Throwable|string|null $description = null): void;

    public static function allNotTld(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotTrueVal(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotType(mixed $input, string $type, Throwable|string|null $description = null): void;

    public static function allNotUnique(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotUploaded(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotUppercase(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotUrl(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotUuid(mixed $input, ?int $version = null, Throwable|string|null $description = null): void;

    public static function allNotVersion(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotVideoUrl(mixed $input, ?string $service = null, Throwable|string|null $description = null): void;

    public static function allNotVowel(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function allNotWritable(mixed $input, Throwable|string|null $description = null): void;

    public static function allNotXdigit(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function allNotYes(mixed $input, mixed $useLocale = false, Throwable|string|null $description = null): void;

    public static function allNullType(mixed $input, Throwable|string|null $description = null): void;

    public static function allNumber(mixed $input, Throwable|string|null $description = null): void;

    public static function allNumericVal(mixed $input, Throwable|string|null $description = null): void;

    public static function allObjectType(mixed $input, Throwable|string|null $description = null): void;

    public static function allOdd(mixed $input, Throwable|string|null $description = null): void;

    public static function allPerfectSquare(mixed $input, Throwable|string|null $description = null): void;

    public static function allPesel(mixed $input, Throwable|string|null $description = null): void;

    public static function allPhone(mixed $input, Throwable|string|null $description = null): void;

    public static function allPhpLabel(mixed $input, Throwable|string|null $description = null): void;

    public static function allPis(mixed $input, Throwable|string|null $description = null): void;

    public static function allPolishIdCard(mixed $input, Throwable|string|null $description = null): void;

    public static function allPositive(mixed $input, Throwable|string|null $description = null): void;

    public static function allPostalCode(mixed $input, string $countryCode, Throwable|string|null $description = null): void;

    public static function allPrimeNumber(mixed $input, Throwable|string|null $description = null): void;

    public static function allPrintable(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function allPunct(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function allReadable(mixed $input, Throwable|string|null $description = null): void;

    public static function allRegex(mixed $input, string $regex, Throwable|string|null $description = null): void;

    public static function allResourceType(mixed $input, Throwable|string|null $description = null): void;

    public static function allRoman(mixed $input, Throwable|string|null $description = null): void;

    public static function allScalarVal(mixed $input, Throwable|string|null $description = null): void;

    public static function allSize(mixed $input, ?string $minSize = null, ?string $maxSize = null, Throwable|string|null $description = null): void;

    public static function allSlug(mixed $input, Throwable|string|null $description = null): void;

    public static function allSorted(mixed $input, string $direction, Throwable|string|null $description = null): void;

    public static function allSpace(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function allStartsWith(mixed $input, mixed $startValue, bool $identical = false, Throwable|string|null $description = null): void;

    public static function allStringType(mixed $input, Throwable|string|null $description = null): void;

    public static function allStringVal(mixed $input, Throwable|string|null $description = null): void;

    public static function allSubdivisionCode(mixed $input, string $countryCode, Throwable|string|null $description = null): void;

    /**
     * @param array<mixed> $superset
     */
    public static function allSubset(mixed $input, array $superset, Throwable|string|null $description = null): void;

    public static function allSymbolicLink(mixed $input, Throwable|string|null $description = null): void;

    public static function allTime(mixed $input, string $format = 'H:i:s', Throwable|string|null $description = null): void;

    public static function allTld(mixed $input, Throwable|string|null $description = null): void;

    public static function allTrueVal(mixed $input, Throwable|string|null $description = null): void;

    public static function allType(mixed $input, string $type, Throwable|string|null $description = null): void;

    public static function allUnique(mixed $input, Throwable|string|null $description = null): void;

    public static function allUploaded(mixed $input, Throwable|string|null $description = null): void;

    public static function allUppercase(mixed $input, Throwable|string|null $description = null): void;

    public static function allUrl(mixed $input, Throwable|string|null $description = null): void;

    public static function allUuid(mixed $input, ?int $version = null, Throwable|string|null $description = null): void;

    public static function allVersion(mixed $input, Throwable|string|null $description = null): void;

    public static function allVideoUrl(mixed $input, ?string $service = null, Throwable|string|null $description = null): void;

    public static function allVowel(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function allWritable(mixed $input, Throwable|string|null $description = null): void;

    public static function allXdigit(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function allYes(mixed $input, mixed $useLocale = false, Throwable|string|null $description = null): void;

    public static function alnum(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function alpha(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function arrayType(mixed $input, Throwable|string|null $description = null): void;

    public static function arrayVal(mixed $input, Throwable|string|null $description = null): void;

    public static function base(mixed $input, int $base, ?string $chars = null, Throwable|string|null $description = null): void;

    public static function base64(mixed $input, Throwable|string|null $description = null): void;

    public static function between(mixed $input, mixed $minimum, mixed $maximum, Throwable|string|null $description = null): void;

    public static function bic(mixed $input, string $countryCode, Throwable|string|null $description = null): void;

    public static function boolType(mixed $input, Throwable|string|null $description = null): void;

    public static function boolVal(mixed $input, Throwable|string|null $description = null): void;

    public static function bsn(mixed $input, Throwable|string|null $description = null): void;

    public static function callableType(mixed $input, Throwable|string|null $description = null): void;

    public static function callback(mixed $input, callable $callback, Throwable|string|null $description = null): void;

    public static function charset(mixed $input, ?string $charset = null, Throwable|string|null $description = null): void;

    public static function cnh(mixed $input, Throwable|string|null $description = null): void;

    public static function cnpj(mixed $input, Throwable|string|null $description = null): void;

    public static function consonant(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function contains(mixed $input, mixed $containsValue, bool $identical = false, Throwable|string|null $description = null): void;

    /**
     * @param array<mixed> $needles
     */
    public static function containsAny(mixed $input, array $needles, bool $strictCompareArray = false, Throwable|string|null $description = null): void;

    public static function control(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function countable(mixed $input, Throwable|string|null $description = null): void;

    public static function countryCode(mixed $input, ?string $set = null, Throwable|string|null $description = null): void;

    public static function cpf(mixed $input, Throwable|string|null $description = null): void;

    public static function creditCard(mixed $input, ?string $brand = null, Throwable|string|null $description = null): void;

    public static function currencyCode(mixed $input, Throwable|string|null $description = null): void;

    public static function date(mixed $input, string $format = 'Y-m-d', Throwable|string|null $description = null): void;

    public static function dateTime(mixed $input, ?string $format = null, Throwable|string|null $description = null): void;

    public static function digit(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function directory(mixed $input, Throwable|string|null $description = null): void;

    public static function domain(mixed $input, bool $tldCheck = true, Throwable|string|null $description = null): void;

    public static function email(mixed $input, Throwable|string|null $description = null): void;

    public static function endsWith(mixed $input, mixed $endValue, bool $identical = false, Throwable|string|null $description = null): void;

    public static function equals(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function equivalent(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function even(mixed $input, Throwable|string|null $description = null): void;

    public static function executable(mixed $input, Throwable|string|null $description = null): void;

    public static function exists(mixed $input, Throwable|string|null $description = null): void;

    public static function extension(mixed $input, string $extension, Throwable|string|null $description = null): void;

    public static function factor(mixed $input, int $dividend, Throwable|string|null $description = null): void;

    public static function falseVal(mixed $input, Throwable|string|null $description = null): void;

    public static function fibonacci(mixed $input, Throwable|string|null $description = null): void;

    public static function file(mixed $input, Throwable|string|null $description = null): void;

    public static function filterVar(mixed $input, int $filter, mixed $options = null, Throwable|string|null $description = null): void;

    public static function finite(mixed $input, Throwable|string|null $description = null): void;

    public static function floatType(mixed $input, Throwable|string|null $description = null): void;

    public static function floatVal(mixed $input, Throwable|string|null $description = null): void;

    public static function graph(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function greaterThan(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function hexRgbColor(mixed $input, Throwable|string|null $description = null): void;

    public static function iban(mixed $input, Throwable|string|null $description = null): void;

    public static function identical(mixed $input, mixed $value, Throwable|string|null $description = null): void;

    public static function image(mixed $input, ?finfo $fileInfo = null, Throwable|string|null $description = null): void;

    public static function imei(mixed $input, Throwable|string|null $description = null): void;

    public static function in(mixed $input, mixed $haystack, bool $compareIdentical = false, Throwable|string|null $description = null): void;

    public static function infinite(mixed $input, Throwable|string|null $description = null): void;

    public static function instance(mixed $input, string $instanceName, Throwable|string|null $description = null): void;

    public static function intType(mixed $input, Throwable|string|null $description = null): void;

    public static function intVal(mixed $input, Throwable|string|null $description = null): void;

    public static function ip(mixed $input, string $range = '*', ?int $options = null, Throwable|string|null $description = null): void;

    public static function isbn(mixed $input, Throwable|string|null $description = null): void;

    public static function iterableType(mixed $input, Throwable|string|null $description = null): void;

    public static function json(mixed $input, Throwable|string|null $description = null): void;

    public static function key(mixed $input, mixed $key, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function keyAlnum(mixed $input, mixed $key, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function keyAlpha(mixed $input, mixed $key, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function keyArrayType(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyArrayVal(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyBase(mixed $input, mixed $key, int $base, ?string $chars = null, Throwable|string|null $description = null): void;

    public static function keyBase64(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyBetween(mixed $input, mixed $key, mixed $minimum, mixed $maximum, Throwable|string|null $description = null): void;

    public static function keyBic(mixed $input, mixed $key, string $countryCode, Throwable|string|null $description = null): void;

    public static function keyBoolType(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyBoolVal(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyBsn(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyCallableType(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyCallback(mixed $input, mixed $key, callable $callback, Throwable|string|null $description = null): void;

    public static function keyCharset(mixed $input, mixed $key, ?string $charset = null, Throwable|string|null $description = null): void;

    public static function keyCnh(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyCnpj(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyConsonant(mixed $input, mixed $key, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function keyContains(mixed $input, mixed $key, mixed $containsValue, bool $identical = false, Throwable|string|null $description = null): void;

    /**
     * @param array<mixed> $needles
     */
    public static function keyContainsAny(mixed $input, mixed $key, array $needles, bool $strictCompareArray = false, Throwable|string|null $description = null): void;

    public static function keyControl(mixed $input, mixed $key, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function keyCountable(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyCountryCode(mixed $input, mixed $key, ?string $set = null, Throwable|string|null $description = null): void;

    public static function keyCpf(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyCreditCard(mixed $input, mixed $key, ?string $brand = null, Throwable|string|null $description = null): void;

    public static function keyCurrencyCode(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyDate(mixed $input, mixed $key, string $format = 'Y-m-d', Throwable|string|null $description = null): void;

    public static function keyDateTime(mixed $input, mixed $key, ?string $format = null, Throwable|string|null $description = null): void;

    public static function keyDigit(mixed $input, mixed $key, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function keyDirectory(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyDomain(mixed $input, mixed $key, bool $tldCheck = true, Throwable|string|null $description = null): void;

    public static function keyEmail(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyEndsWith(mixed $input, mixed $key, mixed $endValue, bool $identical = false, Throwable|string|null $description = null): void;

    public static function keyEquals(mixed $input, mixed $key, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function keyEquivalent(mixed $input, mixed $key, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function keyEven(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyExecutable(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyExists(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyExtension(mixed $input, mixed $key, string $extension, Throwable|string|null $description = null): void;

    public static function keyFactor(mixed $input, mixed $key, int $dividend, Throwable|string|null $description = null): void;

    public static function keyFalseVal(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyFibonacci(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyFile(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyFilterVar(mixed $input, mixed $key, int $filter, mixed $options = null, Throwable|string|null $description = null): void;

    public static function keyFinite(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyFloatType(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyFloatVal(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyGraph(mixed $input, mixed $key, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function keyGreaterThan(mixed $input, mixed $key, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function keyHexRgbColor(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyIban(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyIdentical(mixed $input, mixed $key, mixed $value, Throwable|string|null $description = null): void;

    public static function keyImage(mixed $input, mixed $key, ?finfo $fileInfo = null, Throwable|string|null $description = null): void;

    public static function keyImei(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyIn(mixed $input, mixed $key, mixed $haystack, bool $compareIdentical = false, Throwable|string|null $description = null): void;

    public static function keyInfinite(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyInstance(mixed $input, mixed $key, string $instanceName, Throwable|string|null $description = null): void;

    public static function keyIntType(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyIntVal(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyIp(mixed $input, mixed $key, string $range = '*', ?int $options = null, Throwable|string|null $description = null): void;

    public static function keyIsbn(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyIterableType(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyJson(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyLanguageCode(mixed $input, mixed $key, ?string $set = null, Throwable|string|null $description = null): void;

    public static function keyLeapDate(mixed $input, mixed $key, string $format, Throwable|string|null $description = null): void;

    public static function keyLeapYear(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyLessThan(mixed $input, mixed $key, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function keyLowercase(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyLuhn(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyMacAddress(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyMaxAge(mixed $input, mixed $key, int $age, ?string $format = null, Throwable|string|null $description = null): void;

    public static function keyMimetype(mixed $input, mixed $key, string $mimetype, Throwable|string|null $description = null): void;

    public static function keyMinAge(mixed $input, mixed $key, int $age, ?string $format = null, Throwable|string|null $description = null): void;

    public static function keyMultiple(mixed $input, mixed $key, int $multipleOf, Throwable|string|null $description = null): void;

    public static function keyNegative(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNfeAccessKey(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNif(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNip(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNo(mixed $input, mixed $key, mixed $useLocale = false, Throwable|string|null $description = null): void;

    public static function keyNoWhitespace(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNot(mixed $input, mixed $key, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function keyNotAlnum(mixed $input, mixed $key, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function keyNotAlpha(mixed $input, mixed $key, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function keyNotArrayType(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotArrayVal(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotBase(mixed $input, mixed $key, int $base, ?string $chars = null, Throwable|string|null $description = null): void;

    public static function keyNotBase64(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotBetween(mixed $input, mixed $key, mixed $minimum, mixed $maximum, Throwable|string|null $description = null): void;

    public static function keyNotBic(mixed $input, mixed $key, string $countryCode, Throwable|string|null $description = null): void;

    public static function keyNotBlank(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotBoolType(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotBoolVal(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotBsn(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotCallableType(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotCallback(mixed $input, mixed $key, callable $callback, Throwable|string|null $description = null): void;

    public static function keyNotCharset(mixed $input, mixed $key, ?string $charset = null, Throwable|string|null $description = null): void;

    public static function keyNotCnh(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotCnpj(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotConsonant(mixed $input, mixed $key, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function keyNotContains(mixed $input, mixed $key, mixed $containsValue, bool $identical = false, Throwable|string|null $description = null): void;

    /**
     * @param array<mixed> $needles
     */
    public static function keyNotContainsAny(mixed $input, mixed $key, array $needles, bool $strictCompareArray = false, Throwable|string|null $description = null): void;

    public static function keyNotControl(mixed $input, mixed $key, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function keyNotCountable(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotCountryCode(mixed $input, mixed $key, ?string $set = null, Throwable|string|null $description = null): void;

    public static function keyNotCpf(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotCreditCard(mixed $input, mixed $key, ?string $brand = null, Throwable|string|null $description = null): void;

    public static function keyNotCurrencyCode(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotDate(mixed $input, mixed $key, string $format = 'Y-m-d', Throwable|string|null $description = null): void;

    public static function keyNotDateTime(mixed $input, mixed $key, ?string $format = null, Throwable|string|null $description = null): void;

    public static function keyNotDigit(mixed $input, mixed $key, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function keyNotDirectory(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotDomain(mixed $input, mixed $key, bool $tldCheck = true, Throwable|string|null $description = null): void;

    public static function keyNotEmail(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotEmoji(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotEmpty(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotEndsWith(mixed $input, mixed $key, mixed $endValue, bool $identical = false, Throwable|string|null $description = null): void;

    public static function keyNotEquals(mixed $input, mixed $key, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function keyNotEquivalent(mixed $input, mixed $key, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function keyNotEven(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotExecutable(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotExists(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotExtension(mixed $input, mixed $key, string $extension, Throwable|string|null $description = null): void;

    public static function keyNotFactor(mixed $input, mixed $key, int $dividend, Throwable|string|null $description = null): void;

    public static function keyNotFalseVal(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotFibonacci(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotFile(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotFilterVar(mixed $input, mixed $key, int $filter, mixed $options = null, Throwable|string|null $description = null): void;

    public static function keyNotFinite(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotFloatType(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotFloatVal(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotGraph(mixed $input, mixed $key, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function keyNotGreaterThan(mixed $input, mixed $key, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function keyNotHexRgbColor(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotIban(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotIdentical(mixed $input, mixed $key, mixed $value, Throwable|string|null $description = null): void;

    public static function keyNotImage(mixed $input, mixed $key, ?finfo $fileInfo = null, Throwable|string|null $description = null): void;

    public static function keyNotImei(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotIn(mixed $input, mixed $key, mixed $haystack, bool $compareIdentical = false, Throwable|string|null $description = null): void;

    public static function keyNotInfinite(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotInstance(mixed $input, mixed $key, string $instanceName, Throwable|string|null $description = null): void;

    public static function keyNotIntType(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotIntVal(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotIp(mixed $input, mixed $key, string $range = '*', ?int $options = null, Throwable|string|null $description = null): void;

    public static function keyNotIsbn(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotIterableType(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotJson(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotLanguageCode(mixed $input, mixed $key, ?string $set = null, Throwable|string|null $description = null): void;

    public static function keyNotLeapDate(mixed $input, mixed $key, string $format, Throwable|string|null $description = null): void;

    public static function keyNotLeapYear(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotLessThan(mixed $input, mixed $key, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function keyNotLowercase(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotLuhn(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotMacAddress(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotMaxAge(mixed $input, mixed $key, int $age, ?string $format = null, Throwable|string|null $description = null): void;

    public static function keyNotMimetype(mixed $input, mixed $key, string $mimetype, Throwable|string|null $description = null): void;

    public static function keyNotMinAge(mixed $input, mixed $key, int $age, ?string $format = null, Throwable|string|null $description = null): void;

    public static function keyNotMultiple(mixed $input, mixed $key, int $multipleOf, Throwable|string|null $description = null): void;

    public static function keyNotNegative(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotNfeAccessKey(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotNif(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotNip(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotNo(mixed $input, mixed $key, mixed $useLocale = false, Throwable|string|null $description = null): void;

    public static function keyNotNoWhitespace(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotNullType(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotNumber(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotNumericVal(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotObjectType(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotOdd(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotOptional(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotPerfectSquare(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotPesel(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotPhone(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotPhpLabel(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotPis(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotPolishIdCard(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotPositive(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotPostalCode(mixed $input, mixed $key, string $countryCode, Throwable|string|null $description = null): void;

    public static function keyNotPresent(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotPrimeNumber(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotPrintable(mixed $input, mixed $key, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function keyNotPunct(mixed $input, mixed $key, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function keyNotReadable(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotRegex(mixed $input, mixed $key, string $regex, Throwable|string|null $description = null): void;

    public static function keyNotResourceType(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotRoman(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotScalarVal(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotSize(mixed $input, mixed $key, ?string $minSize = null, ?string $maxSize = null, Throwable|string|null $description = null): void;

    public static function keyNotSlug(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotSorted(mixed $input, mixed $key, string $direction, Throwable|string|null $description = null): void;

    public static function keyNotSpace(mixed $input, mixed $key, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function keyNotStartsWith(mixed $input, mixed $key, mixed $startValue, bool $identical = false, Throwable|string|null $description = null): void;

    public static function keyNotStringType(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotStringVal(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotSubdivisionCode(mixed $input, mixed $key, string $countryCode, Throwable|string|null $description = null): void;

    /**
     * @param array<mixed> $superset
     */
    public static function keyNotSubset(mixed $input, mixed $key, array $superset, Throwable|string|null $description = null): void;

    public static function keyNotSymbolicLink(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotTime(mixed $input, mixed $key, string $format = 'H:i:s', Throwable|string|null $description = null): void;

    public static function keyNotTld(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotTrueVal(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotType(mixed $input, mixed $key, string $type, Throwable|string|null $description = null): void;

    public static function keyNotUnique(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotUploaded(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotUppercase(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotUrl(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotUuid(mixed $input, mixed $key, ?int $version = null, Throwable|string|null $description = null): void;

    public static function keyNotVersion(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotVideoUrl(mixed $input, mixed $key, ?string $service = null, Throwable|string|null $description = null): void;

    public static function keyNotVowel(mixed $input, mixed $key, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function keyNotWritable(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNotXdigit(mixed $input, mixed $key, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function keyNotYes(mixed $input, mixed $key, mixed $useLocale = false, Throwable|string|null $description = null): void;

    public static function keyNullType(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNumber(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyNumericVal(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyObjectType(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyOdd(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyPerfectSquare(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyPesel(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyPhone(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyPhpLabel(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyPis(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyPolishIdCard(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyPositive(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyPostalCode(mixed $input, mixed $key, string $countryCode, Throwable|string|null $description = null): void;

    public static function keyPresent(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyPrimeNumber(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyPrintable(mixed $input, mixed $key, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function keyPunct(mixed $input, mixed $key, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function keyReadable(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyRegex(mixed $input, mixed $key, string $regex, Throwable|string|null $description = null): void;

    public static function keyResourceType(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyRoman(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyScalarVal(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keySize(mixed $input, mixed $key, ?string $minSize = null, ?string $maxSize = null, Throwable|string|null $description = null): void;

    public static function keySlug(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keySorted(mixed $input, mixed $key, string $direction, Throwable|string|null $description = null): void;

    public static function keySpace(mixed $input, mixed $key, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function keyStartsWith(mixed $input, mixed $key, mixed $startValue, bool $identical = false, Throwable|string|null $description = null): void;

    public static function keyStringType(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyStringVal(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keySubdivisionCode(mixed $input, mixed $key, string $countryCode, Throwable|string|null $description = null): void;

    /**
     * @param array<mixed> $superset
     */
    public static function keySubset(mixed $input, mixed $key, array $superset, Throwable|string|null $description = null): void;

    public static function keySymbolicLink(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyTime(mixed $input, mixed $key, string $format = 'H:i:s', Throwable|string|null $description = null): void;

    public static function keyTld(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyTrueVal(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyType(mixed $input, mixed $key, string $type, Throwable|string|null $description = null): void;

    public static function keyUnique(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyUploaded(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyUppercase(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyUrl(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyUuid(mixed $input, mixed $key, ?int $version = null, Throwable|string|null $description = null): void;

    public static function keyVersion(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyVideoUrl(mixed $input, mixed $key, ?string $service = null, Throwable|string|null $description = null): void;

    public static function keyVowel(mixed $input, mixed $key, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function keyWritable(mixed $input, mixed $key, Throwable|string|null $description = null): void;

    public static function keyXdigit(mixed $input, mixed $key, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function keyYes(mixed $input, mixed $key, mixed $useLocale = false, Throwable|string|null $description = null): void;

    public static function languageCode(mixed $input, ?string $set = null, Throwable|string|null $description = null): void;

    public static function leapDate(mixed $input, string $format, Throwable|string|null $description = null): void;

    public static function leapYear(mixed $input, Throwable|string|null $description = null): void;

    public static function length(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function lengthBase(mixed $input, int $base, ?string $chars = null, Throwable|string|null $description = null): void;

    public static function lengthBetween(mixed $input, mixed $minimum, mixed $maximum, Throwable|string|null $description = null): void;

    public static function lengthDate(mixed $input, string $format = 'Y-m-d', Throwable|string|null $description = null): void;

    public static function lengthDateTime(mixed $input, ?string $format = null, Throwable|string|null $description = null): void;

    public static function lengthDigit(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function lengthEquals(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function lengthEquivalent(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function lengthEven(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthFactor(mixed $input, int $dividend, Throwable|string|null $description = null): void;

    public static function lengthFibonacci(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthFinite(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthFloatType(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthFloatVal(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthGreaterThan(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function lengthIdentical(mixed $input, mixed $value, Throwable|string|null $description = null): void;

    public static function lengthIn(mixed $input, mixed $haystack, bool $compareIdentical = false, Throwable|string|null $description = null): void;

    public static function lengthInfinite(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthIntType(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthIntVal(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthLeapDate(mixed $input, string $format, Throwable|string|null $description = null): void;

    public static function lengthLeapYear(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthLessThan(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function lengthMaxAge(mixed $input, int $age, ?string $format = null, Throwable|string|null $description = null): void;

    public static function lengthMinAge(mixed $input, int $age, ?string $format = null, Throwable|string|null $description = null): void;

    public static function lengthMultiple(mixed $input, int $multipleOf, Throwable|string|null $description = null): void;

    public static function lengthNegative(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthNot(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function lengthNotBase(mixed $input, int $base, ?string $chars = null, Throwable|string|null $description = null): void;

    public static function lengthNotBetween(mixed $input, mixed $minimum, mixed $maximum, Throwable|string|null $description = null): void;

    public static function lengthNotDate(mixed $input, string $format = 'Y-m-d', Throwable|string|null $description = null): void;

    public static function lengthNotDateTime(mixed $input, ?string $format = null, Throwable|string|null $description = null): void;

    public static function lengthNotDigit(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function lengthNotEquals(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function lengthNotEquivalent(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function lengthNotEven(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthNotFactor(mixed $input, int $dividend, Throwable|string|null $description = null): void;

    public static function lengthNotFibonacci(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthNotFinite(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthNotFloatType(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthNotFloatVal(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthNotGreaterThan(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function lengthNotIdentical(mixed $input, mixed $value, Throwable|string|null $description = null): void;

    public static function lengthNotIn(mixed $input, mixed $haystack, bool $compareIdentical = false, Throwable|string|null $description = null): void;

    public static function lengthNotInfinite(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthNotIntType(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthNotIntVal(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthNotLeapDate(mixed $input, string $format, Throwable|string|null $description = null): void;

    public static function lengthNotLeapYear(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthNotLessThan(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function lengthNotMaxAge(mixed $input, int $age, ?string $format = null, Throwable|string|null $description = null): void;

    public static function lengthNotMinAge(mixed $input, int $age, ?string $format = null, Throwable|string|null $description = null): void;

    public static function lengthNotMultiple(mixed $input, int $multipleOf, Throwable|string|null $description = null): void;

    public static function lengthNotNegative(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthNotNumber(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthNotNumericVal(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthNotOdd(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthNotPerfectSquare(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthNotPositive(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthNotPrimeNumber(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthNotRoman(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthNotStringType(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthNotStringVal(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthNotTime(mixed $input, string $format = 'H:i:s', Throwable|string|null $description = null): void;

    public static function lengthNumber(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthNumericVal(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthOdd(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthPerfectSquare(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthPositive(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthPrimeNumber(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthRoman(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthStringType(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthStringVal(mixed $input, Throwable|string|null $description = null): void;

    public static function lengthTime(mixed $input, string $format = 'H:i:s', Throwable|string|null $description = null): void;

    public static function lessThan(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function lowercase(mixed $input, Throwable|string|null $description = null): void;

    public static function luhn(mixed $input, Throwable|string|null $description = null): void;

    public static function macAddress(mixed $input, Throwable|string|null $description = null): void;

    public static function max(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function maxAge(mixed $input, int $age, ?string $format = null, Throwable|string|null $description = null): void;

    public static function maxBase(mixed $input, int $base, ?string $chars = null, Throwable|string|null $description = null): void;

    public static function maxBetween(mixed $input, mixed $minimum, mixed $maximum, Throwable|string|null $description = null): void;

    public static function maxDate(mixed $input, string $format = 'Y-m-d', Throwable|string|null $description = null): void;

    public static function maxDateTime(mixed $input, ?string $format = null, Throwable|string|null $description = null): void;

    public static function maxDigit(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function maxEquals(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function maxEquivalent(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function maxEven(mixed $input, Throwable|string|null $description = null): void;

    public static function maxFactor(mixed $input, int $dividend, Throwable|string|null $description = null): void;

    public static function maxFibonacci(mixed $input, Throwable|string|null $description = null): void;

    public static function maxFinite(mixed $input, Throwable|string|null $description = null): void;

    public static function maxFloatType(mixed $input, Throwable|string|null $description = null): void;

    public static function maxFloatVal(mixed $input, Throwable|string|null $description = null): void;

    public static function maxGreaterThan(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function maxIdentical(mixed $input, mixed $value, Throwable|string|null $description = null): void;

    public static function maxIn(mixed $input, mixed $haystack, bool $compareIdentical = false, Throwable|string|null $description = null): void;

    public static function maxInfinite(mixed $input, Throwable|string|null $description = null): void;

    public static function maxIntType(mixed $input, Throwable|string|null $description = null): void;

    public static function maxIntVal(mixed $input, Throwable|string|null $description = null): void;

    public static function maxLeapDate(mixed $input, string $format, Throwable|string|null $description = null): void;

    public static function maxLeapYear(mixed $input, Throwable|string|null $description = null): void;

    public static function maxLessThan(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function maxMaxAge(mixed $input, int $age, ?string $format = null, Throwable|string|null $description = null): void;

    public static function maxMinAge(mixed $input, int $age, ?string $format = null, Throwable|string|null $description = null): void;

    public static function maxMultiple(mixed $input, int $multipleOf, Throwable|string|null $description = null): void;

    public static function maxNegative(mixed $input, Throwable|string|null $description = null): void;

    public static function maxNot(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function maxNotBase(mixed $input, int $base, ?string $chars = null, Throwable|string|null $description = null): void;

    public static function maxNotBetween(mixed $input, mixed $minimum, mixed $maximum, Throwable|string|null $description = null): void;

    public static function maxNotDate(mixed $input, string $format = 'Y-m-d', Throwable|string|null $description = null): void;

    public static function maxNotDateTime(mixed $input, ?string $format = null, Throwable|string|null $description = null): void;

    public static function maxNotDigit(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function maxNotEquals(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function maxNotEquivalent(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function maxNotEven(mixed $input, Throwable|string|null $description = null): void;

    public static function maxNotFactor(mixed $input, int $dividend, Throwable|string|null $description = null): void;

    public static function maxNotFibonacci(mixed $input, Throwable|string|null $description = null): void;

    public static function maxNotFinite(mixed $input, Throwable|string|null $description = null): void;

    public static function maxNotFloatType(mixed $input, Throwable|string|null $description = null): void;

    public static function maxNotFloatVal(mixed $input, Throwable|string|null $description = null): void;

    public static function maxNotGreaterThan(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function maxNotIdentical(mixed $input, mixed $value, Throwable|string|null $description = null): void;

    public static function maxNotIn(mixed $input, mixed $haystack, bool $compareIdentical = false, Throwable|string|null $description = null): void;

    public static function maxNotInfinite(mixed $input, Throwable|string|null $description = null): void;

    public static function maxNotIntType(mixed $input, Throwable|string|null $description = null): void;

    public static function maxNotIntVal(mixed $input, Throwable|string|null $description = null): void;

    public static function maxNotLeapDate(mixed $input, string $format, Throwable|string|null $description = null): void;

    public static function maxNotLeapYear(mixed $input, Throwable|string|null $description = null): void;

    public static function maxNotLessThan(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function maxNotMaxAge(mixed $input, int $age, ?string $format = null, Throwable|string|null $description = null): void;

    public static function maxNotMinAge(mixed $input, int $age, ?string $format = null, Throwable|string|null $description = null): void;

    public static function maxNotMultiple(mixed $input, int $multipleOf, Throwable|string|null $description = null): void;

    public static function maxNotNegative(mixed $input, Throwable|string|null $description = null): void;

    public static function maxNotNumber(mixed $input, Throwable|string|null $description = null): void;

    public static function maxNotNumericVal(mixed $input, Throwable|string|null $description = null): void;

    public static function maxNotOdd(mixed $input, Throwable|string|null $description = null): void;

    public static function maxNotPerfectSquare(mixed $input, Throwable|string|null $description = null): void;

    public static function maxNotPositive(mixed $input, Throwable|string|null $description = null): void;

    public static function maxNotPrimeNumber(mixed $input, Throwable|string|null $description = null): void;

    public static function maxNotRoman(mixed $input, Throwable|string|null $description = null): void;

    public static function maxNotStringType(mixed $input, Throwable|string|null $description = null): void;

    public static function maxNotStringVal(mixed $input, Throwable|string|null $description = null): void;

    public static function maxNotTime(mixed $input, string $format = 'H:i:s', Throwable|string|null $description = null): void;

    public static function maxNumber(mixed $input, Throwable|string|null $description = null): void;

    public static function maxNumericVal(mixed $input, Throwable|string|null $description = null): void;

    public static function maxOdd(mixed $input, Throwable|string|null $description = null): void;

    public static function maxPerfectSquare(mixed $input, Throwable|string|null $description = null): void;

    public static function maxPositive(mixed $input, Throwable|string|null $description = null): void;

    public static function maxPrimeNumber(mixed $input, Throwable|string|null $description = null): void;

    public static function maxRoman(mixed $input, Throwable|string|null $description = null): void;

    public static function maxStringType(mixed $input, Throwable|string|null $description = null): void;

    public static function maxStringVal(mixed $input, Throwable|string|null $description = null): void;

    public static function maxTime(mixed $input, string $format = 'H:i:s', Throwable|string|null $description = null): void;

    public static function mimetype(mixed $input, string $mimetype, Throwable|string|null $description = null): void;

    public static function min(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function minAge(mixed $input, int $age, ?string $format = null, Throwable|string|null $description = null): void;

    public static function minBase(mixed $input, int $base, ?string $chars = null, Throwable|string|null $description = null): void;

    public static function minBetween(mixed $input, mixed $minimum, mixed $maximum, Throwable|string|null $description = null): void;

    public static function minDate(mixed $input, string $format = 'Y-m-d', Throwable|string|null $description = null): void;

    public static function minDateTime(mixed $input, ?string $format = null, Throwable|string|null $description = null): void;

    public static function minDigit(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function minEquals(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function minEquivalent(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function minEven(mixed $input, Throwable|string|null $description = null): void;

    public static function minFactor(mixed $input, int $dividend, Throwable|string|null $description = null): void;

    public static function minFibonacci(mixed $input, Throwable|string|null $description = null): void;

    public static function minFinite(mixed $input, Throwable|string|null $description = null): void;

    public static function minFloatType(mixed $input, Throwable|string|null $description = null): void;

    public static function minFloatVal(mixed $input, Throwable|string|null $description = null): void;

    public static function minGreaterThan(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function minIdentical(mixed $input, mixed $value, Throwable|string|null $description = null): void;

    public static function minIn(mixed $input, mixed $haystack, bool $compareIdentical = false, Throwable|string|null $description = null): void;

    public static function minInfinite(mixed $input, Throwable|string|null $description = null): void;

    public static function minIntType(mixed $input, Throwable|string|null $description = null): void;

    public static function minIntVal(mixed $input, Throwable|string|null $description = null): void;

    public static function minLeapDate(mixed $input, string $format, Throwable|string|null $description = null): void;

    public static function minLeapYear(mixed $input, Throwable|string|null $description = null): void;

    public static function minLessThan(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function minMaxAge(mixed $input, int $age, ?string $format = null, Throwable|string|null $description = null): void;

    public static function minMinAge(mixed $input, int $age, ?string $format = null, Throwable|string|null $description = null): void;

    public static function minMultiple(mixed $input, int $multipleOf, Throwable|string|null $description = null): void;

    public static function minNegative(mixed $input, Throwable|string|null $description = null): void;

    public static function minNot(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function minNotBase(mixed $input, int $base, ?string $chars = null, Throwable|string|null $description = null): void;

    public static function minNotBetween(mixed $input, mixed $minimum, mixed $maximum, Throwable|string|null $description = null): void;

    public static function minNotDate(mixed $input, string $format = 'Y-m-d', Throwable|string|null $description = null): void;

    public static function minNotDateTime(mixed $input, ?string $format = null, Throwable|string|null $description = null): void;

    public static function minNotDigit(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function minNotEquals(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function minNotEquivalent(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function minNotEven(mixed $input, Throwable|string|null $description = null): void;

    public static function minNotFactor(mixed $input, int $dividend, Throwable|string|null $description = null): void;

    public static function minNotFibonacci(mixed $input, Throwable|string|null $description = null): void;

    public static function minNotFinite(mixed $input, Throwable|string|null $description = null): void;

    public static function minNotFloatType(mixed $input, Throwable|string|null $description = null): void;

    public static function minNotFloatVal(mixed $input, Throwable|string|null $description = null): void;

    public static function minNotGreaterThan(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function minNotIdentical(mixed $input, mixed $value, Throwable|string|null $description = null): void;

    public static function minNotIn(mixed $input, mixed $haystack, bool $compareIdentical = false, Throwable|string|null $description = null): void;

    public static function minNotInfinite(mixed $input, Throwable|string|null $description = null): void;

    public static function minNotIntType(mixed $input, Throwable|string|null $description = null): void;

    public static function minNotIntVal(mixed $input, Throwable|string|null $description = null): void;

    public static function minNotLeapDate(mixed $input, string $format, Throwable|string|null $description = null): void;

    public static function minNotLeapYear(mixed $input, Throwable|string|null $description = null): void;

    public static function minNotLessThan(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function minNotMaxAge(mixed $input, int $age, ?string $format = null, Throwable|string|null $description = null): void;

    public static function minNotMinAge(mixed $input, int $age, ?string $format = null, Throwable|string|null $description = null): void;

    public static function minNotMultiple(mixed $input, int $multipleOf, Throwable|string|null $description = null): void;

    public static function minNotNegative(mixed $input, Throwable|string|null $description = null): void;

    public static function minNotNumber(mixed $input, Throwable|string|null $description = null): void;

    public static function minNotNumericVal(mixed $input, Throwable|string|null $description = null): void;

    public static function minNotOdd(mixed $input, Throwable|string|null $description = null): void;

    public static function minNotPerfectSquare(mixed $input, Throwable|string|null $description = null): void;

    public static function minNotPositive(mixed $input, Throwable|string|null $description = null): void;

    public static function minNotPrimeNumber(mixed $input, Throwable|string|null $description = null): void;

    public static function minNotRoman(mixed $input, Throwable|string|null $description = null): void;

    public static function minNotStringType(mixed $input, Throwable|string|null $description = null): void;

    public static function minNotStringVal(mixed $input, Throwable|string|null $description = null): void;

    public static function minNotTime(mixed $input, string $format = 'H:i:s', Throwable|string|null $description = null): void;

    public static function minNumber(mixed $input, Throwable|string|null $description = null): void;

    public static function minNumericVal(mixed $input, Throwable|string|null $description = null): void;

    public static function minOdd(mixed $input, Throwable|string|null $description = null): void;

    public static function minPerfectSquare(mixed $input, Throwable|string|null $description = null): void;

    public static function minPositive(mixed $input, Throwable|string|null $description = null): void;

    public static function minPrimeNumber(mixed $input, Throwable|string|null $description = null): void;

    public static function minRoman(mixed $input, Throwable|string|null $description = null): void;

    public static function minStringType(mixed $input, Throwable|string|null $description = null): void;

    public static function minStringVal(mixed $input, Throwable|string|null $description = null): void;

    public static function minTime(mixed $input, string $format = 'H:i:s', Throwable|string|null $description = null): void;

    public static function multiple(mixed $input, int $multipleOf, Throwable|string|null $description = null): void;

    public static function negative(mixed $input, Throwable|string|null $description = null): void;

    public static function nfeAccessKey(mixed $input, Throwable|string|null $description = null): void;

    public static function nif(mixed $input, Throwable|string|null $description = null): void;

    public static function nip(mixed $input, Throwable|string|null $description = null): void;

    public static function no(mixed $input, mixed $useLocale = false, Throwable|string|null $description = null): void;

    public static function noWhitespace(mixed $input, Throwable|string|null $description = null): void;

    public static function notAlnum(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function notAlpha(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function notArrayType(mixed $input, Throwable|string|null $description = null): void;

    public static function notArrayVal(mixed $input, Throwable|string|null $description = null): void;

    public static function notBase(mixed $input, int $base, ?string $chars = null, Throwable|string|null $description = null): void;

    public static function notBase64(mixed $input, Throwable|string|null $description = null): void;

    public static function notBetween(mixed $input, mixed $minimum, mixed $maximum, Throwable|string|null $description = null): void;

    public static function notBic(mixed $input, string $countryCode, Throwable|string|null $description = null): void;

    public static function notBlank(mixed $input, Throwable|string|null $description = null): void;

    public static function notBoolType(mixed $input, Throwable|string|null $description = null): void;

    public static function notBoolVal(mixed $input, Throwable|string|null $description = null): void;

    public static function notBsn(mixed $input, Throwable|string|null $description = null): void;

    public static function notCallableType(mixed $input, Throwable|string|null $description = null): void;

    public static function notCallback(mixed $input, callable $callback, Throwable|string|null $description = null): void;

    public static function notCharset(mixed $input, ?string $charset = null, Throwable|string|null $description = null): void;

    public static function notCnh(mixed $input, Throwable|string|null $description = null): void;

    public static function notCnpj(mixed $input, Throwable|string|null $description = null): void;

    public static function notConsonant(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function notContains(mixed $input, mixed $containsValue, bool $identical = false, Throwable|string|null $description = null): void;

    /**
     * @param array<mixed> $needles
     */
    public static function notContainsAny(mixed $input, array $needles, bool $strictCompareArray = false, Throwable|string|null $description = null): void;

    public static function notControl(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function notCountable(mixed $input, Throwable|string|null $description = null): void;

    public static function notCountryCode(mixed $input, ?string $set = null, Throwable|string|null $description = null): void;

    public static function notCpf(mixed $input, Throwable|string|null $description = null): void;

    public static function notCreditCard(mixed $input, ?string $brand = null, Throwable|string|null $description = null): void;

    public static function notCurrencyCode(mixed $input, Throwable|string|null $description = null): void;

    public static function notDate(mixed $input, string $format = 'Y-m-d', Throwable|string|null $description = null): void;

    public static function notDateTime(mixed $input, ?string $format = null, Throwable|string|null $description = null): void;

    public static function notDigit(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function notDirectory(mixed $input, Throwable|string|null $description = null): void;

    public static function notDomain(mixed $input, bool $tldCheck = true, Throwable|string|null $description = null): void;

    public static function notEmail(mixed $input, Throwable|string|null $description = null): void;

    public static function notEmoji(mixed $input, Throwable|string|null $description = null): void;

    public static function notEmpty(mixed $input, Throwable|string|null $description = null): void;

    public static function notEndsWith(mixed $input, mixed $endValue, bool $identical = false, Throwable|string|null $description = null): void;

    public static function notEquals(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function notEquivalent(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function notEven(mixed $input, Throwable|string|null $description = null): void;

    public static function notExecutable(mixed $input, Throwable|string|null $description = null): void;

    public static function notExists(mixed $input, Throwable|string|null $description = null): void;

    public static function notExtension(mixed $input, string $extension, Throwable|string|null $description = null): void;

    public static function notFactor(mixed $input, int $dividend, Throwable|string|null $description = null): void;

    public static function notFalseVal(mixed $input, Throwable|string|null $description = null): void;

    public static function notFibonacci(mixed $input, Throwable|string|null $description = null): void;

    public static function notFile(mixed $input, Throwable|string|null $description = null): void;

    public static function notFilterVar(mixed $input, int $filter, mixed $options = null, Throwable|string|null $description = null): void;

    public static function notFinite(mixed $input, Throwable|string|null $description = null): void;

    public static function notFloatType(mixed $input, Throwable|string|null $description = null): void;

    public static function notFloatVal(mixed $input, Throwable|string|null $description = null): void;

    public static function notGraph(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function notGreaterThan(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function notHexRgbColor(mixed $input, Throwable|string|null $description = null): void;

    public static function notIban(mixed $input, Throwable|string|null $description = null): void;

    public static function notIdentical(mixed $input, mixed $value, Throwable|string|null $description = null): void;

    public static function notImage(mixed $input, ?finfo $fileInfo = null, Throwable|string|null $description = null): void;

    public static function notImei(mixed $input, Throwable|string|null $description = null): void;

    public static function notIn(mixed $input, mixed $haystack, bool $compareIdentical = false, Throwable|string|null $description = null): void;

    public static function notInfinite(mixed $input, Throwable|string|null $description = null): void;

    public static function notInstance(mixed $input, string $instanceName, Throwable|string|null $description = null): void;

    public static function notIntType(mixed $input, Throwable|string|null $description = null): void;

    public static function notIntVal(mixed $input, Throwable|string|null $description = null): void;

    public static function notIp(mixed $input, string $range = '*', ?int $options = null, Throwable|string|null $description = null): void;

    public static function notIsbn(mixed $input, Throwable|string|null $description = null): void;

    public static function notIterableType(mixed $input, Throwable|string|null $description = null): void;

    public static function notJson(mixed $input, Throwable|string|null $description = null): void;

    public static function notLanguageCode(mixed $input, ?string $set = null, Throwable|string|null $description = null): void;

    public static function notLeapDate(mixed $input, string $format, Throwable|string|null $description = null): void;

    public static function notLeapYear(mixed $input, Throwable|string|null $description = null): void;

    public static function notLessThan(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function notLowercase(mixed $input, Throwable|string|null $description = null): void;

    public static function notLuhn(mixed $input, Throwable|string|null $description = null): void;

    public static function notMacAddress(mixed $input, Throwable|string|null $description = null): void;

    public static function notMaxAge(mixed $input, int $age, ?string $format = null, Throwable|string|null $description = null): void;

    public static function notMimetype(mixed $input, string $mimetype, Throwable|string|null $description = null): void;

    public static function notMinAge(mixed $input, int $age, ?string $format = null, Throwable|string|null $description = null): void;

    public static function notMultiple(mixed $input, int $multipleOf, Throwable|string|null $description = null): void;

    public static function notNegative(mixed $input, Throwable|string|null $description = null): void;

    public static function notNfeAccessKey(mixed $input, Throwable|string|null $description = null): void;

    public static function notNif(mixed $input, Throwable|string|null $description = null): void;

    public static function notNip(mixed $input, Throwable|string|null $description = null): void;

    public static function notNo(mixed $input, mixed $useLocale = false, Throwable|string|null $description = null): void;

    public static function notNoWhitespace(mixed $input, Throwable|string|null $description = null): void;

    public static function notNullType(mixed $input, Throwable|string|null $description = null): void;

    public static function notNumber(mixed $input, Throwable|string|null $description = null): void;

    public static function notNumericVal(mixed $input, Throwable|string|null $description = null): void;

    public static function notObjectType(mixed $input, Throwable|string|null $description = null): void;

    public static function notOdd(mixed $input, Throwable|string|null $description = null): void;

    public static function notOptional(mixed $input, Throwable|string|null $description = null): void;

    public static function notPerfectSquare(mixed $input, Throwable|string|null $description = null): void;

    public static function notPesel(mixed $input, Throwable|string|null $description = null): void;

    public static function notPhone(mixed $input, Throwable|string|null $description = null): void;

    public static function notPhpLabel(mixed $input, Throwable|string|null $description = null): void;

    public static function notPis(mixed $input, Throwable|string|null $description = null): void;

    public static function notPolishIdCard(mixed $input, Throwable|string|null $description = null): void;

    public static function notPositive(mixed $input, Throwable|string|null $description = null): void;

    public static function notPostalCode(mixed $input, string $countryCode, Throwable|string|null $description = null): void;

    public static function notPrimeNumber(mixed $input, Throwable|string|null $description = null): void;

    public static function notPrintable(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function notPunct(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function notReadable(mixed $input, Throwable|string|null $description = null): void;

    public static function notRegex(mixed $input, string $regex, Throwable|string|null $description = null): void;

    public static function notResourceType(mixed $input, Throwable|string|null $description = null): void;

    public static function notRoman(mixed $input, Throwable|string|null $description = null): void;

    public static function notScalarVal(mixed $input, Throwable|string|null $description = null): void;

    public static function notSize(mixed $input, ?string $minSize = null, ?string $maxSize = null, Throwable|string|null $description = null): void;

    public static function notSlug(mixed $input, Throwable|string|null $description = null): void;

    public static function notSorted(mixed $input, string $direction, Throwable|string|null $description = null): void;

    public static function notSpace(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function notStartsWith(mixed $input, mixed $startValue, bool $identical = false, Throwable|string|null $description = null): void;

    public static function notStringType(mixed $input, Throwable|string|null $description = null): void;

    public static function notStringVal(mixed $input, Throwable|string|null $description = null): void;

    public static function notSubdivisionCode(mixed $input, string $countryCode, Throwable|string|null $description = null): void;

    /**
     * @param array<mixed> $superset
     */
    public static function notSubset(mixed $input, array $superset, Throwable|string|null $description = null): void;

    public static function notSymbolicLink(mixed $input, Throwable|string|null $description = null): void;

    public static function notTime(mixed $input, string $format = 'H:i:s', Throwable|string|null $description = null): void;

    public static function notTld(mixed $input, Throwable|string|null $description = null): void;

    public static function notTrueVal(mixed $input, Throwable|string|null $description = null): void;

    public static function notType(mixed $input, string $type, Throwable|string|null $description = null): void;

    public static function notUnique(mixed $input, Throwable|string|null $description = null): void;

    public static function notUploaded(mixed $input, Throwable|string|null $description = null): void;

    public static function notUppercase(mixed $input, Throwable|string|null $description = null): void;

    public static function notUrl(mixed $input, Throwable|string|null $description = null): void;

    public static function notUuid(mixed $input, ?int $version = null, Throwable|string|null $description = null): void;

    public static function notVersion(mixed $input, Throwable|string|null $description = null): void;

    public static function notVideoUrl(mixed $input, ?string $service = null, Throwable|string|null $description = null): void;

    public static function notVowel(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function notWritable(mixed $input, Throwable|string|null $description = null): void;

    public static function notXdigit(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function notYes(mixed $input, mixed $useLocale = false, Throwable|string|null $description = null): void;

    public static function nullOr(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function nullOrAlnum(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function nullOrAlpha(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function nullOrArrayType(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrArrayVal(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrBase(mixed $input, int $base, ?string $chars = null, Throwable|string|null $description = null): void;

    public static function nullOrBase64(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrBetween(mixed $input, mixed $minimum, mixed $maximum, Throwable|string|null $description = null): void;

    public static function nullOrBic(mixed $input, string $countryCode, Throwable|string|null $description = null): void;

    public static function nullOrBoolType(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrBoolVal(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrBsn(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrCallableType(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrCallback(mixed $input, callable $callback, Throwable|string|null $description = null): void;

    public static function nullOrCharset(mixed $input, ?string $charset = null, Throwable|string|null $description = null): void;

    public static function nullOrCnh(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrCnpj(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrConsonant(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function nullOrContains(mixed $input, mixed $containsValue, bool $identical = false, Throwable|string|null $description = null): void;

    /**
     * @param array<mixed> $needles
     */
    public static function nullOrContainsAny(mixed $input, array $needles, bool $strictCompareArray = false, Throwable|string|null $description = null): void;

    public static function nullOrControl(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function nullOrCountable(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrCountryCode(mixed $input, ?string $set = null, Throwable|string|null $description = null): void;

    public static function nullOrCpf(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrCreditCard(mixed $input, ?string $brand = null, Throwable|string|null $description = null): void;

    public static function nullOrCurrencyCode(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrDate(mixed $input, string $format = 'Y-m-d', Throwable|string|null $description = null): void;

    public static function nullOrDateTime(mixed $input, ?string $format = null, Throwable|string|null $description = null): void;

    public static function nullOrDigit(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function nullOrDirectory(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrDomain(mixed $input, bool $tldCheck = true, Throwable|string|null $description = null): void;

    public static function nullOrEmail(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrEndsWith(mixed $input, mixed $endValue, bool $identical = false, Throwable|string|null $description = null): void;

    public static function nullOrEquals(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function nullOrEquivalent(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function nullOrEven(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrExecutable(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrExists(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrExtension(mixed $input, string $extension, Throwable|string|null $description = null): void;

    public static function nullOrFactor(mixed $input, int $dividend, Throwable|string|null $description = null): void;

    public static function nullOrFalseVal(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrFibonacci(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrFile(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrFilterVar(mixed $input, int $filter, mixed $options = null, Throwable|string|null $description = null): void;

    public static function nullOrFinite(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrFloatType(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrFloatVal(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrGraph(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function nullOrGreaterThan(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function nullOrHexRgbColor(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrIban(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrIdentical(mixed $input, mixed $value, Throwable|string|null $description = null): void;

    public static function nullOrImage(mixed $input, ?finfo $fileInfo = null, Throwable|string|null $description = null): void;

    public static function nullOrImei(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrIn(mixed $input, mixed $haystack, bool $compareIdentical = false, Throwable|string|null $description = null): void;

    public static function nullOrInfinite(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrInstance(mixed $input, string $instanceName, Throwable|string|null $description = null): void;

    public static function nullOrIntType(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrIntVal(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrIp(mixed $input, string $range = '*', ?int $options = null, Throwable|string|null $description = null): void;

    public static function nullOrIsbn(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrIterableType(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrJson(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrLanguageCode(mixed $input, ?string $set = null, Throwable|string|null $description = null): void;

    public static function nullOrLeapDate(mixed $input, string $format, Throwable|string|null $description = null): void;

    public static function nullOrLeapYear(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrLessThan(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function nullOrLowercase(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrLuhn(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrMacAddress(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrMaxAge(mixed $input, int $age, ?string $format = null, Throwable|string|null $description = null): void;

    public static function nullOrMimetype(mixed $input, string $mimetype, Throwable|string|null $description = null): void;

    public static function nullOrMinAge(mixed $input, int $age, ?string $format = null, Throwable|string|null $description = null): void;

    public static function nullOrMultiple(mixed $input, int $multipleOf, Throwable|string|null $description = null): void;

    public static function nullOrNegative(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNfeAccessKey(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNif(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNip(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNo(mixed $input, mixed $useLocale = false, Throwable|string|null $description = null): void;

    public static function nullOrNoWhitespace(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNot(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function nullOrNotAlnum(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function nullOrNotAlpha(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function nullOrNotArrayType(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotArrayVal(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotBase(mixed $input, int $base, ?string $chars = null, Throwable|string|null $description = null): void;

    public static function nullOrNotBase64(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotBetween(mixed $input, mixed $minimum, mixed $maximum, Throwable|string|null $description = null): void;

    public static function nullOrNotBic(mixed $input, string $countryCode, Throwable|string|null $description = null): void;

    public static function nullOrNotBlank(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotBoolType(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotBoolVal(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotBsn(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotCallableType(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotCallback(mixed $input, callable $callback, Throwable|string|null $description = null): void;

    public static function nullOrNotCharset(mixed $input, ?string $charset = null, Throwable|string|null $description = null): void;

    public static function nullOrNotCnh(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotCnpj(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotConsonant(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function nullOrNotContains(mixed $input, mixed $containsValue, bool $identical = false, Throwable|string|null $description = null): void;

    /**
     * @param array<mixed> $needles
     */
    public static function nullOrNotContainsAny(mixed $input, array $needles, bool $strictCompareArray = false, Throwable|string|null $description = null): void;

    public static function nullOrNotControl(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function nullOrNotCountable(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotCountryCode(mixed $input, ?string $set = null, Throwable|string|null $description = null): void;

    public static function nullOrNotCpf(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotCreditCard(mixed $input, ?string $brand = null, Throwable|string|null $description = null): void;

    public static function nullOrNotCurrencyCode(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotDate(mixed $input, string $format = 'Y-m-d', Throwable|string|null $description = null): void;

    public static function nullOrNotDateTime(mixed $input, ?string $format = null, Throwable|string|null $description = null): void;

    public static function nullOrNotDigit(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function nullOrNotDirectory(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotDomain(mixed $input, bool $tldCheck = true, Throwable|string|null $description = null): void;

    public static function nullOrNotEmail(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotEmoji(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotEmpty(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotEndsWith(mixed $input, mixed $endValue, bool $identical = false, Throwable|string|null $description = null): void;

    public static function nullOrNotEquals(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function nullOrNotEquivalent(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function nullOrNotEven(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotExecutable(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotExists(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotExtension(mixed $input, string $extension, Throwable|string|null $description = null): void;

    public static function nullOrNotFactor(mixed $input, int $dividend, Throwable|string|null $description = null): void;

    public static function nullOrNotFalseVal(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotFibonacci(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotFile(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotFilterVar(mixed $input, int $filter, mixed $options = null, Throwable|string|null $description = null): void;

    public static function nullOrNotFinite(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotFloatType(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotFloatVal(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotGraph(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function nullOrNotGreaterThan(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function nullOrNotHexRgbColor(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotIban(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotIdentical(mixed $input, mixed $value, Throwable|string|null $description = null): void;

    public static function nullOrNotImage(mixed $input, ?finfo $fileInfo = null, Throwable|string|null $description = null): void;

    public static function nullOrNotImei(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotIn(mixed $input, mixed $haystack, bool $compareIdentical = false, Throwable|string|null $description = null): void;

    public static function nullOrNotInfinite(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotInstance(mixed $input, string $instanceName, Throwable|string|null $description = null): void;

    public static function nullOrNotIntType(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotIntVal(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotIp(mixed $input, string $range = '*', ?int $options = null, Throwable|string|null $description = null): void;

    public static function nullOrNotIsbn(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotIterableType(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotJson(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotLanguageCode(mixed $input, ?string $set = null, Throwable|string|null $description = null): void;

    public static function nullOrNotLeapDate(mixed $input, string $format, Throwable|string|null $description = null): void;

    public static function nullOrNotLeapYear(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotLessThan(mixed $input, mixed $compareTo, Throwable|string|null $description = null): void;

    public static function nullOrNotLowercase(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotLuhn(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotMacAddress(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotMaxAge(mixed $input, int $age, ?string $format = null, Throwable|string|null $description = null): void;

    public static function nullOrNotMimetype(mixed $input, string $mimetype, Throwable|string|null $description = null): void;

    public static function nullOrNotMinAge(mixed $input, int $age, ?string $format = null, Throwable|string|null $description = null): void;

    public static function nullOrNotMultiple(mixed $input, int $multipleOf, Throwable|string|null $description = null): void;

    public static function nullOrNotNegative(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotNfeAccessKey(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotNif(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotNip(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotNo(mixed $input, mixed $useLocale = false, Throwable|string|null $description = null): void;

    public static function nullOrNotNoWhitespace(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotNullType(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotNumber(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotNumericVal(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotObjectType(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotOdd(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotOptional(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotPerfectSquare(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotPesel(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotPhone(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotPhpLabel(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotPis(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotPolishIdCard(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotPositive(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotPostalCode(mixed $input, string $countryCode, Throwable|string|null $description = null): void;

    public static function nullOrNotPrimeNumber(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotPrintable(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function nullOrNotPunct(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function nullOrNotReadable(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotRegex(mixed $input, string $regex, Throwable|string|null $description = null): void;

    public static function nullOrNotResourceType(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotRoman(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotScalarVal(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotSize(mixed $input, ?string $minSize = null, ?string $maxSize = null, Throwable|string|null $description = null): void;

    public static function nullOrNotSlug(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotSorted(mixed $input, string $direction, Throwable|string|null $description = null): void;

    public static function nullOrNotSpace(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function nullOrNotStartsWith(mixed $input, mixed $startValue, bool $identical = false, Throwable|string|null $description = null): void;

    public static function nullOrNotStringType(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotStringVal(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotSubdivisionCode(mixed $input, string $countryCode, Throwable|string|null $description = null): void;

    /**
     * @param array<mixed> $superset
     */
    public static function nullOrNotSubset(mixed $input, array $superset, Throwable|string|null $description = null): void;

    public static function nullOrNotSymbolicLink(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotTime(mixed $input, string $format = 'H:i:s', Throwable|string|null $description = null): void;

    public static function nullOrNotTld(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotTrueVal(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotType(mixed $input, string $type, Throwable|string|null $description = null): void;

    public static function nullOrNotUnique(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotUploaded(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotUppercase(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotUrl(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotUuid(mixed $input, ?int $version = null, Throwable|string|null $description = null): void;

    public static function nullOrNotVersion(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotVideoUrl(mixed $input, ?string $service = null, Throwable|string|null $description = null): void;

    public static function nullOrNotVowel(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function nullOrNotWritable(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNotXdigit(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function nullOrNotYes(mixed $input, mixed $useLocale = false, Throwable|string|null $description = null): void;

    public static function nullOrNullType(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNumber(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrNumericVal(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrObjectType(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrOdd(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrPerfectSquare(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrPesel(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrPhone(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrPhpLabel(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrPis(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrPolishIdCard(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrPositive(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrPostalCode(mixed $input, string $countryCode, Throwable|string|null $description = null): void;

    public static function nullOrPrimeNumber(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrPrintable(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function nullOrPunct(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function nullOrReadable(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrRegex(mixed $input, string $regex, Throwable|string|null $description = null): void;

    public static function nullOrResourceType(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrRoman(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrScalarVal(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrSize(mixed $input, ?string $minSize = null, ?string $maxSize = null, Throwable|string|null $description = null): void;

    public static function nullOrSlug(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrSorted(mixed $input, string $direction, Throwable|string|null $description = null): void;

    public static function nullOrSpace(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function nullOrStartsWith(mixed $input, mixed $startValue, bool $identical = false, Throwable|string|null $description = null): void;

    public static function nullOrStringType(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrStringVal(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrSubdivisionCode(mixed $input, string $countryCode, Throwable|string|null $description = null): void;

    /**
     * @param array<mixed> $superset
     */
    public static function nullOrSubset(mixed $input, array $superset, Throwable|string|null $description = null): void;

    public static function nullOrSymbolicLink(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrTime(mixed $input, string $format = 'H:i:s', Throwable|string|null $description = null): void;

    public static function nullOrTld(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrTrueVal(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrType(mixed $input, string $type, Throwable|string|null $description = null): void;

    public static function nullOrUnique(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrUploaded(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrUppercase(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrUrl(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrUuid(mixed $input, ?int $version = null, Throwable|string|null $description = null): void;

    public static function nullOrVersion(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrVideoUrl(mixed $input, ?string $service = null, Throwable|string|null $description = null): void;

    public static function nullOrVowel(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function nullOrWritable(mixed $input, Throwable|string|null $description = null): void;

    public static function nullOrXdigit(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function nullOrYes(mixed $input, mixed $useLocale = false, Throwable|string|null $description = null): void;

    public static function nullType(mixed $input, Throwable|string|null $description = null): void;

    public static function number(mixed $input, Throwable|string|null $description = null): void;

    public static function numericVal(mixed $input, Throwable|string|null $description = null): void;

    public static function objectType(mixed $input, Throwable|string|null $description = null): void;

    public static function odd(mixed $input, Throwable|string|null $description = null): void;

    public static function perfectSquare(mixed $input, Throwable|string|null $description = null): void;

    public static function pesel(mixed $input, Throwable|string|null $description = null): void;

    public static function phone(mixed $input, Throwable|string|null $description = null): void;

    public static function phpLabel(mixed $input, Throwable|string|null $description = null): void;

    public static function pis(mixed $input, Throwable|string|null $description = null): void;

    public static function polishIdCard(mixed $input, Throwable|string|null $description = null): void;

    public static function positive(mixed $input, Throwable|string|null $description = null): void;

    public static function postalCode(mixed $input, string $countryCode, Throwable|string|null $description = null): void;

    public static function primeNumber(mixed $input, Throwable|string|null $description = null): void;

    public static function printable(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function punct(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function readable(mixed $input, Throwable|string|null $description = null): void;

    public static function regex(mixed $input, string $regex, Throwable|string|null $description = null): void;

    public static function resourceType(mixed $input, Throwable|string|null $description = null): void;

    public static function roman(mixed $input, Throwable|string|null $description = null): void;

    public static function scalarVal(mixed $input, Throwable|string|null $description = null): void;

    public static function size(mixed $input, ?string $minSize = null, ?string $maxSize = null, Throwable|string|null $description = null): void;

    public static function slug(mixed $input, Throwable|string|null $description = null): void;

    public static function sorted(mixed $input, string $direction, Throwable|string|null $description = null): void;

    public static function space(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function startsWith(mixed $input, mixed $startValue, bool $identical = false, Throwable|string|null $description = null): void;

    public static function stringType(mixed $input, Throwable|string|null $description = null): void;

    public static function stringVal(mixed $input, Throwable|string|null $description = null): void;

    public static function subdivisionCode(mixed $input, string $countryCode, Throwable|string|null $description = null): void;

    /**
     * @param array<mixed> $superset
     */
    public static function subset(mixed $input, array $superset, Throwable|string|null $description = null): void;

    public static function symbolicLink(mixed $input, Throwable|string|null $description = null): void;

    public static function time(mixed $input, string $format = 'H:i:s', Throwable|string|null $description = null): void;

    public static function tld(mixed $input, Throwable|string|null $description = null): void;

    public static function trueVal(mixed $input, Throwable|string|null $description = null): void;

    public static function type(mixed $input, string $type, Throwable|string|null $description = null): void;

    public static function unique(mixed $input, Throwable|string|null $description = null): void;

    public static function uploaded(mixed $input, Throwable|string|null $description = null): void;

    public static function uppercase(mixed $input, Throwable|string|null $description = null): void;

    public static function url(mixed $input, Throwable|string|null $description = null): void;

    public static function uuid(mixed $input, ?int $version = null, Throwable|string|null $description = null): void;

    public static function version(mixed $input, Throwable|string|null $description = null): void;

    public static function videoUrl(mixed $input, ?string $service = null, Throwable|string|null $description = null): void;

    public static function vowel(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function writable(mixed $input, Throwable|string|null $description = null): void;

    public static function xdigit(mixed $input, ?string $additionalChars = null, Throwable|string|null $description = null): void;

    public static function yes(mixed $input, mixed $useLocale = false, Throwable|string|null $description = null): void;
}
