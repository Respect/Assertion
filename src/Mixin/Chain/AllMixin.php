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
interface AllMixin
{
    public function all(mixed $compareTo, null|string|Throwable $description = null): static;

    public function allAlnum(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function allAlpha(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function allArrayType(null|string|Throwable $description = null): static;

    public function allArrayVal(null|string|Throwable $description = null): static;

    public function allBase(int $base, ?string $chars = null, null|string|Throwable $description = null): static;

    public function allBase64(null|string|Throwable $description = null): static;

    public function allBetween(mixed $minimum, mixed $maximum, null|string|Throwable $description = null): static;

    public function allBic(string $countryCode, null|string|Throwable $description = null): static;

    public function allBoolType(null|string|Throwable $description = null): static;

    public function allBoolVal(null|string|Throwable $description = null): static;

    public function allBsn(null|string|Throwable $description = null): static;

    public function allCallableType(null|string|Throwable $description = null): static;

    public function allCallback(callable $callback, null|string|Throwable $description = null): static;

    public function allCharset(string $charset = '', null|string|Throwable $description = null): static;

    public function allCnh(null|string|Throwable $description = null): static;

    public function allCnpj(null|string|Throwable $description = null): static;

    public function allControl(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function allConsonant(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function allContains(mixed $containsValue, bool $identical = false, null|string|Throwable $description = null): static;

    /**
    * @param mixed[] $needles
    */
    public function allContainsAny(array $needles, bool $strictCompareArray = false, null|string|Throwable $description = null): static;

    public function allCountable(null|string|Throwable $description = null): static;

    public function allCountryCode(?string $set = null, null|string|Throwable $description = null): static;

    public function allCurrencyCode(null|string|Throwable $description = null): static;

    public function allCpf(null|string|Throwable $description = null): static;

    public function allCreditCard(?string $brand = null, null|string|Throwable $description = null): static;

    public function allDate(string $format = 'Y-m-d', null|string|Throwable $description = null): static;

    public function allDateTime(?string $format = null, null|string|Throwable $description = null): static;

    public function allDecimal(int $decimals, null|string|Throwable $description = null): static;

    public function allDigit(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function allDirectory(null|string|Throwable $description = null): static;

    public function allDomain(bool $tldCheck = true, null|string|Throwable $description = null): static;

    public function allEmail(null|string|Throwable $description = null): static;

    public function allEndsWith(mixed $endValue, bool $identical = false, null|string|Throwable $description = null): static;

    public function allEquals(mixed $compareTo, null|string|Throwable $description = null): static;

    public function allEquivalent(mixed $compareTo, null|string|Throwable $description = null): static;

    public function allEven(null|string|Throwable $description = null): static;

    public function allExecutable(null|string|Throwable $description = null): static;

    public function allExists(null|string|Throwable $description = null): static;

    public function allExtension(string $extension, null|string|Throwable $description = null): static;

    public function allFactor(int $dividend, null|string|Throwable $description = null): static;

    public function allFalseVal(null|string|Throwable $description = null): static;

    public function allFibonacci(null|string|Throwable $description = null): static;

    public function allFile(null|string|Throwable $description = null): static;

    /**
    * @param mixed[]|int $options
    */
    public function allFilterVar(int $filter, array|int|null $options = null, null|string|Throwable $description = null): static;

    public function allFinite(null|string|Throwable $description = null): static;

    public function allFloatVal(null|string|Throwable $description = null): static;

    public function allFloatType(null|string|Throwable $description = null): static;

    public function allGraph(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function allGreaterThan(mixed $compareTo, null|string|Throwable $description = null): static;

    public function allHexRgbColor(null|string|Throwable $description = null): static;

    public function allIban(null|string|Throwable $description = null): static;

    public function allIdentical(mixed $compareTo, null|string|Throwable $description = null): static;

    public function allImage(?finfo $fileInfo = null, null|string|Throwable $description = null): static;

    public function allImei(null|string|Throwable $description = null): static;

    public function allIn(mixed $haystack, bool $compareIdentical = false, null|string|Throwable $description = null): static;

    public function allInfinite(null|string|Throwable $description = null): static;

    public function allInstance(string $instanceName, null|string|Throwable $description = null): static;

    public function allIntVal(null|string|Throwable $description = null): static;

    public function allIntType(null|string|Throwable $description = null): static;

    public function allIp(string $range = '*', ?int $options = null, null|string|Throwable $description = null): static;

    public function allIsbn(null|string|Throwable $description = null): static;

    public function allIterableType(null|string|Throwable $description = null): static;

    public function allJson(null|string|Throwable $description = null): static;

    public function allLanguageCode(?string $set = null, null|string|Throwable $description = null): static;

    public function allLeapDate(string $format, null|string|Throwable $description = null): static;

    public function allLeapYear(null|string|Throwable $description = null): static;

    public function allLowercase(null|string|Throwable $description = null): static;

    public function allLessThan(mixed $compareTo, null|string|Throwable $description = null): static;

    public function allLuhn(null|string|Throwable $description = null): static;

    public function allMacAddress(null|string|Throwable $description = null): static;

    public function allMaxAge(int $age, ?string $format = null, null|string|Throwable $description = null): static;

    public function allMimetype(string $mimetype, null|string|Throwable $description = null): static;

    public function allMinAge(int $age, ?string $format = null, null|string|Throwable $description = null): static;

    public function allMultiple(int $multipleOf, null|string|Throwable $description = null): static;

    public function allNegative(null|string|Throwable $description = null): static;

    public function allNfeAccessKey(null|string|Throwable $description = null): static;

    public function allNif(null|string|Throwable $description = null): static;

    public function allNip(null|string|Throwable $description = null): static;

    public function allNo(bool $useLocale = false, null|string|Throwable $description = null): static;

    public function allNotBlank(null|string|Throwable $description = null): static;

    public function allNotEmoji(null|string|Throwable $description = null): static;

    public function allNotEmpty(null|string|Throwable $description = null): static;

    public function allNotOptional(null|string|Throwable $description = null): static;

    public function allNoWhitespace(null|string|Throwable $description = null): static;

    public function allNullType(null|string|Throwable $description = null): static;

    public function allNumber(null|string|Throwable $description = null): static;

    public function allNumericVal(null|string|Throwable $description = null): static;

    public function allObjectType(null|string|Throwable $description = null): static;

    public function allOdd(null|string|Throwable $description = null): static;

    public function allPerfectSquare(null|string|Throwable $description = null): static;

    public function allPesel(null|string|Throwable $description = null): static;

    public function allPhone(null|string|Throwable $description = null): static;

    public function allPhpLabel(null|string|Throwable $description = null): static;

    public function allPis(null|string|Throwable $description = null): static;

    public function allPolishIdCard(null|string|Throwable $description = null): static;

    public function allPositive(null|string|Throwable $description = null): static;

    public function allPostalCode(string $countryCode, null|string|Throwable $description = null): static;

    public function allPrimeNumber(null|string|Throwable $description = null): static;

    public function allPrintable(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function allPunct(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function allReadable(null|string|Throwable $description = null): static;

    public function allRegex(string $regex, null|string|Throwable $description = null): static;

    public function allResourceType(null|string|Throwable $description = null): static;

    public function allRoman(null|string|Throwable $description = null): static;

    public function allScalarVal(null|string|Throwable $description = null): static;

    public function allSize(?string $minSize = null, ?string $maxSize = null, null|string|Throwable $description = null): static;

    public function allSlug(null|string|Throwable $description = null): static;

    public function allSorted(string $direction, null|string|Throwable $description = null): static;

    public function allSpace(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function allStartsWith(mixed $startValue, bool $identical = false, null|string|Throwable $description = null): static;

    public function allStringType(null|string|Throwable $description = null): static;

    public function allStringVal(null|string|Throwable $description = null): static;

    public function allSubdivisionCode(string $countryCode, null|string|Throwable $description = null): static;

    /**
    * @param mixed[] $superset
    */
    public function allSubset(array $superset, null|string|Throwable $description = null): static;

    public function allSymbolicLink(null|string|Throwable $description = null): static;

    public function allTime(string $format = 'H:i:s', null|string|Throwable $description = null): static;

    public function allTld(null|string|Throwable $description = null): static;

    public function allTrueVal(null|string|Throwable $description = null): static;

    public function allType(string $type, null|string|Throwable $description = null): static;

    public function allUnique(null|string|Throwable $description = null): static;

    public function allUploaded(null|string|Throwable $description = null): static;

    public function allUppercase(null|string|Throwable $description = null): static;

    public function allUrl(null|string|Throwable $description = null): static;

    public function allUuid(?int $version = null, null|string|Throwable $description = null): static;

    public function allVersion(null|string|Throwable $description = null): static;

    public function allVideoUrl(?string $service = null, null|string|Throwable $description = null): static;

    public function allVowel(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function allWritable(null|string|Throwable $description = null): static;

    public function allXdigit(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function allYes(bool $useLocale = false, null|string|Throwable $description = null): static;

    public function allNot(mixed $compareTo, null|string|Throwable $description = null): static;

    public function allNotAlnum(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function allNotAlpha(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function allNotArrayType(null|string|Throwable $description = null): static;

    public function allNotArrayVal(null|string|Throwable $description = null): static;

    public function allNotBase(int $base, ?string $chars = null, null|string|Throwable $description = null): static;

    public function allNotBase64(null|string|Throwable $description = null): static;

    public function allNotBetween(mixed $minimum, mixed $maximum, null|string|Throwable $description = null): static;

    public function allNotBic(string $countryCode, null|string|Throwable $description = null): static;

    public function allNotBoolType(null|string|Throwable $description = null): static;

    public function allNotBoolVal(null|string|Throwable $description = null): static;

    public function allNotBsn(null|string|Throwable $description = null): static;

    public function allNotCallableType(null|string|Throwable $description = null): static;

    public function allNotCallback(callable $callback, null|string|Throwable $description = null): static;

    public function allNotCharset(string $charset = '', null|string|Throwable $description = null): static;

    public function allNotCnh(null|string|Throwable $description = null): static;

    public function allNotCnpj(null|string|Throwable $description = null): static;

    public function allNotControl(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function allNotConsonant(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function allNotContains(mixed $containsValue, bool $identical = false, null|string|Throwable $description = null): static;

    /**
    * @param mixed[] $needles
    */
    public function allNotContainsAny(array $needles, bool $strictCompareArray = false, null|string|Throwable $description = null): static;

    public function allNotCountable(null|string|Throwable $description = null): static;

    public function allNotCountryCode(?string $set = null, null|string|Throwable $description = null): static;

    public function allNotCurrencyCode(null|string|Throwable $description = null): static;

    public function allNotCpf(null|string|Throwable $description = null): static;

    public function allNotCreditCard(?string $brand = null, null|string|Throwable $description = null): static;

    public function allNotDate(string $format = 'Y-m-d', null|string|Throwable $description = null): static;

    public function allNotDateTime(?string $format = null, null|string|Throwable $description = null): static;

    public function allNotDecimal(int $decimals, null|string|Throwable $description = null): static;

    public function allNotDigit(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function allNotDirectory(null|string|Throwable $description = null): static;

    public function allNotDomain(bool $tldCheck = true, null|string|Throwable $description = null): static;

    public function allNotEmail(null|string|Throwable $description = null): static;

    public function allNotEndsWith(mixed $endValue, bool $identical = false, null|string|Throwable $description = null): static;

    public function allNotEquals(mixed $compareTo, null|string|Throwable $description = null): static;

    public function allNotEquivalent(mixed $compareTo, null|string|Throwable $description = null): static;

    public function allNotEven(null|string|Throwable $description = null): static;

    public function allNotExecutable(null|string|Throwable $description = null): static;

    public function allNotExists(null|string|Throwable $description = null): static;

    public function allNotExtension(string $extension, null|string|Throwable $description = null): static;

    public function allNotFactor(int $dividend, null|string|Throwable $description = null): static;

    public function allNotFalseVal(null|string|Throwable $description = null): static;

    public function allNotFibonacci(null|string|Throwable $description = null): static;

    public function allNotFile(null|string|Throwable $description = null): static;

    /**
    * @param mixed[]|int $options
    */
    public function allNotFilterVar(int $filter, array|int|null $options = null, null|string|Throwable $description = null): static;

    public function allNotFinite(null|string|Throwable $description = null): static;

    public function allNotFloatVal(null|string|Throwable $description = null): static;

    public function allNotFloatType(null|string|Throwable $description = null): static;

    public function allNotGraph(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function allNotGreaterThan(mixed $compareTo, null|string|Throwable $description = null): static;

    public function allNotHexRgbColor(null|string|Throwable $description = null): static;

    public function allNotIban(null|string|Throwable $description = null): static;

    public function allNotIdentical(mixed $compareTo, null|string|Throwable $description = null): static;

    public function allNotImage(?finfo $fileInfo = null, null|string|Throwable $description = null): static;

    public function allNotImei(null|string|Throwable $description = null): static;

    public function allNotIn(mixed $haystack, bool $compareIdentical = false, null|string|Throwable $description = null): static;

    public function allNotInfinite(null|string|Throwable $description = null): static;

    public function allNotInstance(string $instanceName, null|string|Throwable $description = null): static;

    public function allNotIntVal(null|string|Throwable $description = null): static;

    public function allNotIntType(null|string|Throwable $description = null): static;

    public function allNotIp(string $range = '*', ?int $options = null, null|string|Throwable $description = null): static;

    public function allNotIsbn(null|string|Throwable $description = null): static;

    public function allNotIterableType(null|string|Throwable $description = null): static;

    public function allNotJson(null|string|Throwable $description = null): static;

    public function allNotLanguageCode(?string $set = null, null|string|Throwable $description = null): static;

    public function allNotLeapDate(string $format, null|string|Throwable $description = null): static;

    public function allNotLeapYear(null|string|Throwable $description = null): static;

    public function allNotLowercase(null|string|Throwable $description = null): static;

    public function allNotLessThan(mixed $compareTo, null|string|Throwable $description = null): static;

    public function allNotLuhn(null|string|Throwable $description = null): static;

    public function allNotMacAddress(null|string|Throwable $description = null): static;

    public function allNotMaxAge(int $age, ?string $format = null, null|string|Throwable $description = null): static;

    public function allNotMimetype(string $mimetype, null|string|Throwable $description = null): static;

    public function allNotMinAge(int $age, ?string $format = null, null|string|Throwable $description = null): static;

    public function allNotMultiple(int $multipleOf, null|string|Throwable $description = null): static;

    public function allNotNegative(null|string|Throwable $description = null): static;

    public function allNotNfeAccessKey(null|string|Throwable $description = null): static;

    public function allNotNif(null|string|Throwable $description = null): static;

    public function allNotNip(null|string|Throwable $description = null): static;

    public function allNotNo(bool $useLocale = false, null|string|Throwable $description = null): static;

    public function allNotNoWhitespace(null|string|Throwable $description = null): static;

    public function allNotNullType(null|string|Throwable $description = null): static;

    public function allNotNumber(null|string|Throwable $description = null): static;

    public function allNotNumericVal(null|string|Throwable $description = null): static;

    public function allNotObjectType(null|string|Throwable $description = null): static;

    public function allNotOdd(null|string|Throwable $description = null): static;

    public function allNotPerfectSquare(null|string|Throwable $description = null): static;

    public function allNotPesel(null|string|Throwable $description = null): static;

    public function allNotPhone(null|string|Throwable $description = null): static;

    public function allNotPhpLabel(null|string|Throwable $description = null): static;

    public function allNotPis(null|string|Throwable $description = null): static;

    public function allNotPolishIdCard(null|string|Throwable $description = null): static;

    public function allNotPositive(null|string|Throwable $description = null): static;

    public function allNotPostalCode(string $countryCode, null|string|Throwable $description = null): static;

    public function allNotPrimeNumber(null|string|Throwable $description = null): static;

    public function allNotPrintable(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function allNotPunct(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function allNotReadable(null|string|Throwable $description = null): static;

    public function allNotRegex(string $regex, null|string|Throwable $description = null): static;

    public function allNotResourceType(null|string|Throwable $description = null): static;

    public function allNotRoman(null|string|Throwable $description = null): static;

    public function allNotScalarVal(null|string|Throwable $description = null): static;

    public function allNotSize(?string $minSize = null, ?string $maxSize = null, null|string|Throwable $description = null): static;

    public function allNotSlug(null|string|Throwable $description = null): static;

    public function allNotSorted(string $direction, null|string|Throwable $description = null): static;

    public function allNotSpace(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function allNotStartsWith(mixed $startValue, bool $identical = false, null|string|Throwable $description = null): static;

    public function allNotStringType(null|string|Throwable $description = null): static;

    public function allNotStringVal(null|string|Throwable $description = null): static;

    public function allNotSubdivisionCode(string $countryCode, null|string|Throwable $description = null): static;

    /**
    * @param mixed[] $superset
    */
    public function allNotSubset(array $superset, null|string|Throwable $description = null): static;

    public function allNotSymbolicLink(null|string|Throwable $description = null): static;

    public function allNotTime(string $format = 'H:i:s', null|string|Throwable $description = null): static;

    public function allNotTld(null|string|Throwable $description = null): static;

    public function allNotTrueVal(null|string|Throwable $description = null): static;

    public function allNotType(string $type, null|string|Throwable $description = null): static;

    public function allNotUnique(null|string|Throwable $description = null): static;

    public function allNotUploaded(null|string|Throwable $description = null): static;

    public function allNotUppercase(null|string|Throwable $description = null): static;

    public function allNotUrl(null|string|Throwable $description = null): static;

    public function allNotUuid(?int $version = null, null|string|Throwable $description = null): static;

    public function allNotVersion(null|string|Throwable $description = null): static;

    public function allNotVideoUrl(?string $service = null, null|string|Throwable $description = null): static;

    public function allNotVowel(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function allNotWritable(null|string|Throwable $description = null): static;

    public function allNotXdigit(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function allNotYes(bool $useLocale = false, null|string|Throwable $description = null): static;
}
