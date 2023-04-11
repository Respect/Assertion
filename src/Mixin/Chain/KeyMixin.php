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
interface KeyMixin
{
    public function keyPresent(mixed $key, null|string|Throwable $description = null): static;

    public function keyNotPresent(mixed $key, null|string|Throwable $description = null): static;

    public function keyAlnum(int|string $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyAlpha(int|string $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyArrayType(int|string $key, null|string|Throwable $description = null): static;

    public function keyArrayVal(int|string $key, null|string|Throwable $description = null): static;

    public function keyBase(int|string $key, int $base, ?string $chars = null, null|string|Throwable $description = null): static;

    public function keyBase64(int|string $key, null|string|Throwable $description = null): static;

    public function keyBetween(int|string $key, mixed $minimum, mixed $maximum, null|string|Throwable $description = null): static;

    public function keyBic(int|string $key, string $countryCode, null|string|Throwable $description = null): static;

    public function keyBoolType(int|string $key, null|string|Throwable $description = null): static;

    public function keyBoolVal(int|string $key, null|string|Throwable $description = null): static;

    public function keyBsn(int|string $key, null|string|Throwable $description = null): static;

    public function keyCallableType(int|string $key, null|string|Throwable $description = null): static;

    public function keyCallback(int|string $key, callable $callback, null|string|Throwable $description = null): static;

    public function keyCharset(int|string $key, string $charset = '', null|string|Throwable $description = null): static;

    public function keyCnh(int|string $key, null|string|Throwable $description = null): static;

    public function keyCnpj(int|string $key, null|string|Throwable $description = null): static;

    public function keyControl(int|string $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyConsonant(int|string $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyContains(int|string $key, mixed $containsValue, bool $identical = false, null|string|Throwable $description = null): static;

    /**
    * @param mixed[] $needles
    */
    public function keyContainsAny(int|string $key, array $needles, bool $strictCompareArray = false, null|string|Throwable $description = null): static;

    public function keyCountable(int|string $key, null|string|Throwable $description = null): static;

    public function keyCountryCode(int|string $key, ?string $set = null, null|string|Throwable $description = null): static;

    public function keyCurrencyCode(int|string $key, null|string|Throwable $description = null): static;

    public function keyCpf(int|string $key, null|string|Throwable $description = null): static;

    public function keyCreditCard(int|string $key, ?string $brand = null, null|string|Throwable $description = null): static;

    public function keyDate(int|string $key, string $format = 'Y-m-d', null|string|Throwable $description = null): static;

    public function keyDateTime(int|string $key, ?string $format = null, null|string|Throwable $description = null): static;

    public function keyDecimal(int|string $key, int $decimals, null|string|Throwable $description = null): static;

    public function keyDigit(int|string $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyDirectory(int|string $key, null|string|Throwable $description = null): static;

    public function keyDomain(int|string $key, bool $tldCheck = true, null|string|Throwable $description = null): static;

    public function keyEmail(int|string $key, null|string|Throwable $description = null): static;

    public function keyEndsWith(int|string $key, mixed $endValue, bool $identical = false, null|string|Throwable $description = null): static;

    public function keyEquals(int|string $key, mixed $compareTo, null|string|Throwable $description = null): static;

    public function keyEquivalent(int|string $key, mixed $compareTo, null|string|Throwable $description = null): static;

    public function keyEven(int|string $key, null|string|Throwable $description = null): static;

    public function keyExecutable(int|string $key, null|string|Throwable $description = null): static;

    public function keyExists(int|string $key, null|string|Throwable $description = null): static;

    public function keyExtension(int|string $key, string $extension, null|string|Throwable $description = null): static;

    public function keyFactor(int|string $key, int $dividend, null|string|Throwable $description = null): static;

    public function keyFalseVal(int|string $key, null|string|Throwable $description = null): static;

    public function keyFibonacci(int|string $key, null|string|Throwable $description = null): static;

    public function keyFile(int|string $key, null|string|Throwable $description = null): static;

    /**
    * @param mixed[]|int $options
    */
    public function keyFilterVar(int|string $key, int $filter, array|int|null $options = null, null|string|Throwable $description = null): static;

    public function keyFinite(int|string $key, null|string|Throwable $description = null): static;

    public function keyFloatVal(int|string $key, null|string|Throwable $description = null): static;

    public function keyFloatType(int|string $key, null|string|Throwable $description = null): static;

    public function keyGraph(int|string $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyGreaterThan(int|string $key, mixed $compareTo, null|string|Throwable $description = null): static;

    public function keyHexRgbColor(int|string $key, null|string|Throwable $description = null): static;

    public function keyIban(int|string $key, null|string|Throwable $description = null): static;

    public function keyIdentical(int|string $key, mixed $compareTo, null|string|Throwable $description = null): static;

    public function keyImage(int|string $key, ?finfo $fileInfo = null, null|string|Throwable $description = null): static;

    public function keyImei(int|string $key, null|string|Throwable $description = null): static;

    public function keyIn(int|string $key, mixed $haystack, bool $compareIdentical = false, null|string|Throwable $description = null): static;

    public function keyInfinite(int|string $key, null|string|Throwable $description = null): static;

    public function keyInstance(int|string $key, string $instanceName, null|string|Throwable $description = null): static;

    public function keyIntVal(int|string $key, null|string|Throwable $description = null): static;

    public function keyIntType(int|string $key, null|string|Throwable $description = null): static;

    public function keyIp(int|string $key, string $range = '*', ?int $options = null, null|string|Throwable $description = null): static;

    public function keyIsbn(int|string $key, null|string|Throwable $description = null): static;

    public function keyIterableType(int|string $key, null|string|Throwable $description = null): static;

    public function keyJson(int|string $key, null|string|Throwable $description = null): static;

    public function keyLanguageCode(int|string $key, ?string $set = null, null|string|Throwable $description = null): static;

    public function keyLeapDate(int|string $key, string $format, null|string|Throwable $description = null): static;

    public function keyLeapYear(int|string $key, null|string|Throwable $description = null): static;

    public function keyLowercase(int|string $key, null|string|Throwable $description = null): static;

    public function keyLessThan(int|string $key, mixed $compareTo, null|string|Throwable $description = null): static;

    public function keyLuhn(int|string $key, null|string|Throwable $description = null): static;

    public function keyMacAddress(int|string $key, null|string|Throwable $description = null): static;

    public function keyMaxAge(int|string $key, int $age, ?string $format = null, null|string|Throwable $description = null): static;

    public function keyMimetype(int|string $key, string $mimetype, null|string|Throwable $description = null): static;

    public function keyMinAge(int|string $key, int $age, ?string $format = null, null|string|Throwable $description = null): static;

    public function keyMultiple(int|string $key, int $multipleOf, null|string|Throwable $description = null): static;

    public function keyNegative(int|string $key, null|string|Throwable $description = null): static;

    public function keyNfeAccessKey(int|string $key, null|string|Throwable $description = null): static;

    public function keyNif(int|string $key, null|string|Throwable $description = null): static;

    public function keyNip(int|string $key, null|string|Throwable $description = null): static;

    public function keyNo(int|string $key, bool $useLocale = false, null|string|Throwable $description = null): static;

    public function keyNotBlank(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotEmoji(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotEmpty(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotOptional(int|string $key, null|string|Throwable $description = null): static;

    public function keyNoWhitespace(int|string $key, null|string|Throwable $description = null): static;

    public function keyNullType(int|string $key, null|string|Throwable $description = null): static;

    public function keyNumber(int|string $key, null|string|Throwable $description = null): static;

    public function keyNumericVal(int|string $key, null|string|Throwable $description = null): static;

    public function keyObjectType(int|string $key, null|string|Throwable $description = null): static;

    public function keyOdd(int|string $key, null|string|Throwable $description = null): static;

    public function keyPerfectSquare(int|string $key, null|string|Throwable $description = null): static;

    public function keyPesel(int|string $key, null|string|Throwable $description = null): static;

    public function keyPhone(int|string $key, null|string|Throwable $description = null): static;

    public function keyPhpLabel(int|string $key, null|string|Throwable $description = null): static;

    public function keyPis(int|string $key, null|string|Throwable $description = null): static;

    public function keyPolishIdCard(int|string $key, null|string|Throwable $description = null): static;

    public function keyPositive(int|string $key, null|string|Throwable $description = null): static;

    public function keyPostalCode(int|string $key, string $countryCode, null|string|Throwable $description = null): static;

    public function keyPrimeNumber(int|string $key, null|string|Throwable $description = null): static;

    public function keyPrintable(int|string $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyPunct(int|string $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyReadable(int|string $key, null|string|Throwable $description = null): static;

    public function keyRegex(int|string $key, string $regex, null|string|Throwable $description = null): static;

    public function keyResourceType(int|string $key, null|string|Throwable $description = null): static;

    public function keyRoman(int|string $key, null|string|Throwable $description = null): static;

    public function keyScalarVal(int|string $key, null|string|Throwable $description = null): static;

    public function keySize(int|string $key, ?string $minSize = null, ?string $maxSize = null, null|string|Throwable $description = null): static;

    public function keySlug(int|string $key, null|string|Throwable $description = null): static;

    public function keySorted(int|string $key, string $direction, null|string|Throwable $description = null): static;

    public function keySpace(int|string $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyStartsWith(int|string $key, mixed $startValue, bool $identical = false, null|string|Throwable $description = null): static;

    public function keyStringType(int|string $key, null|string|Throwable $description = null): static;

    public function keyStringVal(int|string $key, null|string|Throwable $description = null): static;

    public function keySubdivisionCode(int|string $key, string $countryCode, null|string|Throwable $description = null): static;

    /**
    * @param mixed[] $superset
    */
    public function keySubset(int|string $key, array $superset, null|string|Throwable $description = null): static;

    public function keySymbolicLink(int|string $key, null|string|Throwable $description = null): static;

    public function keyTime(int|string $key, string $format = 'H:i:s', null|string|Throwable $description = null): static;

    public function keyTld(int|string $key, null|string|Throwable $description = null): static;

    public function keyTrueVal(int|string $key, null|string|Throwable $description = null): static;

    public function keyType(int|string $key, string $type, null|string|Throwable $description = null): static;

    public function keyUnique(int|string $key, null|string|Throwable $description = null): static;

    public function keyUploaded(int|string $key, null|string|Throwable $description = null): static;

    public function keyUppercase(int|string $key, null|string|Throwable $description = null): static;

    public function keyUrl(int|string $key, null|string|Throwable $description = null): static;

    public function keyUuid(int|string $key, ?int $version = null, null|string|Throwable $description = null): static;

    public function keyVersion(int|string $key, null|string|Throwable $description = null): static;

    public function keyVideoUrl(int|string $key, ?string $service = null, null|string|Throwable $description = null): static;

    public function keyVowel(int|string $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyWritable(int|string $key, null|string|Throwable $description = null): static;

    public function keyXdigit(int|string $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyYes(int|string $key, bool $useLocale = false, null|string|Throwable $description = null): static;

    public function keyNotAlnum(int|string $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyNotAlpha(int|string $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyNotArrayType(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotArrayVal(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotBase(int|string $key, int $base, ?string $chars = null, null|string|Throwable $description = null): static;

    public function keyNotBase64(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotBetween(int|string $key, mixed $minimum, mixed $maximum, null|string|Throwable $description = null): static;

    public function keyNotBic(int|string $key, string $countryCode, null|string|Throwable $description = null): static;

    public function keyNotBoolType(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotBoolVal(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotBsn(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotCallableType(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotCallback(int|string $key, callable $callback, null|string|Throwable $description = null): static;

    public function keyNotCharset(int|string $key, string $charset = '', null|string|Throwable $description = null): static;

    public function keyNotCnh(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotCnpj(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotControl(int|string $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyNotConsonant(int|string $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyNotContains(int|string $key, mixed $containsValue, bool $identical = false, null|string|Throwable $description = null): static;

    /**
    * @param mixed[] $needles
    */
    public function keyNotContainsAny(int|string $key, array $needles, bool $strictCompareArray = false, null|string|Throwable $description = null): static;

    public function keyNotCountable(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotCountryCode(int|string $key, ?string $set = null, null|string|Throwable $description = null): static;

    public function keyNotCurrencyCode(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotCpf(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotCreditCard(int|string $key, ?string $brand = null, null|string|Throwable $description = null): static;

    public function keyNotDate(int|string $key, string $format = 'Y-m-d', null|string|Throwable $description = null): static;

    public function keyNotDateTime(int|string $key, ?string $format = null, null|string|Throwable $description = null): static;

    public function keyNotDecimal(int|string $key, int $decimals, null|string|Throwable $description = null): static;

    public function keyNotDigit(int|string $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyNotDirectory(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotDomain(int|string $key, bool $tldCheck = true, null|string|Throwable $description = null): static;

    public function keyNotEmail(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotEndsWith(int|string $key, mixed $endValue, bool $identical = false, null|string|Throwable $description = null): static;

    public function keyNotEquals(int|string $key, mixed $compareTo, null|string|Throwable $description = null): static;

    public function keyNotEquivalent(int|string $key, mixed $compareTo, null|string|Throwable $description = null): static;

    public function keyNotEven(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotExecutable(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotExists(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotExtension(int|string $key, string $extension, null|string|Throwable $description = null): static;

    public function keyNotFactor(int|string $key, int $dividend, null|string|Throwable $description = null): static;

    public function keyNotFalseVal(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotFibonacci(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotFile(int|string $key, null|string|Throwable $description = null): static;

    /**
    * @param mixed[]|int $options
    */
    public function keyNotFilterVar(int|string $key, int $filter, array|int|null $options = null, null|string|Throwable $description = null): static;

    public function keyNotFinite(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotFloatVal(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotFloatType(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotGraph(int|string $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyNotGreaterThan(int|string $key, mixed $compareTo, null|string|Throwable $description = null): static;

    public function keyNotHexRgbColor(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotIban(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotIdentical(int|string $key, mixed $compareTo, null|string|Throwable $description = null): static;

    public function keyNotImage(int|string $key, ?finfo $fileInfo = null, null|string|Throwable $description = null): static;

    public function keyNotImei(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotIn(int|string $key, mixed $haystack, bool $compareIdentical = false, null|string|Throwable $description = null): static;

    public function keyNotInfinite(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotInstance(int|string $key, string $instanceName, null|string|Throwable $description = null): static;

    public function keyNotIntVal(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotIntType(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotIp(int|string $key, string $range = '*', ?int $options = null, null|string|Throwable $description = null): static;

    public function keyNotIsbn(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotIterableType(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotJson(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotLanguageCode(int|string $key, ?string $set = null, null|string|Throwable $description = null): static;

    public function keyNotLeapDate(int|string $key, string $format, null|string|Throwable $description = null): static;

    public function keyNotLeapYear(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotLowercase(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotLessThan(int|string $key, mixed $compareTo, null|string|Throwable $description = null): static;

    public function keyNotLuhn(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotMacAddress(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotMaxAge(int|string $key, int $age, ?string $format = null, null|string|Throwable $description = null): static;

    public function keyNotMimetype(int|string $key, string $mimetype, null|string|Throwable $description = null): static;

    public function keyNotMinAge(int|string $key, int $age, ?string $format = null, null|string|Throwable $description = null): static;

    public function keyNotMultiple(int|string $key, int $multipleOf, null|string|Throwable $description = null): static;

    public function keyNotNegative(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotNfeAccessKey(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotNif(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotNip(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotNo(int|string $key, bool $useLocale = false, null|string|Throwable $description = null): static;

    public function keyNotNoWhitespace(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotNullType(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotNumber(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotNumericVal(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotObjectType(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotOdd(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotPerfectSquare(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotPesel(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotPhone(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotPhpLabel(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotPis(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotPolishIdCard(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotPositive(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotPostalCode(int|string $key, string $countryCode, null|string|Throwable $description = null): static;

    public function keyNotPrimeNumber(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotPrintable(int|string $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyNotPunct(int|string $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyNotReadable(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotRegex(int|string $key, string $regex, null|string|Throwable $description = null): static;

    public function keyNotResourceType(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotRoman(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotScalarVal(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotSize(int|string $key, ?string $minSize = null, ?string $maxSize = null, null|string|Throwable $description = null): static;

    public function keyNotSlug(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotSorted(int|string $key, string $direction, null|string|Throwable $description = null): static;

    public function keyNotSpace(int|string $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyNotStartsWith(int|string $key, mixed $startValue, bool $identical = false, null|string|Throwable $description = null): static;

    public function keyNotStringType(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotStringVal(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotSubdivisionCode(int|string $key, string $countryCode, null|string|Throwable $description = null): static;

    /**
    * @param mixed[] $superset
    */
    public function keyNotSubset(int|string $key, array $superset, null|string|Throwable $description = null): static;

    public function keyNotSymbolicLink(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotTime(int|string $key, string $format = 'H:i:s', null|string|Throwable $description = null): static;

    public function keyNotTld(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotTrueVal(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotType(int|string $key, string $type, null|string|Throwable $description = null): static;

    public function keyNotUnique(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotUploaded(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotUppercase(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotUrl(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotUuid(int|string $key, ?int $version = null, null|string|Throwable $description = null): static;

    public function keyNotVersion(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotVideoUrl(int|string $key, ?string $service = null, null|string|Throwable $description = null): static;

    public function keyNotVowel(int|string $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyNotWritable(int|string $key, null|string|Throwable $description = null): static;

    public function keyNotXdigit(int|string $key, string $additionalChars = '', null|string|Throwable $description = null): static;

    public function keyNotYes(int|string $key, bool $useLocale = false, null|string|Throwable $description = null): static;
}
