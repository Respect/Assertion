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
interface NullOrMixin
{
    public function nullOr(mixed $compareTo, null|string|Throwable $description = null): static;

    public function nullOrAlnum(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function nullOrAlpha(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function nullOrArrayType(null|string|Throwable $description = null): static;

    public function nullOrArrayVal(null|string|Throwable $description = null): static;

    public function nullOrBase(int $base, ?string $chars = null, null|string|Throwable $description = null): static;

    public function nullOrBase64(null|string|Throwable $description = null): static;

    public function nullOrBetween(mixed $minimum, mixed $maximum, null|string|Throwable $description = null): static;

    public function nullOrBic(string $countryCode, null|string|Throwable $description = null): static;

    public function nullOrBoolType(null|string|Throwable $description = null): static;

    public function nullOrBoolVal(null|string|Throwable $description = null): static;

    public function nullOrBsn(null|string|Throwable $description = null): static;

    public function nullOrCallableType(null|string|Throwable $description = null): static;

    public function nullOrCallback(callable $callback, null|string|Throwable $description = null): static;

    public function nullOrCharset(string $charset = '', null|string|Throwable $description = null): static;

    public function nullOrCnh(null|string|Throwable $description = null): static;

    public function nullOrCnpj(null|string|Throwable $description = null): static;

    public function nullOrControl(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function nullOrConsonant(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function nullOrContains(mixed $containsValue, bool $identical = false, null|string|Throwable $description = null): static;

    /**
    * @param mixed[] $needles
    */
    public function nullOrContainsAny(array $needles, bool $strictCompareArray = false, null|string|Throwable $description = null): static;

    public function nullOrCountable(null|string|Throwable $description = null): static;

    public function nullOrCountryCode(?string $set = null, null|string|Throwable $description = null): static;

    public function nullOrCurrencyCode(null|string|Throwable $description = null): static;

    public function nullOrCpf(null|string|Throwable $description = null): static;

    public function nullOrCreditCard(?string $brand = null, null|string|Throwable $description = null): static;

    public function nullOrDate(string $format = 'Y-m-d', null|string|Throwable $description = null): static;

    public function nullOrDateTime(?string $format = null, null|string|Throwable $description = null): static;

    public function nullOrDecimal(int $decimals, null|string|Throwable $description = null): static;

    public function nullOrDigit(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function nullOrDirectory(null|string|Throwable $description = null): static;

    public function nullOrDomain(bool $tldCheck = true, null|string|Throwable $description = null): static;

    public function nullOrEmail(null|string|Throwable $description = null): static;

    public function nullOrEndsWith(mixed $endValue, bool $identical = false, null|string|Throwable $description = null): static;

    public function nullOrEquals(mixed $compareTo, null|string|Throwable $description = null): static;

    public function nullOrEquivalent(mixed $compareTo, null|string|Throwable $description = null): static;

    public function nullOrEven(null|string|Throwable $description = null): static;

    public function nullOrExecutable(null|string|Throwable $description = null): static;

    public function nullOrExists(null|string|Throwable $description = null): static;

    public function nullOrExtension(string $extension, null|string|Throwable $description = null): static;

    public function nullOrFactor(int $dividend, null|string|Throwable $description = null): static;

    public function nullOrFalseVal(null|string|Throwable $description = null): static;

    public function nullOrFibonacci(null|string|Throwable $description = null): static;

    public function nullOrFile(null|string|Throwable $description = null): static;

    /**
    * @param mixed[]|int $options
    */
    public function nullOrFilterVar(int $filter, array|int|null $options = null, null|string|Throwable $description = null): static;

    public function nullOrFinite(null|string|Throwable $description = null): static;

    public function nullOrFloatVal(null|string|Throwable $description = null): static;

    public function nullOrFloatType(null|string|Throwable $description = null): static;

    public function nullOrGraph(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function nullOrGreaterThan(mixed $compareTo, null|string|Throwable $description = null): static;

    public function nullOrHexRgbColor(null|string|Throwable $description = null): static;

    public function nullOrIban(null|string|Throwable $description = null): static;

    public function nullOrIdentical(mixed $compareTo, null|string|Throwable $description = null): static;

    public function nullOrImage(?finfo $fileInfo = null, null|string|Throwable $description = null): static;

    public function nullOrImei(null|string|Throwable $description = null): static;

    public function nullOrIn(mixed $haystack, bool $compareIdentical = false, null|string|Throwable $description = null): static;

    public function nullOrInfinite(null|string|Throwable $description = null): static;

    public function nullOrInstance(string $instanceName, null|string|Throwable $description = null): static;

    public function nullOrIntVal(null|string|Throwable $description = null): static;

    public function nullOrIntType(null|string|Throwable $description = null): static;

    public function nullOrIp(string $range = '*', ?int $options = null, null|string|Throwable $description = null): static;

    public function nullOrIsbn(null|string|Throwable $description = null): static;

    public function nullOrIterableType(null|string|Throwable $description = null): static;

    public function nullOrJson(null|string|Throwable $description = null): static;

    public function nullOrLanguageCode(?string $set = null, null|string|Throwable $description = null): static;

    public function nullOrLeapDate(string $format, null|string|Throwable $description = null): static;

    public function nullOrLeapYear(null|string|Throwable $description = null): static;

    public function nullOrLowercase(null|string|Throwable $description = null): static;

    public function nullOrLessThan(mixed $compareTo, null|string|Throwable $description = null): static;

    public function nullOrLuhn(null|string|Throwable $description = null): static;

    public function nullOrMacAddress(null|string|Throwable $description = null): static;

    public function nullOrMaxAge(int $age, ?string $format = null, null|string|Throwable $description = null): static;

    public function nullOrMimetype(string $mimetype, null|string|Throwable $description = null): static;

    public function nullOrMinAge(int $age, ?string $format = null, null|string|Throwable $description = null): static;

    public function nullOrMultiple(int $multipleOf, null|string|Throwable $description = null): static;

    public function nullOrNegative(null|string|Throwable $description = null): static;

    public function nullOrNfeAccessKey(null|string|Throwable $description = null): static;

    public function nullOrNif(null|string|Throwable $description = null): static;

    public function nullOrNip(null|string|Throwable $description = null): static;

    public function nullOrNo(bool $useLocale = false, null|string|Throwable $description = null): static;

    public function nullOrNotBlank(null|string|Throwable $description = null): static;

    public function nullOrNotEmoji(null|string|Throwable $description = null): static;

    public function nullOrNotEmpty(null|string|Throwable $description = null): static;

    public function nullOrNotOptional(null|string|Throwable $description = null): static;

    public function nullOrNoWhitespace(null|string|Throwable $description = null): static;

    public function nullOrNullType(null|string|Throwable $description = null): static;

    public function nullOrNumber(null|string|Throwable $description = null): static;

    public function nullOrNumericVal(null|string|Throwable $description = null): static;

    public function nullOrObjectType(null|string|Throwable $description = null): static;

    public function nullOrOdd(null|string|Throwable $description = null): static;

    public function nullOrPerfectSquare(null|string|Throwable $description = null): static;

    public function nullOrPesel(null|string|Throwable $description = null): static;

    public function nullOrPhone(null|string|Throwable $description = null): static;

    public function nullOrPhpLabel(null|string|Throwable $description = null): static;

    public function nullOrPis(null|string|Throwable $description = null): static;

    public function nullOrPolishIdCard(null|string|Throwable $description = null): static;

    public function nullOrPositive(null|string|Throwable $description = null): static;

    public function nullOrPostalCode(string $countryCode, null|string|Throwable $description = null): static;

    public function nullOrPrimeNumber(null|string|Throwable $description = null): static;

    public function nullOrPrintable(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function nullOrPunct(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function nullOrReadable(null|string|Throwable $description = null): static;

    public function nullOrRegex(string $regex, null|string|Throwable $description = null): static;

    public function nullOrResourceType(null|string|Throwable $description = null): static;

    public function nullOrRoman(null|string|Throwable $description = null): static;

    public function nullOrScalarVal(null|string|Throwable $description = null): static;

    public function nullOrSize(?string $minSize = null, ?string $maxSize = null, null|string|Throwable $description = null): static;

    public function nullOrSlug(null|string|Throwable $description = null): static;

    public function nullOrSorted(string $direction, null|string|Throwable $description = null): static;

    public function nullOrSpace(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function nullOrStartsWith(mixed $startValue, bool $identical = false, null|string|Throwable $description = null): static;

    public function nullOrStringType(null|string|Throwable $description = null): static;

    public function nullOrStringVal(null|string|Throwable $description = null): static;

    public function nullOrSubdivisionCode(string $countryCode, null|string|Throwable $description = null): static;

    /**
    * @param mixed[] $superset
    */
    public function nullOrSubset(array $superset, null|string|Throwable $description = null): static;

    public function nullOrSymbolicLink(null|string|Throwable $description = null): static;

    public function nullOrTime(string $format = 'H:i:s', null|string|Throwable $description = null): static;

    public function nullOrTld(null|string|Throwable $description = null): static;

    public function nullOrTrueVal(null|string|Throwable $description = null): static;

    public function nullOrType(string $type, null|string|Throwable $description = null): static;

    public function nullOrUnique(null|string|Throwable $description = null): static;

    public function nullOrUploaded(null|string|Throwable $description = null): static;

    public function nullOrUppercase(null|string|Throwable $description = null): static;

    public function nullOrUrl(null|string|Throwable $description = null): static;

    public function nullOrUuid(?int $version = null, null|string|Throwable $description = null): static;

    public function nullOrVersion(null|string|Throwable $description = null): static;

    public function nullOrVideoUrl(?string $service = null, null|string|Throwable $description = null): static;

    public function nullOrVowel(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function nullOrWritable(null|string|Throwable $description = null): static;

    public function nullOrXdigit(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function nullOrYes(bool $useLocale = false, null|string|Throwable $description = null): static;

    public function nullOrNot(mixed $compareTo, null|string|Throwable $description = null): static;

    public function nullOrNotAlnum(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function nullOrNotAlpha(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function nullOrNotArrayType(null|string|Throwable $description = null): static;

    public function nullOrNotArrayVal(null|string|Throwable $description = null): static;

    public function nullOrNotBase(int $base, ?string $chars = null, null|string|Throwable $description = null): static;

    public function nullOrNotBase64(null|string|Throwable $description = null): static;

    public function nullOrNotBetween(mixed $minimum, mixed $maximum, null|string|Throwable $description = null): static;

    public function nullOrNotBic(string $countryCode, null|string|Throwable $description = null): static;

    public function nullOrNotBoolType(null|string|Throwable $description = null): static;

    public function nullOrNotBoolVal(null|string|Throwable $description = null): static;

    public function nullOrNotBsn(null|string|Throwable $description = null): static;

    public function nullOrNotCallableType(null|string|Throwable $description = null): static;

    public function nullOrNotCallback(callable $callback, null|string|Throwable $description = null): static;

    public function nullOrNotCharset(string $charset = '', null|string|Throwable $description = null): static;

    public function nullOrNotCnh(null|string|Throwable $description = null): static;

    public function nullOrNotCnpj(null|string|Throwable $description = null): static;

    public function nullOrNotControl(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function nullOrNotConsonant(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function nullOrNotContains(mixed $containsValue, bool $identical = false, null|string|Throwable $description = null): static;

    /**
    * @param mixed[] $needles
    */
    public function nullOrNotContainsAny(array $needles, bool $strictCompareArray = false, null|string|Throwable $description = null): static;

    public function nullOrNotCountable(null|string|Throwable $description = null): static;

    public function nullOrNotCountryCode(?string $set = null, null|string|Throwable $description = null): static;

    public function nullOrNotCurrencyCode(null|string|Throwable $description = null): static;

    public function nullOrNotCpf(null|string|Throwable $description = null): static;

    public function nullOrNotCreditCard(?string $brand = null, null|string|Throwable $description = null): static;

    public function nullOrNotDate(string $format = 'Y-m-d', null|string|Throwable $description = null): static;

    public function nullOrNotDateTime(?string $format = null, null|string|Throwable $description = null): static;

    public function nullOrNotDecimal(int $decimals, null|string|Throwable $description = null): static;

    public function nullOrNotDigit(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function nullOrNotDirectory(null|string|Throwable $description = null): static;

    public function nullOrNotDomain(bool $tldCheck = true, null|string|Throwable $description = null): static;

    public function nullOrNotEmail(null|string|Throwable $description = null): static;

    public function nullOrNotEndsWith(mixed $endValue, bool $identical = false, null|string|Throwable $description = null): static;

    public function nullOrNotEquals(mixed $compareTo, null|string|Throwable $description = null): static;

    public function nullOrNotEquivalent(mixed $compareTo, null|string|Throwable $description = null): static;

    public function nullOrNotEven(null|string|Throwable $description = null): static;

    public function nullOrNotExecutable(null|string|Throwable $description = null): static;

    public function nullOrNotExists(null|string|Throwable $description = null): static;

    public function nullOrNotExtension(string $extension, null|string|Throwable $description = null): static;

    public function nullOrNotFactor(int $dividend, null|string|Throwable $description = null): static;

    public function nullOrNotFalseVal(null|string|Throwable $description = null): static;

    public function nullOrNotFibonacci(null|string|Throwable $description = null): static;

    public function nullOrNotFile(null|string|Throwable $description = null): static;

    /**
    * @param mixed[]|int $options
    */
    public function nullOrNotFilterVar(int $filter, array|int|null $options = null, null|string|Throwable $description = null): static;

    public function nullOrNotFinite(null|string|Throwable $description = null): static;

    public function nullOrNotFloatVal(null|string|Throwable $description = null): static;

    public function nullOrNotFloatType(null|string|Throwable $description = null): static;

    public function nullOrNotGraph(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function nullOrNotGreaterThan(mixed $compareTo, null|string|Throwable $description = null): static;

    public function nullOrNotHexRgbColor(null|string|Throwable $description = null): static;

    public function nullOrNotIban(null|string|Throwable $description = null): static;

    public function nullOrNotIdentical(mixed $compareTo, null|string|Throwable $description = null): static;

    public function nullOrNotImage(?finfo $fileInfo = null, null|string|Throwable $description = null): static;

    public function nullOrNotImei(null|string|Throwable $description = null): static;

    public function nullOrNotIn(mixed $haystack, bool $compareIdentical = false, null|string|Throwable $description = null): static;

    public function nullOrNotInfinite(null|string|Throwable $description = null): static;

    public function nullOrNotInstance(string $instanceName, null|string|Throwable $description = null): static;

    public function nullOrNotIntVal(null|string|Throwable $description = null): static;

    public function nullOrNotIntType(null|string|Throwable $description = null): static;

    public function nullOrNotIp(string $range = '*', ?int $options = null, null|string|Throwable $description = null): static;

    public function nullOrNotIsbn(null|string|Throwable $description = null): static;

    public function nullOrNotIterableType(null|string|Throwable $description = null): static;

    public function nullOrNotJson(null|string|Throwable $description = null): static;

    public function nullOrNotLanguageCode(?string $set = null, null|string|Throwable $description = null): static;

    public function nullOrNotLeapDate(string $format, null|string|Throwable $description = null): static;

    public function nullOrNotLeapYear(null|string|Throwable $description = null): static;

    public function nullOrNotLowercase(null|string|Throwable $description = null): static;

    public function nullOrNotLessThan(mixed $compareTo, null|string|Throwable $description = null): static;

    public function nullOrNotLuhn(null|string|Throwable $description = null): static;

    public function nullOrNotMacAddress(null|string|Throwable $description = null): static;

    public function nullOrNotMaxAge(int $age, ?string $format = null, null|string|Throwable $description = null): static;

    public function nullOrNotMimetype(string $mimetype, null|string|Throwable $description = null): static;

    public function nullOrNotMinAge(int $age, ?string $format = null, null|string|Throwable $description = null): static;

    public function nullOrNotMultiple(int $multipleOf, null|string|Throwable $description = null): static;

    public function nullOrNotNegative(null|string|Throwable $description = null): static;

    public function nullOrNotNfeAccessKey(null|string|Throwable $description = null): static;

    public function nullOrNotNif(null|string|Throwable $description = null): static;

    public function nullOrNotNip(null|string|Throwable $description = null): static;

    public function nullOrNotNo(bool $useLocale = false, null|string|Throwable $description = null): static;

    public function nullOrNotNoWhitespace(null|string|Throwable $description = null): static;

    public function nullOrNotNullType(null|string|Throwable $description = null): static;

    public function nullOrNotNumber(null|string|Throwable $description = null): static;

    public function nullOrNotNumericVal(null|string|Throwable $description = null): static;

    public function nullOrNotObjectType(null|string|Throwable $description = null): static;

    public function nullOrNotOdd(null|string|Throwable $description = null): static;

    public function nullOrNotPerfectSquare(null|string|Throwable $description = null): static;

    public function nullOrNotPesel(null|string|Throwable $description = null): static;

    public function nullOrNotPhone(null|string|Throwable $description = null): static;

    public function nullOrNotPhpLabel(null|string|Throwable $description = null): static;

    public function nullOrNotPis(null|string|Throwable $description = null): static;

    public function nullOrNotPolishIdCard(null|string|Throwable $description = null): static;

    public function nullOrNotPositive(null|string|Throwable $description = null): static;

    public function nullOrNotPostalCode(string $countryCode, null|string|Throwable $description = null): static;

    public function nullOrNotPrimeNumber(null|string|Throwable $description = null): static;

    public function nullOrNotPrintable(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function nullOrNotPunct(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function nullOrNotReadable(null|string|Throwable $description = null): static;

    public function nullOrNotRegex(string $regex, null|string|Throwable $description = null): static;

    public function nullOrNotResourceType(null|string|Throwable $description = null): static;

    public function nullOrNotRoman(null|string|Throwable $description = null): static;

    public function nullOrNotScalarVal(null|string|Throwable $description = null): static;

    public function nullOrNotSize(?string $minSize = null, ?string $maxSize = null, null|string|Throwable $description = null): static;

    public function nullOrNotSlug(null|string|Throwable $description = null): static;

    public function nullOrNotSorted(string $direction, null|string|Throwable $description = null): static;

    public function nullOrNotSpace(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function nullOrNotStartsWith(mixed $startValue, bool $identical = false, null|string|Throwable $description = null): static;

    public function nullOrNotStringType(null|string|Throwable $description = null): static;

    public function nullOrNotStringVal(null|string|Throwable $description = null): static;

    public function nullOrNotSubdivisionCode(string $countryCode, null|string|Throwable $description = null): static;

    /**
    * @param mixed[] $superset
    */
    public function nullOrNotSubset(array $superset, null|string|Throwable $description = null): static;

    public function nullOrNotSymbolicLink(null|string|Throwable $description = null): static;

    public function nullOrNotTime(string $format = 'H:i:s', null|string|Throwable $description = null): static;

    public function nullOrNotTld(null|string|Throwable $description = null): static;

    public function nullOrNotTrueVal(null|string|Throwable $description = null): static;

    public function nullOrNotType(string $type, null|string|Throwable $description = null): static;

    public function nullOrNotUnique(null|string|Throwable $description = null): static;

    public function nullOrNotUploaded(null|string|Throwable $description = null): static;

    public function nullOrNotUppercase(null|string|Throwable $description = null): static;

    public function nullOrNotUrl(null|string|Throwable $description = null): static;

    public function nullOrNotUuid(?int $version = null, null|string|Throwable $description = null): static;

    public function nullOrNotVersion(null|string|Throwable $description = null): static;

    public function nullOrNotVideoUrl(?string $service = null, null|string|Throwable $description = null): static;

    public function nullOrNotVowel(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function nullOrNotWritable(null|string|Throwable $description = null): static;

    public function nullOrNotXdigit(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function nullOrNotYes(bool $useLocale = false, null|string|Throwable $description = null): static;
}
