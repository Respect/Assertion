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

namespace Respect\Assertion\Mixin\Dynamic;

use finfo;
use Throwable;

// phpcs:disable Generic.Files.LineLength.TooLong
interface KeyMixin
{
    public function keyPresent(mixed $key, null|string|Throwable $description = null): self;

    public function keyNotPresent(mixed $key, null|string|Throwable $description = null): self;

    public function key(mixed $key, mixed $compareTo, null|string|Throwable $description = null): self;

    public function keyAlnum(mixed $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyAlpha(mixed $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyArrayType(mixed $key, null|string|Throwable $description = null): static;

    public function keyArrayVal(mixed $key, null|string|Throwable $description = null): static;

    public function keyBase(mixed $key, int $base, ?string $chars = null, null|string|Throwable $description = null): static;

    public function keyBase64(mixed $key, null|string|Throwable $description = null): static;

    public function keyBetween(mixed $key, mixed $minimum, mixed $maximum, null|string|Throwable $description = null): static;

    public function keyBic(mixed $key, string $countryCode, null|string|Throwable $description = null): static;

    public function keyBoolType(mixed $key, null|string|Throwable $description = null): static;

    public function keyBoolVal(mixed $key, null|string|Throwable $description = null): static;

    public function keyBsn(mixed $key, null|string|Throwable $description = null): static;

    public function keyCallableType(mixed $key, null|string|Throwable $description = null): static;

    public function keyCallback(mixed $key, callable $callback, null|string|Throwable $description = null): static;

    public function keyCharset(mixed $key, string $charset = '', null|string|Throwable $description = null): static;

    public function keyCnh(mixed $key, null|string|Throwable $description = null): static;

    public function keyCnpj(mixed $key, null|string|Throwable $description = null): static;

    public function keyControl(mixed $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyConsonant(mixed $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyContains(mixed $key, mixed $containsValue, bool $identical = false, null|string|Throwable $description = null): static;

    /**
    * @param mixed[] $needles
    */
    public function keyContainsAny(mixed $key, array $needles, bool $strictCompareArray = false, null|string|Throwable $description = null): static;

    public function keyCountable(mixed $key, null|string|Throwable $description = null): static;

    public function keyCountryCode(mixed $key, ?string $set = null, null|string|Throwable $description = null): static;

    public function keyCurrencyCode(mixed $key, null|string|Throwable $description = null): static;

    public function keyCpf(mixed $key, null|string|Throwable $description = null): static;

    public function keyCreditCard(mixed $key, ?string $brand = null, null|string|Throwable $description = null): static;

    public function keyDate(mixed $key, string $format = 'Y-m-d', null|string|Throwable $description = null): static;

    public function keyDateTime(mixed $key, ?string $format = null, null|string|Throwable $description = null): static;

    public function keyDecimal(mixed $key, int $decimals, null|string|Throwable $description = null): static;

    public function keyDigit(mixed $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyDirectory(mixed $key, null|string|Throwable $description = null): static;

    public function keyDomain(mixed $key, bool $tldCheck = true, null|string|Throwable $description = null): static;

    public function keyEmail(mixed $key, null|string|Throwable $description = null): static;

    public function keyEndsWith(mixed $key, mixed $endValue, bool $identical = false, null|string|Throwable $description = null): static;

    public function keyEquals(mixed $key, mixed $compareTo, null|string|Throwable $description = null): static;

    public function keyEquivalent(mixed $key, mixed $compareTo, null|string|Throwable $description = null): static;

    public function keyEven(mixed $key, null|string|Throwable $description = null): static;

    public function keyExecutable(mixed $key, null|string|Throwable $description = null): static;

    public function keyExists(mixed $key, null|string|Throwable $description = null): static;

    public function keyExtension(mixed $key, string $extension, null|string|Throwable $description = null): static;

    public function keyFactor(mixed $key, int $dividend, null|string|Throwable $description = null): static;

    public function keyFalseVal(mixed $key, null|string|Throwable $description = null): static;

    public function keyFibonacci(mixed $key, null|string|Throwable $description = null): static;

    public function keyFile(mixed $key, null|string|Throwable $description = null): static;

    /**
    * @param mixed[]|int $options
    */
    public function keyFilterVar(mixed $key, int $filter, array|int|null $options = null, null|string|Throwable $description = null): static;

    public function keyFinite(mixed $key, null|string|Throwable $description = null): static;

    public function keyFloatVal(mixed $key, null|string|Throwable $description = null): static;

    public function keyFloatType(mixed $key, null|string|Throwable $description = null): static;

    public function keyGraph(mixed $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyGreaterThan(mixed $key, mixed $compareTo, null|string|Throwable $description = null): static;

    public function keyHexRgbColor(mixed $key, null|string|Throwable $description = null): static;

    public function keyIban(mixed $key, null|string|Throwable $description = null): static;

    public function keyIdentical(mixed $key, mixed $compareTo, null|string|Throwable $description = null): static;

    public function keyImage(mixed $key, ?finfo $fileInfo = null, null|string|Throwable $description = null): static;

    public function keyImei(mixed $key, null|string|Throwable $description = null): static;

    public function keyIn(mixed $key, mixed $haystack, bool $compareIdentical = false, null|string|Throwable $description = null): static;

    public function keyInfinite(mixed $key, null|string|Throwable $description = null): static;

    public function keyInstance(mixed $key, string $instanceName, null|string|Throwable $description = null): static;

    public function keyIntVal(mixed $key, null|string|Throwable $description = null): static;

    public function keyIntType(mixed $key, null|string|Throwable $description = null): static;

    public function keyIp(mixed $key, string $range = '*', ?int $options = null, null|string|Throwable $description = null): static;

    public function keyIsbn(mixed $key, null|string|Throwable $description = null): static;

    public function keyIterableType(mixed $key, null|string|Throwable $description = null): static;

    public function keyJson(mixed $key, null|string|Throwable $description = null): static;

    public function keyLanguageCode(mixed $key, ?string $set = null, null|string|Throwable $description = null): static;

    public function keyLeapDate(mixed $key, string $format, null|string|Throwable $description = null): static;

    public function keyLeapYear(mixed $key, null|string|Throwable $description = null): static;

    public function keyLowercase(mixed $key, null|string|Throwable $description = null): static;

    public function keyLessThan(mixed $key, mixed $compareTo, null|string|Throwable $description = null): static;

    public function keyLuhn(mixed $key, null|string|Throwable $description = null): static;

    public function keyMacAddress(mixed $key, null|string|Throwable $description = null): static;

    public function keyMaxAge(mixed $key, int $age, ?string $format = null, null|string|Throwable $description = null): static;

    public function keyMimetype(mixed $key, string $mimetype, null|string|Throwable $description = null): static;

    public function keyMinAge(mixed $key, int $age, ?string $format = null, null|string|Throwable $description = null): static;

    public function keyMultiple(mixed $key, int $multipleOf, null|string|Throwable $description = null): static;

    public function keyNegative(mixed $key, null|string|Throwable $description = null): static;

    public function keyNfeAccessKey(mixed $key, null|string|Throwable $description = null): static;

    public function keyNif(mixed $key, null|string|Throwable $description = null): static;

    public function keyNip(mixed $key, null|string|Throwable $description = null): static;

    public function keyNo(mixed $key, bool $useLocale = false, null|string|Throwable $description = null): static;

    public function keyNotBlank(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotEmoji(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotEmpty(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotOptional(mixed $key, null|string|Throwable $description = null): static;

    public function keyNoWhitespace(mixed $key, null|string|Throwable $description = null): static;

    public function keyNullType(mixed $key, null|string|Throwable $description = null): static;

    public function keyNumber(mixed $key, null|string|Throwable $description = null): static;

    public function keyNumericVal(mixed $key, null|string|Throwable $description = null): static;

    public function keyObjectType(mixed $key, null|string|Throwable $description = null): static;

    public function keyOdd(mixed $key, null|string|Throwable $description = null): static;

    public function keyPerfectSquare(mixed $key, null|string|Throwable $description = null): static;

    public function keyPesel(mixed $key, null|string|Throwable $description = null): static;

    public function keyPhone(mixed $key, null|string|Throwable $description = null): static;

    public function keyPhpLabel(mixed $key, null|string|Throwable $description = null): static;

    public function keyPis(mixed $key, null|string|Throwable $description = null): static;

    public function keyPolishIdCard(mixed $key, null|string|Throwable $description = null): static;

    public function keyPositive(mixed $key, null|string|Throwable $description = null): static;

    public function keyPostalCode(mixed $key, string $countryCode, null|string|Throwable $description = null): static;

    public function keyPrimeNumber(mixed $key, null|string|Throwable $description = null): static;

    public function keyPrintable(mixed $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyPunct(mixed $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyReadable(mixed $key, null|string|Throwable $description = null): static;

    public function keyRegex(mixed $key, string $regex, null|string|Throwable $description = null): static;

    public function keyResourceType(mixed $key, null|string|Throwable $description = null): static;

    public function keyRoman(mixed $key, null|string|Throwable $description = null): static;

    public function keyScalarVal(mixed $key, null|string|Throwable $description = null): static;

    public function keySize(mixed $key, ?string $minSize = null, ?string $maxSize = null, null|string|Throwable $description = null): static;

    public function keySlug(mixed $key, null|string|Throwable $description = null): static;

    public function keySorted(mixed $key, string $direction, null|string|Throwable $description = null): static;

    public function keySpace(mixed $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyStartsWith(mixed $key, mixed $startValue, bool $identical = false, null|string|Throwable $description = null): static;

    public function keyStringType(mixed $key, null|string|Throwable $description = null): static;

    public function keyStringVal(mixed $key, null|string|Throwable $description = null): static;

    public function keySubdivisionCode(mixed $key, string $countryCode, null|string|Throwable $description = null): static;

    /**
    * @param mixed[] $superset
    */
    public function keySubset(mixed $key, array $superset, null|string|Throwable $description = null): static;

    public function keySymbolicLink(mixed $key, null|string|Throwable $description = null): static;

    public function keyTime(mixed $key, string $format = 'H:i:s', null|string|Throwable $description = null): static;

    public function keyTld(mixed $key, null|string|Throwable $description = null): static;

    public function keyTrueVal(mixed $key, null|string|Throwable $description = null): static;

    public function keyType(mixed $key, string $type, null|string|Throwable $description = null): static;

    public function keyUnique(mixed $key, null|string|Throwable $description = null): static;

    public function keyUploaded(mixed $key, null|string|Throwable $description = null): static;

    public function keyUppercase(mixed $key, null|string|Throwable $description = null): static;

    public function keyUrl(mixed $key, null|string|Throwable $description = null): static;

    public function keyUuid(mixed $key, ?int $version = null, null|string|Throwable $description = null): static;

    public function keyVersion(mixed $key, null|string|Throwable $description = null): static;

    public function keyVideoUrl(mixed $key, ?string $service = null, null|string|Throwable $description = null): static;

    public function keyVowel(mixed $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyWritable(mixed $key, null|string|Throwable $description = null): static;

    public function keyXdigit(mixed $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyYes(mixed $key, bool $useLocale = false, null|string|Throwable $description = null): static;

    public function keyNot(mixed $key, mixed $compareTo, null|string|Throwable $description = null): self;

    public function keyNotAlnum(mixed $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyNotAlpha(mixed $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyNotArrayType(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotArrayVal(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotBase(mixed $key, int $base, ?string $chars = null, null|string|Throwable $description = null): static;

    public function keyNotBase64(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotBetween(mixed $key, mixed $minimum, mixed $maximum, null|string|Throwable $description = null): static;

    public function keyNotBic(mixed $key, string $countryCode, null|string|Throwable $description = null): static;

    public function keyNotBoolType(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotBoolVal(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotBsn(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotCallableType(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotCallback(mixed $key, callable $callback, null|string|Throwable $description = null): static;

    public function keyNotCharset(mixed $key, string $charset = '', null|string|Throwable $description = null): static;

    public function keyNotCnh(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotCnpj(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotControl(mixed $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyNotConsonant(mixed $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyNotContains(mixed $key, mixed $containsValue, bool $identical = false, null|string|Throwable $description = null): static;

    /**
    * @param mixed[] $needles
    */
    public function keyNotContainsAny(mixed $key, array $needles, bool $strictCompareArray = false, null|string|Throwable $description = null): static;

    public function keyNotCountable(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotCountryCode(mixed $key, ?string $set = null, null|string|Throwable $description = null): static;

    public function keyNotCurrencyCode(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotCpf(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotCreditCard(mixed $key, ?string $brand = null, null|string|Throwable $description = null): static;

    public function keyNotDate(mixed $key, string $format = 'Y-m-d', null|string|Throwable $description = null): static;

    public function keyNotDateTime(mixed $key, ?string $format = null, null|string|Throwable $description = null): static;

    public function keyNotDecimal(mixed $key, int $decimals, null|string|Throwable $description = null): static;

    public function keyNotDigit(mixed $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyNotDirectory(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotDomain(mixed $key, bool $tldCheck = true, null|string|Throwable $description = null): static;

    public function keyNotEmail(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotEndsWith(mixed $key, mixed $endValue, bool $identical = false, null|string|Throwable $description = null): static;

    public function keyNotEquals(mixed $key, mixed $compareTo, null|string|Throwable $description = null): static;

    public function keyNotEquivalent(mixed $key, mixed $compareTo, null|string|Throwable $description = null): static;

    public function keyNotEven(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotExecutable(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotExists(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotExtension(mixed $key, string $extension, null|string|Throwable $description = null): static;

    public function keyNotFactor(mixed $key, int $dividend, null|string|Throwable $description = null): static;

    public function keyNotFalseVal(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotFibonacci(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotFile(mixed $key, null|string|Throwable $description = null): static;

    /**
    * @param mixed[]|int $options
    */
    public function keyNotFilterVar(mixed $key, int $filter, array|int|null $options = null, null|string|Throwable $description = null): static;

    public function keyNotFinite(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotFloatVal(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotFloatType(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotGraph(mixed $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyNotGreaterThan(mixed $key, mixed $compareTo, null|string|Throwable $description = null): static;

    public function keyNotHexRgbColor(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotIban(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotIdentical(mixed $key, mixed $compareTo, null|string|Throwable $description = null): static;

    public function keyNotImage(mixed $key, ?finfo $fileInfo = null, null|string|Throwable $description = null): static;

    public function keyNotImei(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotIn(mixed $key, mixed $haystack, bool $compareIdentical = false, null|string|Throwable $description = null): static;

    public function keyNotInfinite(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotInstance(mixed $key, string $instanceName, null|string|Throwable $description = null): static;

    public function keyNotIntVal(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotIntType(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotIp(mixed $key, string $range = '*', ?int $options = null, null|string|Throwable $description = null): static;

    public function keyNotIsbn(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotIterableType(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotJson(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotLanguageCode(mixed $key, ?string $set = null, null|string|Throwable $description = null): static;

    public function keyNotLeapDate(mixed $key, string $format, null|string|Throwable $description = null): static;

    public function keyNotLeapYear(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotLowercase(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotLessThan(mixed $key, mixed $compareTo, null|string|Throwable $description = null): static;

    public function keyNotLuhn(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotMacAddress(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotMaxAge(mixed $key, int $age, ?string $format = null, null|string|Throwable $description = null): static;

    public function keyNotMimetype(mixed $key, string $mimetype, null|string|Throwable $description = null): static;

    public function keyNotMinAge(mixed $key, int $age, ?string $format = null, null|string|Throwable $description = null): static;

    public function keyNotMultiple(mixed $key, int $multipleOf, null|string|Throwable $description = null): static;

    public function keyNotNegative(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotNfeAccessKey(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotNif(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotNip(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotNo(mixed $key, bool $useLocale = false, null|string|Throwable $description = null): static;

    public function keyNotNoWhitespace(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotNullType(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotNumber(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotNumericVal(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotObjectType(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotOdd(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotPerfectSquare(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotPesel(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotPhone(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotPhpLabel(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotPis(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotPolishIdCard(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotPositive(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotPostalCode(mixed $key, string $countryCode, null|string|Throwable $description = null): static;

    public function keyNotPrimeNumber(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotPrintable(mixed $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyNotPunct(mixed $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyNotReadable(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotRegex(mixed $key, string $regex, null|string|Throwable $description = null): static;

    public function keyNotResourceType(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotRoman(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotScalarVal(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotSize(mixed $key, ?string $minSize = null, ?string $maxSize = null, null|string|Throwable $description = null): static;

    public function keyNotSlug(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotSorted(mixed $key, string $direction, null|string|Throwable $description = null): static;

    public function keyNotSpace(mixed $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyNotStartsWith(mixed $key, mixed $startValue, bool $identical = false, null|string|Throwable $description = null): static;

    public function keyNotStringType(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotStringVal(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotSubdivisionCode(mixed $key, string $countryCode, null|string|Throwable $description = null): static;

    /**
    * @param mixed[] $superset
    */
    public function keyNotSubset(mixed $key, array $superset, null|string|Throwable $description = null): static;

    public function keyNotSymbolicLink(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotTime(mixed $key, string $format = 'H:i:s', null|string|Throwable $description = null): static;

    public function keyNotTld(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotTrueVal(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotType(mixed $key, string $type, null|string|Throwable $description = null): static;

    public function keyNotUnique(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotUploaded(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotUppercase(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotUrl(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotUuid(mixed $key, ?int $version = null, null|string|Throwable $description = null): static;

    public function keyNotVersion(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotVideoUrl(mixed $key, ?string $service = null, null|string|Throwable $description = null): static;

    public function keyNotVowel(mixed $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyNotWritable(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotXdigit(mixed $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyNotYes(mixed $key, bool $useLocale = false, null|string|Throwable $description = null): static;
}
