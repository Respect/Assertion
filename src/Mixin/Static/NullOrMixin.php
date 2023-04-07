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
interface NullOrMixin
{
    public static function nullOr(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function nullOrAlnum(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function nullOrAlpha(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function nullOrArrayType(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrArrayVal(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrBase(mixed $input, int $base, ?string $chars = null, null|string|Throwable $description = null): void;

    public static function nullOrBase64(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrBetween(mixed $input, mixed $minimum, mixed $maximum, null|string|Throwable $description = null): void;

    public static function nullOrBic(mixed $input, string $countryCode, null|string|Throwable $description = null): void;

    public static function nullOrBoolType(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrBoolVal(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrBsn(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrCallableType(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrCallback(mixed $input, callable $callback, null|string|Throwable $description = null): void;

    public static function nullOrCharset(mixed $input, string $charset = '', null|string|Throwable $description = null): void;

    public static function nullOrCnh(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrCnpj(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrControl(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function nullOrConsonant(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function nullOrContains(mixed $input, mixed $containsValue, bool $identical = false, null|string|Throwable $description = null): void;

    /**
    * @param mixed[] $needles
    */
    public static function nullOrContainsAny(mixed $input, array $needles, bool $strictCompareArray = false, null|string|Throwable $description = null): void;

    public static function nullOrCountable(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrCountryCode(mixed $input, ?string $set = null, null|string|Throwable $description = null): void;

    public static function nullOrCurrencyCode(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrCpf(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrCreditCard(mixed $input, ?string $brand = null, null|string|Throwable $description = null): void;

    public static function nullOrDate(mixed $input, string $format = 'Y-m-d', null|string|Throwable $description = null): void;

    public static function nullOrDateTime(mixed $input, ?string $format = null, null|string|Throwable $description = null): void;

    public static function nullOrDecimal(mixed $input, int $decimals, null|string|Throwable $description = null): void;

    public static function nullOrDigit(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function nullOrDirectory(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrDomain(mixed $input, bool $tldCheck = true, null|string|Throwable $description = null): void;

    public static function nullOrEmail(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrEndsWith(mixed $input, mixed $endValue, bool $identical = false, null|string|Throwable $description = null): void;

    public static function nullOrEquals(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function nullOrEquivalent(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function nullOrEven(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrExecutable(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrExists(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrExtension(mixed $input, string $extension, null|string|Throwable $description = null): void;

    public static function nullOrFactor(mixed $input, int $dividend, null|string|Throwable $description = null): void;

    public static function nullOrFalseVal(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrFibonacci(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrFile(mixed $input, null|string|Throwable $description = null): void;

    /**
    * @param mixed[]|int $options
    */
    public static function nullOrFilterVar(mixed $input, int $filter, array|int|null $options = null, null|string|Throwable $description = null): void;

    public static function nullOrFinite(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrFloatVal(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrFloatType(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrGraph(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function nullOrGreaterThan(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function nullOrHexRgbColor(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrIban(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrIdentical(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function nullOrImage(mixed $input, ?finfo $fileInfo = null, null|string|Throwable $description = null): void;

    public static function nullOrImei(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrIn(mixed $input, mixed $haystack, bool $compareIdentical = false, null|string|Throwable $description = null): void;

    public static function nullOrInfinite(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrInstance(mixed $input, string $instanceName, null|string|Throwable $description = null): void;

    public static function nullOrIntVal(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrIntType(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrIp(mixed $input, string $range = '*', ?int $options = null, null|string|Throwable $description = null): void;

    public static function nullOrIsbn(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrIterableType(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrJson(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrLanguageCode(mixed $input, ?string $set = null, null|string|Throwable $description = null): void;

    public static function nullOrLeapDate(mixed $input, string $format, null|string|Throwable $description = null): void;

    public static function nullOrLeapYear(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrLowercase(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrLessThan(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function nullOrLuhn(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrMacAddress(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrMaxAge(mixed $input, int $age, ?string $format = null, null|string|Throwable $description = null): void;

    public static function nullOrMimetype(mixed $input, string $mimetype, null|string|Throwable $description = null): void;

    public static function nullOrMinAge(mixed $input, int $age, ?string $format = null, null|string|Throwable $description = null): void;

    public static function nullOrMultiple(mixed $input, int $multipleOf, null|string|Throwable $description = null): void;

    public static function nullOrNegative(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNfeAccessKey(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNif(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNip(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNo(mixed $input, bool $useLocale = false, null|string|Throwable $description = null): void;

    public static function nullOrNotBlank(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotEmoji(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotEmpty(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotOptional(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNoWhitespace(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNullType(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNumber(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNumericVal(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrObjectType(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrOdd(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrPerfectSquare(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrPesel(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrPhone(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrPhpLabel(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrPis(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrPolishIdCard(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrPositive(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrPostalCode(mixed $input, string $countryCode, null|string|Throwable $description = null): void;

    public static function nullOrPrimeNumber(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrPrintable(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function nullOrPunct(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function nullOrReadable(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrRegex(mixed $input, string $regex, null|string|Throwable $description = null): void;

    public static function nullOrResourceType(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrRoman(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrScalarVal(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrSize(mixed $input, ?string $minSize = null, ?string $maxSize = null, null|string|Throwable $description = null): void;

    public static function nullOrSlug(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrSorted(mixed $input, string $direction, null|string|Throwable $description = null): void;

    public static function nullOrSpace(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function nullOrStartsWith(mixed $input, mixed $startValue, bool $identical = false, null|string|Throwable $description = null): void;

    public static function nullOrStringType(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrStringVal(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrSubdivisionCode(mixed $input, string $countryCode, null|string|Throwable $description = null): void;

    /**
    * @param mixed[] $superset
    */
    public static function nullOrSubset(mixed $input, array $superset, null|string|Throwable $description = null): void;

    public static function nullOrSymbolicLink(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrTime(mixed $input, string $format = 'H:i:s', null|string|Throwable $description = null): void;

    public static function nullOrTld(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrTrueVal(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrType(mixed $input, string $type, null|string|Throwable $description = null): void;

    public static function nullOrUnique(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrUploaded(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrUppercase(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrUrl(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrUuid(mixed $input, ?int $version = null, null|string|Throwable $description = null): void;

    public static function nullOrVersion(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrVideoUrl(mixed $input, ?string $service = null, null|string|Throwable $description = null): void;

    public static function nullOrVowel(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function nullOrWritable(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrXdigit(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function nullOrYes(mixed $input, bool $useLocale = false, null|string|Throwable $description = null): void;

    public static function nullOrNot(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function nullOrNotAlnum(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function nullOrNotAlpha(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function nullOrNotArrayType(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotArrayVal(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotBase(mixed $input, int $base, ?string $chars = null, null|string|Throwable $description = null): void;

    public static function nullOrNotBase64(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotBetween(mixed $input, mixed $minimum, mixed $maximum, null|string|Throwable $description = null): void;

    public static function nullOrNotBic(mixed $input, string $countryCode, null|string|Throwable $description = null): void;

    public static function nullOrNotBoolType(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotBoolVal(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotBsn(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotCallableType(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotCallback(mixed $input, callable $callback, null|string|Throwable $description = null): void;

    public static function nullOrNotCharset(mixed $input, string $charset = '', null|string|Throwable $description = null): void;

    public static function nullOrNotCnh(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotCnpj(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotControl(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function nullOrNotConsonant(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function nullOrNotContains(mixed $input, mixed $containsValue, bool $identical = false, null|string|Throwable $description = null): void;

    /**
    * @param mixed[] $needles
    */
    public static function nullOrNotContainsAny(mixed $input, array $needles, bool $strictCompareArray = false, null|string|Throwable $description = null): void;

    public static function nullOrNotCountable(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotCountryCode(mixed $input, ?string $set = null, null|string|Throwable $description = null): void;

    public static function nullOrNotCurrencyCode(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotCpf(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotCreditCard(mixed $input, ?string $brand = null, null|string|Throwable $description = null): void;

    public static function nullOrNotDate(mixed $input, string $format = 'Y-m-d', null|string|Throwable $description = null): void;

    public static function nullOrNotDateTime(mixed $input, ?string $format = null, null|string|Throwable $description = null): void;

    public static function nullOrNotDecimal(mixed $input, int $decimals, null|string|Throwable $description = null): void;

    public static function nullOrNotDigit(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function nullOrNotDirectory(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotDomain(mixed $input, bool $tldCheck = true, null|string|Throwable $description = null): void;

    public static function nullOrNotEmail(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotEndsWith(mixed $input, mixed $endValue, bool $identical = false, null|string|Throwable $description = null): void;

    public static function nullOrNotEquals(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function nullOrNotEquivalent(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function nullOrNotEven(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotExecutable(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotExists(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotExtension(mixed $input, string $extension, null|string|Throwable $description = null): void;

    public static function nullOrNotFactor(mixed $input, int $dividend, null|string|Throwable $description = null): void;

    public static function nullOrNotFalseVal(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotFibonacci(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotFile(mixed $input, null|string|Throwable $description = null): void;

    /**
    * @param mixed[]|int $options
    */
    public static function nullOrNotFilterVar(mixed $input, int $filter, array|int|null $options = null, null|string|Throwable $description = null): void;

    public static function nullOrNotFinite(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotFloatVal(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotFloatType(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotGraph(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function nullOrNotGreaterThan(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function nullOrNotHexRgbColor(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotIban(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotIdentical(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function nullOrNotImage(mixed $input, ?finfo $fileInfo = null, null|string|Throwable $description = null): void;

    public static function nullOrNotImei(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotIn(mixed $input, mixed $haystack, bool $compareIdentical = false, null|string|Throwable $description = null): void;

    public static function nullOrNotInfinite(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotInstance(mixed $input, string $instanceName, null|string|Throwable $description = null): void;

    public static function nullOrNotIntVal(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotIntType(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotIp(mixed $input, string $range = '*', ?int $options = null, null|string|Throwable $description = null): void;

    public static function nullOrNotIsbn(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotIterableType(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotJson(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotLanguageCode(mixed $input, ?string $set = null, null|string|Throwable $description = null): void;

    public static function nullOrNotLeapDate(mixed $input, string $format, null|string|Throwable $description = null): void;

    public static function nullOrNotLeapYear(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotLowercase(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotLessThan(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function nullOrNotLuhn(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotMacAddress(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotMaxAge(mixed $input, int $age, ?string $format = null, null|string|Throwable $description = null): void;

    public static function nullOrNotMimetype(mixed $input, string $mimetype, null|string|Throwable $description = null): void;

    public static function nullOrNotMinAge(mixed $input, int $age, ?string $format = null, null|string|Throwable $description = null): void;

    public static function nullOrNotMultiple(mixed $input, int $multipleOf, null|string|Throwable $description = null): void;

    public static function nullOrNotNegative(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotNfeAccessKey(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotNif(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotNip(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotNo(mixed $input, bool $useLocale = false, null|string|Throwable $description = null): void;

    public static function nullOrNotNoWhitespace(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotNullType(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotNumber(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotNumericVal(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotObjectType(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotOdd(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotPerfectSquare(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotPesel(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotPhone(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotPhpLabel(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotPis(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotPolishIdCard(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotPositive(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotPostalCode(mixed $input, string $countryCode, null|string|Throwable $description = null): void;

    public static function nullOrNotPrimeNumber(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotPrintable(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function nullOrNotPunct(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function nullOrNotReadable(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotRegex(mixed $input, string $regex, null|string|Throwable $description = null): void;

    public static function nullOrNotResourceType(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotRoman(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotScalarVal(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotSize(mixed $input, ?string $minSize = null, ?string $maxSize = null, null|string|Throwable $description = null): void;

    public static function nullOrNotSlug(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotSorted(mixed $input, string $direction, null|string|Throwable $description = null): void;

    public static function nullOrNotSpace(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function nullOrNotStartsWith(mixed $input, mixed $startValue, bool $identical = false, null|string|Throwable $description = null): void;

    public static function nullOrNotStringType(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotStringVal(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotSubdivisionCode(mixed $input, string $countryCode, null|string|Throwable $description = null): void;

    /**
    * @param mixed[] $superset
    */
    public static function nullOrNotSubset(mixed $input, array $superset, null|string|Throwable $description = null): void;

    public static function nullOrNotSymbolicLink(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotTime(mixed $input, string $format = 'H:i:s', null|string|Throwable $description = null): void;

    public static function nullOrNotTld(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotTrueVal(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotType(mixed $input, string $type, null|string|Throwable $description = null): void;

    public static function nullOrNotUnique(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotUploaded(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotUppercase(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotUrl(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotUuid(mixed $input, ?int $version = null, null|string|Throwable $description = null): void;

    public static function nullOrNotVersion(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotVideoUrl(mixed $input, ?string $service = null, null|string|Throwable $description = null): void;

    public static function nullOrNotVowel(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function nullOrNotWritable(mixed $input, null|string|Throwable $description = null): void;

    public static function nullOrNotXdigit(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function nullOrNotYes(mixed $input, bool $useLocale = false, null|string|Throwable $description = null): void;
}
