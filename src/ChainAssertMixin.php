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
interface ChainAssertMixin
{
    public function alnum(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function alpha(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function arrayType(Throwable|string|null $description = null): self;

    public function arrayVal(Throwable|string|null $description = null): self;

    public function base(int $base, ?string $chars = null, Throwable|string|null $description = null): self;

    public function base64(Throwable|string|null $description = null): self;

    public function between(mixed $minimum, mixed $maximum, Throwable|string|null $description = null): self;

    public function bic(string $countryCode, Throwable|string|null $description = null): self;

    public function boolType(Throwable|string|null $description = null): self;

    public function boolVal(Throwable|string|null $description = null): self;

    public function bsn(Throwable|string|null $description = null): self;

    public function callableType(Throwable|string|null $description = null): self;

    public function callback(callable $callback, Throwable|string|null $description = null): self;

    public function charset(string $charset = '', Throwable|string|null $description = null): self;

    public function cnh(Throwable|string|null $description = null): self;

    public function cnpj(Throwable|string|null $description = null): self;

    public function control(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function consonant(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function contains(mixed $containsValue, bool $identical = false, Throwable|string|null $description = null): self;

    /**
    * @param mixed[] $needles
    */
    public function containsAny(array $needles, bool $strictCompareArray = false, Throwable|string|null $description = null): self;

    public function countable(Throwable|string|null $description = null): self;

    public function countryCode(?string $set = null, Throwable|string|null $description = null): self;

    public function currencyCode(Throwable|string|null $description = null): self;

    public function cpf(Throwable|string|null $description = null): self;

    public function creditCard(?string $brand = null, Throwable|string|null $description = null): self;

    public function date(string $format = 'Y-m-d', Throwable|string|null $description = null): self;

    public function dateTime(?string $format = null, Throwable|string|null $description = null): self;

    public function decimal(int $decimals, Throwable|string|null $description = null): self;

    public function digit(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function directory(Throwable|string|null $description = null): self;

    public function domain(bool $tldCheck = true, Throwable|string|null $description = null): self;

    public function email(Throwable|string|null $description = null): self;

    public function endsWith(mixed $endValue, bool $identical = false, Throwable|string|null $description = null): self;

    public function equals(mixed $compareTo, Throwable|string|null $description = null): self;

    public function equivalent(mixed $compareTo, Throwable|string|null $description = null): self;

    public function even(Throwable|string|null $description = null): self;

    public function executable(Throwable|string|null $description = null): self;

    public function exists(Throwable|string|null $description = null): self;

    public function extension(string $extension, Throwable|string|null $description = null): self;

    public function factor(int $dividend, Throwable|string|null $description = null): self;

    public function falseVal(Throwable|string|null $description = null): self;

    public function fibonacci(Throwable|string|null $description = null): self;

    public function file(Throwable|string|null $description = null): self;

    /**
    * @param mixed[]|int $options
    */
    public function filterVar(int $filter, array|int|null $options = null, Throwable|string|null $description = null): self;

    public function finite(Throwable|string|null $description = null): self;

    public function floatVal(Throwable|string|null $description = null): self;

    public function floatType(Throwable|string|null $description = null): self;

    public function graph(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function greaterThan(mixed $compareTo, Throwable|string|null $description = null): self;

    public function hexRgbColor(Throwable|string|null $description = null): self;

    public function iban(Throwable|string|null $description = null): self;

    public function identical(mixed $compareTo, Throwable|string|null $description = null): self;

    public function image(?finfo $fileInfo = null, Throwable|string|null $description = null): self;

    public function imei(Throwable|string|null $description = null): self;

    public function in(mixed $haystack, bool $compareIdentical = false, Throwable|string|null $description = null): self;

    public function infinite(Throwable|string|null $description = null): self;

    public function instance(string $instanceName, Throwable|string|null $description = null): self;

    public function intVal(Throwable|string|null $description = null): self;

    public function intType(Throwable|string|null $description = null): self;

    public function ip(string $range = '*', ?int $options = null, Throwable|string|null $description = null): self;

    public function isbn(Throwable|string|null $description = null): self;

    public function iterableType(Throwable|string|null $description = null): self;

    public function json(Throwable|string|null $description = null): self;

    public function languageCode(?string $set = null, Throwable|string|null $description = null): self;

    public function leapDate(string $format, Throwable|string|null $description = null): self;

    public function leapYear(Throwable|string|null $description = null): self;

    public function lowercase(Throwable|string|null $description = null): self;

    public function lessThan(mixed $compareTo, Throwable|string|null $description = null): self;

    public function luhn(Throwable|string|null $description = null): self;

    public function macAddress(Throwable|string|null $description = null): self;

    public function maxAge(int $age, ?string $format = null, Throwable|string|null $description = null): self;

    public function mimetype(string $mimetype, Throwable|string|null $description = null): self;

    public function minAge(int $age, ?string $format = null, Throwable|string|null $description = null): self;

    public function multiple(int $multipleOf, Throwable|string|null $description = null): self;

    public function negative(Throwable|string|null $description = null): self;

    public function nfeAccessKey(Throwable|string|null $description = null): self;

    public function nif(Throwable|string|null $description = null): self;

    public function nip(Throwable|string|null $description = null): self;

    public function no(bool $useLocale = false, Throwable|string|null $description = null): self;

    public function notBlank(Throwable|string|null $description = null): self;

    public function notEmoji(Throwable|string|null $description = null): self;

    public function notEmpty(Throwable|string|null $description = null): self;

    public function notOptional(Throwable|string|null $description = null): self;

    public function noWhitespace(Throwable|string|null $description = null): self;

    public function nullType(Throwable|string|null $description = null): self;

    public function number(Throwable|string|null $description = null): self;

    public function numericVal(Throwable|string|null $description = null): self;

    public function objectType(Throwable|string|null $description = null): self;

    public function odd(Throwable|string|null $description = null): self;

    public function perfectSquare(Throwable|string|null $description = null): self;

    public function pesel(Throwable|string|null $description = null): self;

    public function phone(Throwable|string|null $description = null): self;

    public function phpLabel(Throwable|string|null $description = null): self;

    public function pis(Throwable|string|null $description = null): self;

    public function polishIdCard(Throwable|string|null $description = null): self;

    public function positive(Throwable|string|null $description = null): self;

    public function postalCode(string $countryCode, Throwable|string|null $description = null): self;

    public function primeNumber(Throwable|string|null $description = null): self;

    public function printable(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function punct(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function readable(Throwable|string|null $description = null): self;

    public function regex(string $regex, Throwable|string|null $description = null): self;

    public function resourceType(Throwable|string|null $description = null): self;

    public function roman(Throwable|string|null $description = null): self;

    public function scalarVal(Throwable|string|null $description = null): self;

    public function size(?string $minSize = null, ?string $maxSize = null, Throwable|string|null $description = null): self;

    public function slug(Throwable|string|null $description = null): self;

    public function sorted(string $direction, Throwable|string|null $description = null): self;

    public function space(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function startsWith(mixed $startValue, bool $identical = false, Throwable|string|null $description = null): self;

    public function stringType(Throwable|string|null $description = null): self;

    public function stringVal(Throwable|string|null $description = null): self;

    public function subdivisionCode(string $countryCode, Throwable|string|null $description = null): self;

    /**
    * @param mixed[] $superset
    */
    public function subset(array $superset, Throwable|string|null $description = null): self;

    public function symbolicLink(Throwable|string|null $description = null): self;

    public function time(string $format = 'H:i:s', Throwable|string|null $description = null): self;

    public function tld(Throwable|string|null $description = null): self;

    public function trueVal(Throwable|string|null $description = null): self;

    public function type(string $type, Throwable|string|null $description = null): self;

    public function unique(Throwable|string|null $description = null): self;

    public function uploaded(Throwable|string|null $description = null): self;

    public function uppercase(Throwable|string|null $description = null): self;

    public function url(Throwable|string|null $description = null): self;

    public function uuid(?int $version = null, Throwable|string|null $description = null): self;

    public function version(Throwable|string|null $description = null): self;

    public function videoUrl(?string $service = null, Throwable|string|null $description = null): self;

    public function vowel(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function writable(Throwable|string|null $description = null): self;

    public function xdigit(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function yes(bool $useLocale = false, Throwable|string|null $description = null): self;

    public function allAlnum(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function allAlpha(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function allArrayType(Throwable|string|null $description = null): self;

    public function allArrayVal(Throwable|string|null $description = null): self;

    public function allBase(int $base, ?string $chars = null, Throwable|string|null $description = null): self;

    public function allBase64(Throwable|string|null $description = null): self;

    public function allBetween(mixed $minimum, mixed $maximum, Throwable|string|null $description = null): self;

    public function allBic(string $countryCode, Throwable|string|null $description = null): self;

    public function allBoolType(Throwable|string|null $description = null): self;

    public function allBoolVal(Throwable|string|null $description = null): self;

    public function allBsn(Throwable|string|null $description = null): self;

    public function allCallableType(Throwable|string|null $description = null): self;

    public function allCallback(callable $callback, Throwable|string|null $description = null): self;

    public function allCharset(string $charset = '', Throwable|string|null $description = null): self;

    public function allCnh(Throwable|string|null $description = null): self;

    public function allCnpj(Throwable|string|null $description = null): self;

    public function allControl(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function allConsonant(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function allContains(mixed $containsValue, bool $identical = false, Throwable|string|null $description = null): self;

    /**
    * @param mixed[] $needles
    */
    public function allContainsAny(array $needles, bool $strictCompareArray = false, Throwable|string|null $description = null): self;

    public function allCountable(Throwable|string|null $description = null): self;

    public function allCountryCode(?string $set = null, Throwable|string|null $description = null): self;

    public function allCurrencyCode(Throwable|string|null $description = null): self;

    public function allCpf(Throwable|string|null $description = null): self;

    public function allCreditCard(?string $brand = null, Throwable|string|null $description = null): self;

    public function allDate(string $format = 'Y-m-d', Throwable|string|null $description = null): self;

    public function allDateTime(?string $format = null, Throwable|string|null $description = null): self;

    public function allDecimal(int $decimals, Throwable|string|null $description = null): self;

    public function allDigit(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function allDirectory(Throwable|string|null $description = null): self;

    public function allDomain(bool $tldCheck = true, Throwable|string|null $description = null): self;

    public function allEmail(Throwable|string|null $description = null): self;

    public function allEndsWith(mixed $endValue, bool $identical = false, Throwable|string|null $description = null): self;

    public function all(mixed $compareTo, Throwable|string|null $description = null): self;

    public function allEquivalent(mixed $compareTo, Throwable|string|null $description = null): self;

    public function allEven(Throwable|string|null $description = null): self;

    public function allExecutable(Throwable|string|null $description = null): self;

    public function allExists(Throwable|string|null $description = null): self;

    public function allExtension(string $extension, Throwable|string|null $description = null): self;

    public function allFactor(int $dividend, Throwable|string|null $description = null): self;

    public function allFalseVal(Throwable|string|null $description = null): self;

    public function allFibonacci(Throwable|string|null $description = null): self;

    public function allFile(Throwable|string|null $description = null): self;

    /**
    * @param mixed[]|int $options
    */
    public function allFilterVar(int $filter, array|int|null $options = null, Throwable|string|null $description = null): self;

    public function allFinite(Throwable|string|null $description = null): self;

    public function allFloatVal(Throwable|string|null $description = null): self;

    public function allFloatType(Throwable|string|null $description = null): self;

    public function allGraph(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function allGreaterThan(mixed $compareTo, Throwable|string|null $description = null): self;

    public function allHexRgbColor(Throwable|string|null $description = null): self;

    public function allIban(Throwable|string|null $description = null): self;

    public function allIdentical(mixed $compareTo, Throwable|string|null $description = null): self;

    public function allImage(?finfo $fileInfo = null, Throwable|string|null $description = null): self;

    public function allImei(Throwable|string|null $description = null): self;

    public function allIn(mixed $haystack, bool $compareIdentical = false, Throwable|string|null $description = null): self;

    public function allInfinite(Throwable|string|null $description = null): self;

    public function allInstance(string $instanceName, Throwable|string|null $description = null): self;

    public function allIntVal(Throwable|string|null $description = null): self;

    public function allIntType(Throwable|string|null $description = null): self;

    public function allIp(string $range = '*', ?int $options = null, Throwable|string|null $description = null): self;

    public function allIsbn(Throwable|string|null $description = null): self;

    public function allIterableType(Throwable|string|null $description = null): self;

    public function allJson(Throwable|string|null $description = null): self;

    public function allLanguageCode(?string $set = null, Throwable|string|null $description = null): self;

    public function allLeapDate(string $format, Throwable|string|null $description = null): self;

    public function allLeapYear(Throwable|string|null $description = null): self;

    public function allLowercase(Throwable|string|null $description = null): self;

    public function allLessThan(mixed $compareTo, Throwable|string|null $description = null): self;

    public function allLuhn(Throwable|string|null $description = null): self;

    public function allMacAddress(Throwable|string|null $description = null): self;

    public function allMaxAge(int $age, ?string $format = null, Throwable|string|null $description = null): self;

    public function allMimetype(string $mimetype, Throwable|string|null $description = null): self;

    public function allMinAge(int $age, ?string $format = null, Throwable|string|null $description = null): self;

    public function allMultiple(int $multipleOf, Throwable|string|null $description = null): self;

    public function allNegative(Throwable|string|null $description = null): self;

    public function allNfeAccessKey(Throwable|string|null $description = null): self;

    public function allNif(Throwable|string|null $description = null): self;

    public function allNip(Throwable|string|null $description = null): self;

    public function allNo(bool $useLocale = false, Throwable|string|null $description = null): self;

    public function allNotBlank(Throwable|string|null $description = null): self;

    public function allNotEmoji(Throwable|string|null $description = null): self;

    public function allNotEmpty(Throwable|string|null $description = null): self;

    public function allNotOptional(Throwable|string|null $description = null): self;

    public function allNoWhitespace(Throwable|string|null $description = null): self;

    public function allNullType(Throwable|string|null $description = null): self;

    public function allNumber(Throwable|string|null $description = null): self;

    public function allNumericVal(Throwable|string|null $description = null): self;

    public function allObjectType(Throwable|string|null $description = null): self;

    public function allOdd(Throwable|string|null $description = null): self;

    public function allPerfectSquare(Throwable|string|null $description = null): self;

    public function allPesel(Throwable|string|null $description = null): self;

    public function allPhone(Throwable|string|null $description = null): self;

    public function allPhpLabel(Throwable|string|null $description = null): self;

    public function allPis(Throwable|string|null $description = null): self;

    public function allPolishIdCard(Throwable|string|null $description = null): self;

    public function allPositive(Throwable|string|null $description = null): self;

    public function allPostalCode(string $countryCode, Throwable|string|null $description = null): self;

    public function allPrimeNumber(Throwable|string|null $description = null): self;

    public function allPrintable(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function allPunct(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function allReadable(Throwable|string|null $description = null): self;

    public function allRegex(string $regex, Throwable|string|null $description = null): self;

    public function allResourceType(Throwable|string|null $description = null): self;

    public function allRoman(Throwable|string|null $description = null): self;

    public function allScalarVal(Throwable|string|null $description = null): self;

    public function allSize(?string $minSize = null, ?string $maxSize = null, Throwable|string|null $description = null): self;

    public function allSlug(Throwable|string|null $description = null): self;

    public function allSorted(string $direction, Throwable|string|null $description = null): self;

    public function allSpace(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function allStartsWith(mixed $startValue, bool $identical = false, Throwable|string|null $description = null): self;

    public function allStringType(Throwable|string|null $description = null): self;

    public function allStringVal(Throwable|string|null $description = null): self;

    public function allSubdivisionCode(string $countryCode, Throwable|string|null $description = null): self;

    /**
    * @param mixed[] $superset
    */
    public function allSubset(array $superset, Throwable|string|null $description = null): self;

    public function allSymbolicLink(Throwable|string|null $description = null): self;

    public function allTime(string $format = 'H:i:s', Throwable|string|null $description = null): self;

    public function allTld(Throwable|string|null $description = null): self;

    public function allTrueVal(Throwable|string|null $description = null): self;

    public function allType(string $type, Throwable|string|null $description = null): self;

    public function allUnique(Throwable|string|null $description = null): self;

    public function allUploaded(Throwable|string|null $description = null): self;

    public function allUppercase(Throwable|string|null $description = null): self;

    public function allUrl(Throwable|string|null $description = null): self;

    public function allUuid(?int $version = null, Throwable|string|null $description = null): self;

    public function allVersion(Throwable|string|null $description = null): self;

    public function allVideoUrl(?string $service = null, Throwable|string|null $description = null): self;

    public function allVowel(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function allWritable(Throwable|string|null $description = null): self;

    public function allXdigit(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function allYes(bool $useLocale = false, Throwable|string|null $description = null): self;

    public function allNotAlnum(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function allNotAlpha(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function allNotArrayType(Throwable|string|null $description = null): self;

    public function allNotArrayVal(Throwable|string|null $description = null): self;

    public function allNotBase(int $base, ?string $chars = null, Throwable|string|null $description = null): self;

    public function allNotBase64(Throwable|string|null $description = null): self;

    public function allNotBetween(mixed $minimum, mixed $maximum, Throwable|string|null $description = null): self;

    public function allNotBic(string $countryCode, Throwable|string|null $description = null): self;

    public function allNotBoolType(Throwable|string|null $description = null): self;

    public function allNotBoolVal(Throwable|string|null $description = null): self;

    public function allNotBsn(Throwable|string|null $description = null): self;

    public function allNotCallableType(Throwable|string|null $description = null): self;

    public function allNotCallback(callable $callback, Throwable|string|null $description = null): self;

    public function allNotCharset(string $charset = '', Throwable|string|null $description = null): self;

    public function allNotCnh(Throwable|string|null $description = null): self;

    public function allNotCnpj(Throwable|string|null $description = null): self;

    public function allNotControl(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function allNotConsonant(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function allNotContains(mixed $containsValue, bool $identical = false, Throwable|string|null $description = null): self;

    /**
    * @param mixed[] $needles
    */
    public function allNotContainsAny(array $needles, bool $strictCompareArray = false, Throwable|string|null $description = null): self;

    public function allNotCountable(Throwable|string|null $description = null): self;

    public function allNotCountryCode(?string $set = null, Throwable|string|null $description = null): self;

    public function allNotCurrencyCode(Throwable|string|null $description = null): self;

    public function allNotCpf(Throwable|string|null $description = null): self;

    public function allNotCreditCard(?string $brand = null, Throwable|string|null $description = null): self;

    public function allNotDate(string $format = 'Y-m-d', Throwable|string|null $description = null): self;

    public function allNotDateTime(?string $format = null, Throwable|string|null $description = null): self;

    public function allNotDecimal(int $decimals, Throwable|string|null $description = null): self;

    public function allNotDigit(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function allNotDirectory(Throwable|string|null $description = null): self;

    public function allNotDomain(bool $tldCheck = true, Throwable|string|null $description = null): self;

    public function allNotEmail(Throwable|string|null $description = null): self;

    public function allNotEndsWith(mixed $endValue, bool $identical = false, Throwable|string|null $description = null): self;

    public function allNot(mixed $compareTo, Throwable|string|null $description = null): self;

    public function allNotEquivalent(mixed $compareTo, Throwable|string|null $description = null): self;

    public function allNotEven(Throwable|string|null $description = null): self;

    public function allNotExecutable(Throwable|string|null $description = null): self;

    public function allNotExists(Throwable|string|null $description = null): self;

    public function allNotExtension(string $extension, Throwable|string|null $description = null): self;

    public function allNotFactor(int $dividend, Throwable|string|null $description = null): self;

    public function allNotFalseVal(Throwable|string|null $description = null): self;

    public function allNotFibonacci(Throwable|string|null $description = null): self;

    public function allNotFile(Throwable|string|null $description = null): self;

    /**
    * @param mixed[]|int $options
    */
    public function allNotFilterVar(int $filter, array|int|null $options = null, Throwable|string|null $description = null): self;

    public function allNotFinite(Throwable|string|null $description = null): self;

    public function allNotFloatVal(Throwable|string|null $description = null): self;

    public function allNotFloatType(Throwable|string|null $description = null): self;

    public function allNotGraph(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function allNotGreaterThan(mixed $compareTo, Throwable|string|null $description = null): self;

    public function allNotHexRgbColor(Throwable|string|null $description = null): self;

    public function allNotIban(Throwable|string|null $description = null): self;

    public function allNotIdentical(mixed $compareTo, Throwable|string|null $description = null): self;

    public function allNotImage(?finfo $fileInfo = null, Throwable|string|null $description = null): self;

    public function allNotImei(Throwable|string|null $description = null): self;

    public function allNotIn(mixed $haystack, bool $compareIdentical = false, Throwable|string|null $description = null): self;

    public function allNotInfinite(Throwable|string|null $description = null): self;

    public function allNotInstance(string $instanceName, Throwable|string|null $description = null): self;

    public function allNotIntVal(Throwable|string|null $description = null): self;

    public function allNotIntType(Throwable|string|null $description = null): self;

    public function allNotIp(string $range = '*', ?int $options = null, Throwable|string|null $description = null): self;

    public function allNotIsbn(Throwable|string|null $description = null): self;

    public function allNotIterableType(Throwable|string|null $description = null): self;

    public function allNotJson(Throwable|string|null $description = null): self;

    public function allNotLanguageCode(?string $set = null, Throwable|string|null $description = null): self;

    public function allNotLeapDate(string $format, Throwable|string|null $description = null): self;

    public function allNotLeapYear(Throwable|string|null $description = null): self;

    public function allNotLowercase(Throwable|string|null $description = null): self;

    public function allNotLessThan(mixed $compareTo, Throwable|string|null $description = null): self;

    public function allNotLuhn(Throwable|string|null $description = null): self;

    public function allNotMacAddress(Throwable|string|null $description = null): self;

    public function allNotMaxAge(int $age, ?string $format = null, Throwable|string|null $description = null): self;

    public function allNotMimetype(string $mimetype, Throwable|string|null $description = null): self;

    public function allNotMinAge(int $age, ?string $format = null, Throwable|string|null $description = null): self;

    public function allNotMultiple(int $multipleOf, Throwable|string|null $description = null): self;

    public function allNotNegative(Throwable|string|null $description = null): self;

    public function allNotNfeAccessKey(Throwable|string|null $description = null): self;

    public function allNotNif(Throwable|string|null $description = null): self;

    public function allNotNip(Throwable|string|null $description = null): self;

    public function allNotNo(bool $useLocale = false, Throwable|string|null $description = null): self;

    public function allNotNotBlank(Throwable|string|null $description = null): self;

    public function allNotNotEmoji(Throwable|string|null $description = null): self;

    public function allNotNotEmpty(Throwable|string|null $description = null): self;

    public function allNotNotOptional(Throwable|string|null $description = null): self;

    public function allNotNoWhitespace(Throwable|string|null $description = null): self;

    public function allNotNullType(Throwable|string|null $description = null): self;

    public function allNotNumber(Throwable|string|null $description = null): self;

    public function allNotNumericVal(Throwable|string|null $description = null): self;

    public function allNotObjectType(Throwable|string|null $description = null): self;

    public function allNotOdd(Throwable|string|null $description = null): self;

    public function allNotPerfectSquare(Throwable|string|null $description = null): self;

    public function allNotPesel(Throwable|string|null $description = null): self;

    public function allNotPhone(Throwable|string|null $description = null): self;

    public function allNotPhpLabel(Throwable|string|null $description = null): self;

    public function allNotPis(Throwable|string|null $description = null): self;

    public function allNotPolishIdCard(Throwable|string|null $description = null): self;

    public function allNotPositive(Throwable|string|null $description = null): self;

    public function allNotPostalCode(string $countryCode, Throwable|string|null $description = null): self;

    public function allNotPrimeNumber(Throwable|string|null $description = null): self;

    public function allNotPrintable(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function allNotPunct(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function allNotReadable(Throwable|string|null $description = null): self;

    public function allNotRegex(string $regex, Throwable|string|null $description = null): self;

    public function allNotResourceType(Throwable|string|null $description = null): self;

    public function allNotRoman(Throwable|string|null $description = null): self;

    public function allNotScalarVal(Throwable|string|null $description = null): self;

    public function allNotSize(?string $minSize = null, ?string $maxSize = null, Throwable|string|null $description = null): self;

    public function allNotSlug(Throwable|string|null $description = null): self;

    public function allNotSorted(string $direction, Throwable|string|null $description = null): self;

    public function allNotSpace(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function allNotStartsWith(mixed $startValue, bool $identical = false, Throwable|string|null $description = null): self;

    public function allNotStringType(Throwable|string|null $description = null): self;

    public function allNotStringVal(Throwable|string|null $description = null): self;

    public function allNotSubdivisionCode(string $countryCode, Throwable|string|null $description = null): self;

    /**
    * @param mixed[] $superset
    */
    public function allNotSubset(array $superset, Throwable|string|null $description = null): self;

    public function allNotSymbolicLink(Throwable|string|null $description = null): self;

    public function allNotTime(string $format = 'H:i:s', Throwable|string|null $description = null): self;

    public function allNotTld(Throwable|string|null $description = null): self;

    public function allNotTrueVal(Throwable|string|null $description = null): self;

    public function allNotType(string $type, Throwable|string|null $description = null): self;

    public function allNotUnique(Throwable|string|null $description = null): self;

    public function allNotUploaded(Throwable|string|null $description = null): self;

    public function allNotUppercase(Throwable|string|null $description = null): self;

    public function allNotUrl(Throwable|string|null $description = null): self;

    public function allNotUuid(?int $version = null, Throwable|string|null $description = null): self;

    public function allNotVersion(Throwable|string|null $description = null): self;

    public function allNotVideoUrl(?string $service = null, Throwable|string|null $description = null): self;

    public function allNotVowel(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function allNotWritable(Throwable|string|null $description = null): self;

    public function allNotXdigit(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function allNotYes(bool $useLocale = false, Throwable|string|null $description = null): self;

    public function keyAlnum(mixed $key, string $additionalChars = '', Throwable|string|null $description = null): self;

    public function keyAlpha(mixed $key, string $additionalChars = '', Throwable|string|null $description = null): self;

    public function keyArrayType(mixed $key, Throwable|string|null $description = null): self;

    public function keyArrayVal(mixed $key, Throwable|string|null $description = null): self;

    public function keyBase(mixed $key, int $base, ?string $chars = null, Throwable|string|null $description = null): self;

    public function keyBase64(mixed $key, Throwable|string|null $description = null): self;

    public function keyBetween(mixed $key, mixed $minimum, mixed $maximum, Throwable|string|null $description = null): self;

    public function keyBic(mixed $key, string $countryCode, Throwable|string|null $description = null): self;

    public function keyBoolType(mixed $key, Throwable|string|null $description = null): self;

    public function keyBoolVal(mixed $key, Throwable|string|null $description = null): self;

    public function keyBsn(mixed $key, Throwable|string|null $description = null): self;

    public function keyCallableType(mixed $key, Throwable|string|null $description = null): self;

    public function keyCallback(mixed $key, callable $callback, Throwable|string|null $description = null): self;

    public function keyCharset(mixed $key, string $charset = '', Throwable|string|null $description = null): self;

    public function keyCnh(mixed $key, Throwable|string|null $description = null): self;

    public function keyCnpj(mixed $key, Throwable|string|null $description = null): self;

    public function keyControl(mixed $key, string $additionalChars = '', Throwable|string|null $description = null): self;

    public function keyConsonant(mixed $key, string $additionalChars = '', Throwable|string|null $description = null): self;

    public function keyContains(mixed $key, mixed $containsValue, bool $identical = false, Throwable|string|null $description = null): self;

    /**
    * @param mixed[] $needles
    */
    public function keyContainsAny(mixed $key, array $needles, bool $strictCompareArray = false, Throwable|string|null $description = null): self;

    public function keyCountable(mixed $key, Throwable|string|null $description = null): self;

    public function keyCountryCode(mixed $key, ?string $set = null, Throwable|string|null $description = null): self;

    public function keyCurrencyCode(mixed $key, Throwable|string|null $description = null): self;

    public function keyCpf(mixed $key, Throwable|string|null $description = null): self;

    public function keyCreditCard(mixed $key, ?string $brand = null, Throwable|string|null $description = null): self;

    public function keyDate(mixed $key, string $format = 'Y-m-d', Throwable|string|null $description = null): self;

    public function keyDateTime(mixed $key, ?string $format = null, Throwable|string|null $description = null): self;

    public function keyDecimal(mixed $key, int $decimals, Throwable|string|null $description = null): self;

    public function keyDigit(mixed $key, string $additionalChars = '', Throwable|string|null $description = null): self;

    public function keyDirectory(mixed $key, Throwable|string|null $description = null): self;

    public function keyDomain(mixed $key, bool $tldCheck = true, Throwable|string|null $description = null): self;

    public function keyEmail(mixed $key, Throwable|string|null $description = null): self;

    public function keyEndsWith(mixed $key, mixed $endValue, bool $identical = false, Throwable|string|null $description = null): self;

    public function key(mixed $key, mixed $compareTo, Throwable|string|null $description = null): self;

    public function keyEquivalent(mixed $key, mixed $compareTo, Throwable|string|null $description = null): self;

    public function keyEven(mixed $key, Throwable|string|null $description = null): self;

    public function keyExecutable(mixed $key, Throwable|string|null $description = null): self;

    public function keyExists(mixed $key, Throwable|string|null $description = null): self;

    public function keyExtension(mixed $key, string $extension, Throwable|string|null $description = null): self;

    public function keyFactor(mixed $key, int $dividend, Throwable|string|null $description = null): self;

    public function keyFalseVal(mixed $key, Throwable|string|null $description = null): self;

    public function keyFibonacci(mixed $key, Throwable|string|null $description = null): self;

    public function keyFile(mixed $key, Throwable|string|null $description = null): self;

    /**
    * @param mixed[]|int $options
    */
    public function keyFilterVar(mixed $key, int $filter, array|int|null $options = null, Throwable|string|null $description = null): self;

    public function keyFinite(mixed $key, Throwable|string|null $description = null): self;

    public function keyFloatVal(mixed $key, Throwable|string|null $description = null): self;

    public function keyFloatType(mixed $key, Throwable|string|null $description = null): self;

    public function keyGraph(mixed $key, string $additionalChars = '', Throwable|string|null $description = null): self;

    public function keyGreaterThan(mixed $key, mixed $compareTo, Throwable|string|null $description = null): self;

    public function keyHexRgbColor(mixed $key, Throwable|string|null $description = null): self;

    public function keyIban(mixed $key, Throwable|string|null $description = null): self;

    public function keyIdentical(mixed $key, mixed $compareTo, Throwable|string|null $description = null): self;

    public function keyImage(mixed $key, ?finfo $fileInfo = null, Throwable|string|null $description = null): self;

    public function keyImei(mixed $key, Throwable|string|null $description = null): self;

    public function keyIn(mixed $key, mixed $haystack, bool $compareIdentical = false, Throwable|string|null $description = null): self;

    public function keyInfinite(mixed $key, Throwable|string|null $description = null): self;

    public function keyInstance(mixed $key, string $instanceName, Throwable|string|null $description = null): self;

    public function keyIntVal(mixed $key, Throwable|string|null $description = null): self;

    public function keyIntType(mixed $key, Throwable|string|null $description = null): self;

    public function keyIp(mixed $key, string $range = '*', ?int $options = null, Throwable|string|null $description = null): self;

    public function keyIsbn(mixed $key, Throwable|string|null $description = null): self;

    public function keyIterableType(mixed $key, Throwable|string|null $description = null): self;

    public function keyJson(mixed $key, Throwable|string|null $description = null): self;

    public function keyLanguageCode(mixed $key, ?string $set = null, Throwable|string|null $description = null): self;

    public function keyLeapDate(mixed $key, string $format, Throwable|string|null $description = null): self;

    public function keyLeapYear(mixed $key, Throwable|string|null $description = null): self;

    public function keyLowercase(mixed $key, Throwable|string|null $description = null): self;

    public function keyLessThan(mixed $key, mixed $compareTo, Throwable|string|null $description = null): self;

    public function keyLuhn(mixed $key, Throwable|string|null $description = null): self;

    public function keyMacAddress(mixed $key, Throwable|string|null $description = null): self;

    public function keyMaxAge(mixed $key, int $age, ?string $format = null, Throwable|string|null $description = null): self;

    public function keyMimetype(mixed $key, string $mimetype, Throwable|string|null $description = null): self;

    public function keyMinAge(mixed $key, int $age, ?string $format = null, Throwable|string|null $description = null): self;

    public function keyMultiple(mixed $key, int $multipleOf, Throwable|string|null $description = null): self;

    public function keyNegative(mixed $key, Throwable|string|null $description = null): self;

    public function keyNfeAccessKey(mixed $key, Throwable|string|null $description = null): self;

    public function keyNif(mixed $key, Throwable|string|null $description = null): self;

    public function keyNip(mixed $key, Throwable|string|null $description = null): self;

    public function keyNo(mixed $key, bool $useLocale = false, Throwable|string|null $description = null): self;

    public function keyNotBlank(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotEmoji(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotEmpty(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotOptional(mixed $key, Throwable|string|null $description = null): self;

    public function keyNoWhitespace(mixed $key, Throwable|string|null $description = null): self;

    public function keyNullType(mixed $key, Throwable|string|null $description = null): self;

    public function keyNumber(mixed $key, Throwable|string|null $description = null): self;

    public function keyNumericVal(mixed $key, Throwable|string|null $description = null): self;

    public function keyObjectType(mixed $key, Throwable|string|null $description = null): self;

    public function keyOdd(mixed $key, Throwable|string|null $description = null): self;

    public function keyPerfectSquare(mixed $key, Throwable|string|null $description = null): self;

    public function keyPesel(mixed $key, Throwable|string|null $description = null): self;

    public function keyPhone(mixed $key, Throwable|string|null $description = null): self;

    public function keyPhpLabel(mixed $key, Throwable|string|null $description = null): self;

    public function keyPis(mixed $key, Throwable|string|null $description = null): self;

    public function keyPolishIdCard(mixed $key, Throwable|string|null $description = null): self;

    public function keyPositive(mixed $key, Throwable|string|null $description = null): self;

    public function keyPostalCode(mixed $key, string $countryCode, Throwable|string|null $description = null): self;

    public function keyPrimeNumber(mixed $key, Throwable|string|null $description = null): self;

    public function keyPrintable(mixed $key, string $additionalChars = '', Throwable|string|null $description = null): self;

    public function keyPunct(mixed $key, string $additionalChars = '', Throwable|string|null $description = null): self;

    public function keyReadable(mixed $key, Throwable|string|null $description = null): self;

    public function keyRegex(mixed $key, string $regex, Throwable|string|null $description = null): self;

    public function keyResourceType(mixed $key, Throwable|string|null $description = null): self;

    public function keyRoman(mixed $key, Throwable|string|null $description = null): self;

    public function keyScalarVal(mixed $key, Throwable|string|null $description = null): self;

    public function keySize(mixed $key, ?string $minSize = null, ?string $maxSize = null, Throwable|string|null $description = null): self;

    public function keySlug(mixed $key, Throwable|string|null $description = null): self;

    public function keySorted(mixed $key, string $direction, Throwable|string|null $description = null): self;

    public function keySpace(mixed $key, string $additionalChars = '', Throwable|string|null $description = null): self;

    public function keyStartsWith(mixed $key, mixed $startValue, bool $identical = false, Throwable|string|null $description = null): self;

    public function keyStringType(mixed $key, Throwable|string|null $description = null): self;

    public function keyStringVal(mixed $key, Throwable|string|null $description = null): self;

    public function keySubdivisionCode(mixed $key, string $countryCode, Throwable|string|null $description = null): self;

    /**
    * @param mixed[] $superset
    */
    public function keySubset(mixed $key, array $superset, Throwable|string|null $description = null): self;

    public function keySymbolicLink(mixed $key, Throwable|string|null $description = null): self;

    public function keyTime(mixed $key, string $format = 'H:i:s', Throwable|string|null $description = null): self;

    public function keyTld(mixed $key, Throwable|string|null $description = null): self;

    public function keyTrueVal(mixed $key, Throwable|string|null $description = null): self;

    public function keyType(mixed $key, string $type, Throwable|string|null $description = null): self;

    public function keyUnique(mixed $key, Throwable|string|null $description = null): self;

    public function keyUploaded(mixed $key, Throwable|string|null $description = null): self;

    public function keyUppercase(mixed $key, Throwable|string|null $description = null): self;

    public function keyUrl(mixed $key, Throwable|string|null $description = null): self;

    public function keyUuid(mixed $key, ?int $version = null, Throwable|string|null $description = null): self;

    public function keyVersion(mixed $key, Throwable|string|null $description = null): self;

    public function keyVideoUrl(mixed $key, ?string $service = null, Throwable|string|null $description = null): self;

    public function keyVowel(mixed $key, string $additionalChars = '', Throwable|string|null $description = null): self;

    public function keyWritable(mixed $key, Throwable|string|null $description = null): self;

    public function keyXdigit(mixed $key, string $additionalChars = '', Throwable|string|null $description = null): self;

    public function keyYes(mixed $key, bool $useLocale = false, Throwable|string|null $description = null): self;

    public function keyPresent(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotAlnum(mixed $key, string $additionalChars = '', Throwable|string|null $description = null): self;

    public function keyNotAlpha(mixed $key, string $additionalChars = '', Throwable|string|null $description = null): self;

    public function keyNotArrayType(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotArrayVal(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotBase(mixed $key, int $base, ?string $chars = null, Throwable|string|null $description = null): self;

    public function keyNotBase64(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotBetween(mixed $key, mixed $minimum, mixed $maximum, Throwable|string|null $description = null): self;

    public function keyNotBic(mixed $key, string $countryCode, Throwable|string|null $description = null): self;

    public function keyNotBoolType(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotBoolVal(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotBsn(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotCallableType(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotCallback(mixed $key, callable $callback, Throwable|string|null $description = null): self;

    public function keyNotCharset(mixed $key, string $charset = '', Throwable|string|null $description = null): self;

    public function keyNotCnh(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotCnpj(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotControl(mixed $key, string $additionalChars = '', Throwable|string|null $description = null): self;

    public function keyNotConsonant(mixed $key, string $additionalChars = '', Throwable|string|null $description = null): self;

    public function keyNotContains(mixed $key, mixed $containsValue, bool $identical = false, Throwable|string|null $description = null): self;

    /**
    * @param mixed[] $needles
    */
    public function keyNotContainsAny(mixed $key, array $needles, bool $strictCompareArray = false, Throwable|string|null $description = null): self;

    public function keyNotCountable(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotCountryCode(mixed $key, ?string $set = null, Throwable|string|null $description = null): self;

    public function keyNotCurrencyCode(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotCpf(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotCreditCard(mixed $key, ?string $brand = null, Throwable|string|null $description = null): self;

    public function keyNotDate(mixed $key, string $format = 'Y-m-d', Throwable|string|null $description = null): self;

    public function keyNotDateTime(mixed $key, ?string $format = null, Throwable|string|null $description = null): self;

    public function keyNotDecimal(mixed $key, int $decimals, Throwable|string|null $description = null): self;

    public function keyNotDigit(mixed $key, string $additionalChars = '', Throwable|string|null $description = null): self;

    public function keyNotDirectory(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotDomain(mixed $key, bool $tldCheck = true, Throwable|string|null $description = null): self;

    public function keyNotEmail(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotEndsWith(mixed $key, mixed $endValue, bool $identical = false, Throwable|string|null $description = null): self;

    public function keyNot(mixed $key, mixed $compareTo, Throwable|string|null $description = null): self;

    public function keyNotEquivalent(mixed $key, mixed $compareTo, Throwable|string|null $description = null): self;

    public function keyNotEven(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotExecutable(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotExists(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotExtension(mixed $key, string $extension, Throwable|string|null $description = null): self;

    public function keyNotFactor(mixed $key, int $dividend, Throwable|string|null $description = null): self;

    public function keyNotFalseVal(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotFibonacci(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotFile(mixed $key, Throwable|string|null $description = null): self;

    /**
    * @param mixed[]|int $options
    */
    public function keyNotFilterVar(mixed $key, int $filter, array|int|null $options = null, Throwable|string|null $description = null): self;

    public function keyNotFinite(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotFloatVal(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotFloatType(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotGraph(mixed $key, string $additionalChars = '', Throwable|string|null $description = null): self;

    public function keyNotGreaterThan(mixed $key, mixed $compareTo, Throwable|string|null $description = null): self;

    public function keyNotHexRgbColor(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotIban(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotIdentical(mixed $key, mixed $compareTo, Throwable|string|null $description = null): self;

    public function keyNotImage(mixed $key, ?finfo $fileInfo = null, Throwable|string|null $description = null): self;

    public function keyNotImei(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotIn(mixed $key, mixed $haystack, bool $compareIdentical = false, Throwable|string|null $description = null): self;

    public function keyNotInfinite(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotInstance(mixed $key, string $instanceName, Throwable|string|null $description = null): self;

    public function keyNotIntVal(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotIntType(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotIp(mixed $key, string $range = '*', ?int $options = null, Throwable|string|null $description = null): self;

    public function keyNotIsbn(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotIterableType(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotJson(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotLanguageCode(mixed $key, ?string $set = null, Throwable|string|null $description = null): self;

    public function keyNotLeapDate(mixed $key, string $format, Throwable|string|null $description = null): self;

    public function keyNotLeapYear(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotLowercase(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotLessThan(mixed $key, mixed $compareTo, Throwable|string|null $description = null): self;

    public function keyNotLuhn(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotMacAddress(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotMaxAge(mixed $key, int $age, ?string $format = null, Throwable|string|null $description = null): self;

    public function keyNotMimetype(mixed $key, string $mimetype, Throwable|string|null $description = null): self;

    public function keyNotMinAge(mixed $key, int $age, ?string $format = null, Throwable|string|null $description = null): self;

    public function keyNotMultiple(mixed $key, int $multipleOf, Throwable|string|null $description = null): self;

    public function keyNotNegative(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotNfeAccessKey(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotNif(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotNip(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotNo(mixed $key, bool $useLocale = false, Throwable|string|null $description = null): self;

    public function keyNotNotBlank(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotNotEmoji(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotNotEmpty(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotNotOptional(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotNoWhitespace(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotNullType(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotNumber(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotNumericVal(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotObjectType(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotOdd(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotPerfectSquare(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotPesel(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotPhone(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotPhpLabel(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotPis(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotPolishIdCard(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotPositive(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotPostalCode(mixed $key, string $countryCode, Throwable|string|null $description = null): self;

    public function keyNotPrimeNumber(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotPrintable(mixed $key, string $additionalChars = '', Throwable|string|null $description = null): self;

    public function keyNotPunct(mixed $key, string $additionalChars = '', Throwable|string|null $description = null): self;

    public function keyNotReadable(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotRegex(mixed $key, string $regex, Throwable|string|null $description = null): self;

    public function keyNotResourceType(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotRoman(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotScalarVal(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotSize(mixed $key, ?string $minSize = null, ?string $maxSize = null, Throwable|string|null $description = null): self;

    public function keyNotSlug(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotSorted(mixed $key, string $direction, Throwable|string|null $description = null): self;

    public function keyNotSpace(mixed $key, string $additionalChars = '', Throwable|string|null $description = null): self;

    public function keyNotStartsWith(mixed $key, mixed $startValue, bool $identical = false, Throwable|string|null $description = null): self;

    public function keyNotStringType(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotStringVal(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotSubdivisionCode(mixed $key, string $countryCode, Throwable|string|null $description = null): self;

    /**
    * @param mixed[] $superset
    */
    public function keyNotSubset(mixed $key, array $superset, Throwable|string|null $description = null): self;

    public function keyNotSymbolicLink(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotTime(mixed $key, string $format = 'H:i:s', Throwable|string|null $description = null): self;

    public function keyNotTld(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotTrueVal(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotType(mixed $key, string $type, Throwable|string|null $description = null): self;

    public function keyNotUnique(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotUploaded(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotUppercase(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotUrl(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotUuid(mixed $key, ?int $version = null, Throwable|string|null $description = null): self;

    public function keyNotVersion(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotVideoUrl(mixed $key, ?string $service = null, Throwable|string|null $description = null): self;

    public function keyNotVowel(mixed $key, string $additionalChars = '', Throwable|string|null $description = null): self;

    public function keyNotWritable(mixed $key, Throwable|string|null $description = null): self;

    public function keyNotXdigit(mixed $key, string $additionalChars = '', Throwable|string|null $description = null): self;

    public function keyNotYes(mixed $key, bool $useLocale = false, Throwable|string|null $description = null): self;

    public function keyNotPresent(mixed $key, Throwable|string|null $description = null): self;

    public function notAlnum(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function notAlpha(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function notArrayType(Throwable|string|null $description = null): self;

    public function notArrayVal(Throwable|string|null $description = null): self;

    public function notBase(int $base, ?string $chars = null, Throwable|string|null $description = null): self;

    public function notBase64(Throwable|string|null $description = null): self;

    public function notBetween(mixed $minimum, mixed $maximum, Throwable|string|null $description = null): self;

    public function notBic(string $countryCode, Throwable|string|null $description = null): self;

    public function notBoolType(Throwable|string|null $description = null): self;

    public function notBoolVal(Throwable|string|null $description = null): self;

    public function notBsn(Throwable|string|null $description = null): self;

    public function notCallableType(Throwable|string|null $description = null): self;

    public function notCallback(callable $callback, Throwable|string|null $description = null): self;

    public function notCharset(string $charset = '', Throwable|string|null $description = null): self;

    public function notCnh(Throwable|string|null $description = null): self;

    public function notCnpj(Throwable|string|null $description = null): self;

    public function notControl(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function notConsonant(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function notContains(mixed $containsValue, bool $identical = false, Throwable|string|null $description = null): self;

    /**
    * @param mixed[] $needles
    */
    public function notContainsAny(array $needles, bool $strictCompareArray = false, Throwable|string|null $description = null): self;

    public function notCountable(Throwable|string|null $description = null): self;

    public function notCountryCode(?string $set = null, Throwable|string|null $description = null): self;

    public function notCurrencyCode(Throwable|string|null $description = null): self;

    public function notCpf(Throwable|string|null $description = null): self;

    public function notCreditCard(?string $brand = null, Throwable|string|null $description = null): self;

    public function notDate(string $format = 'Y-m-d', Throwable|string|null $description = null): self;

    public function notDateTime(?string $format = null, Throwable|string|null $description = null): self;

    public function notDecimal(int $decimals, Throwable|string|null $description = null): self;

    public function notDigit(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function notDirectory(Throwable|string|null $description = null): self;

    public function notDomain(bool $tldCheck = true, Throwable|string|null $description = null): self;

    public function notEmail(Throwable|string|null $description = null): self;

    public function notEndsWith(mixed $endValue, bool $identical = false, Throwable|string|null $description = null): self;

    public function not(mixed $compareTo, Throwable|string|null $description = null): self;

    public function notEquivalent(mixed $compareTo, Throwable|string|null $description = null): self;

    public function notEven(Throwable|string|null $description = null): self;

    public function notExecutable(Throwable|string|null $description = null): self;

    public function notExists(Throwable|string|null $description = null): self;

    public function notExtension(string $extension, Throwable|string|null $description = null): self;

    public function notFactor(int $dividend, Throwable|string|null $description = null): self;

    public function notFalseVal(Throwable|string|null $description = null): self;

    public function notFibonacci(Throwable|string|null $description = null): self;

    public function notFile(Throwable|string|null $description = null): self;

    /**
    * @param mixed[]|int $options
    */
    public function notFilterVar(int $filter, array|int|null $options = null, Throwable|string|null $description = null): self;

    public function notFinite(Throwable|string|null $description = null): self;

    public function notFloatVal(Throwable|string|null $description = null): self;

    public function notFloatType(Throwable|string|null $description = null): self;

    public function notGraph(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function notGreaterThan(mixed $compareTo, Throwable|string|null $description = null): self;

    public function notHexRgbColor(Throwable|string|null $description = null): self;

    public function notIban(Throwable|string|null $description = null): self;

    public function notIdentical(mixed $compareTo, Throwable|string|null $description = null): self;

    public function notImage(?finfo $fileInfo = null, Throwable|string|null $description = null): self;

    public function notImei(Throwable|string|null $description = null): self;

    public function notIn(mixed $haystack, bool $compareIdentical = false, Throwable|string|null $description = null): self;

    public function notInfinite(Throwable|string|null $description = null): self;

    public function notInstance(string $instanceName, Throwable|string|null $description = null): self;

    public function notIntVal(Throwable|string|null $description = null): self;

    public function notIntType(Throwable|string|null $description = null): self;

    public function notIp(string $range = '*', ?int $options = null, Throwable|string|null $description = null): self;

    public function notIsbn(Throwable|string|null $description = null): self;

    public function notIterableType(Throwable|string|null $description = null): self;

    public function notJson(Throwable|string|null $description = null): self;

    public function notLanguageCode(?string $set = null, Throwable|string|null $description = null): self;

    public function notLeapDate(string $format, Throwable|string|null $description = null): self;

    public function notLeapYear(Throwable|string|null $description = null): self;

    public function notLowercase(Throwable|string|null $description = null): self;

    public function notLessThan(mixed $compareTo, Throwable|string|null $description = null): self;

    public function notLuhn(Throwable|string|null $description = null): self;

    public function notMacAddress(Throwable|string|null $description = null): self;

    public function notMaxAge(int $age, ?string $format = null, Throwable|string|null $description = null): self;

    public function notMimetype(string $mimetype, Throwable|string|null $description = null): self;

    public function notMinAge(int $age, ?string $format = null, Throwable|string|null $description = null): self;

    public function notMultiple(int $multipleOf, Throwable|string|null $description = null): self;

    public function notNegative(Throwable|string|null $description = null): self;

    public function notNfeAccessKey(Throwable|string|null $description = null): self;

    public function notNif(Throwable|string|null $description = null): self;

    public function notNip(Throwable|string|null $description = null): self;

    public function notNo(bool $useLocale = false, Throwable|string|null $description = null): self;

    public function notNotBlank(Throwable|string|null $description = null): self;

    public function notNotEmoji(Throwable|string|null $description = null): self;

    public function notNotEmpty(Throwable|string|null $description = null): self;

    public function notNotOptional(Throwable|string|null $description = null): self;

    public function notNoWhitespace(Throwable|string|null $description = null): self;

    public function notNullType(Throwable|string|null $description = null): self;

    public function notNumber(Throwable|string|null $description = null): self;

    public function notNumericVal(Throwable|string|null $description = null): self;

    public function notObjectType(Throwable|string|null $description = null): self;

    public function notOdd(Throwable|string|null $description = null): self;

    public function notPerfectSquare(Throwable|string|null $description = null): self;

    public function notPesel(Throwable|string|null $description = null): self;

    public function notPhone(Throwable|string|null $description = null): self;

    public function notPhpLabel(Throwable|string|null $description = null): self;

    public function notPis(Throwable|string|null $description = null): self;

    public function notPolishIdCard(Throwable|string|null $description = null): self;

    public function notPositive(Throwable|string|null $description = null): self;

    public function notPostalCode(string $countryCode, Throwable|string|null $description = null): self;

    public function notPrimeNumber(Throwable|string|null $description = null): self;

    public function notPrintable(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function notPunct(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function notReadable(Throwable|string|null $description = null): self;

    public function notRegex(string $regex, Throwable|string|null $description = null): self;

    public function notResourceType(Throwable|string|null $description = null): self;

    public function notRoman(Throwable|string|null $description = null): self;

    public function notScalarVal(Throwable|string|null $description = null): self;

    public function notSize(?string $minSize = null, ?string $maxSize = null, Throwable|string|null $description = null): self;

    public function notSlug(Throwable|string|null $description = null): self;

    public function notSorted(string $direction, Throwable|string|null $description = null): self;

    public function notSpace(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function notStartsWith(mixed $startValue, bool $identical = false, Throwable|string|null $description = null): self;

    public function notStringType(Throwable|string|null $description = null): self;

    public function notStringVal(Throwable|string|null $description = null): self;

    public function notSubdivisionCode(string $countryCode, Throwable|string|null $description = null): self;

    /**
    * @param mixed[] $superset
    */
    public function notSubset(array $superset, Throwable|string|null $description = null): self;

    public function notSymbolicLink(Throwable|string|null $description = null): self;

    public function notTime(string $format = 'H:i:s', Throwable|string|null $description = null): self;

    public function notTld(Throwable|string|null $description = null): self;

    public function notTrueVal(Throwable|string|null $description = null): self;

    public function notType(string $type, Throwable|string|null $description = null): self;

    public function notUnique(Throwable|string|null $description = null): self;

    public function notUploaded(Throwable|string|null $description = null): self;

    public function notUppercase(Throwable|string|null $description = null): self;

    public function notUrl(Throwable|string|null $description = null): self;

    public function notUuid(?int $version = null, Throwable|string|null $description = null): self;

    public function notVersion(Throwable|string|null $description = null): self;

    public function notVideoUrl(?string $service = null, Throwable|string|null $description = null): self;

    public function notVowel(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function notWritable(Throwable|string|null $description = null): self;

    public function notXdigit(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function notYes(bool $useLocale = false, Throwable|string|null $description = null): self;

    public function nullOrAlnum(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function nullOrAlpha(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function nullOrArrayType(Throwable|string|null $description = null): self;

    public function nullOrArrayVal(Throwable|string|null $description = null): self;

    public function nullOrBase(int $base, ?string $chars = null, Throwable|string|null $description = null): self;

    public function nullOrBase64(Throwable|string|null $description = null): self;

    public function nullOrBetween(mixed $minimum, mixed $maximum, Throwable|string|null $description = null): self;

    public function nullOrBic(string $countryCode, Throwable|string|null $description = null): self;

    public function nullOrBoolType(Throwable|string|null $description = null): self;

    public function nullOrBoolVal(Throwable|string|null $description = null): self;

    public function nullOrBsn(Throwable|string|null $description = null): self;

    public function nullOrCallableType(Throwable|string|null $description = null): self;

    public function nullOrCallback(callable $callback, Throwable|string|null $description = null): self;

    public function nullOrCharset(string $charset = '', Throwable|string|null $description = null): self;

    public function nullOrCnh(Throwable|string|null $description = null): self;

    public function nullOrCnpj(Throwable|string|null $description = null): self;

    public function nullOrControl(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function nullOrConsonant(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function nullOrContains(mixed $containsValue, bool $identical = false, Throwable|string|null $description = null): self;

    /**
    * @param mixed[] $needles
    */
    public function nullOrContainsAny(array $needles, bool $strictCompareArray = false, Throwable|string|null $description = null): self;

    public function nullOrCountable(Throwable|string|null $description = null): self;

    public function nullOrCountryCode(?string $set = null, Throwable|string|null $description = null): self;

    public function nullOrCurrencyCode(Throwable|string|null $description = null): self;

    public function nullOrCpf(Throwable|string|null $description = null): self;

    public function nullOrCreditCard(?string $brand = null, Throwable|string|null $description = null): self;

    public function nullOrDate(string $format = 'Y-m-d', Throwable|string|null $description = null): self;

    public function nullOrDateTime(?string $format = null, Throwable|string|null $description = null): self;

    public function nullOrDecimal(int $decimals, Throwable|string|null $description = null): self;

    public function nullOrDigit(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function nullOrDirectory(Throwable|string|null $description = null): self;

    public function nullOrDomain(bool $tldCheck = true, Throwable|string|null $description = null): self;

    public function nullOrEmail(Throwable|string|null $description = null): self;

    public function nullOrEndsWith(mixed $endValue, bool $identical = false, Throwable|string|null $description = null): self;

    public function nullOr(mixed $compareTo, Throwable|string|null $description = null): self;

    public function nullOrEquivalent(mixed $compareTo, Throwable|string|null $description = null): self;

    public function nullOrEven(Throwable|string|null $description = null): self;

    public function nullOrExecutable(Throwable|string|null $description = null): self;

    public function nullOrExists(Throwable|string|null $description = null): self;

    public function nullOrExtension(string $extension, Throwable|string|null $description = null): self;

    public function nullOrFactor(int $dividend, Throwable|string|null $description = null): self;

    public function nullOrFalseVal(Throwable|string|null $description = null): self;

    public function nullOrFibonacci(Throwable|string|null $description = null): self;

    public function nullOrFile(Throwable|string|null $description = null): self;

    /**
    * @param mixed[]|int $options
    */
    public function nullOrFilterVar(int $filter, array|int|null $options = null, Throwable|string|null $description = null): self;

    public function nullOrFinite(Throwable|string|null $description = null): self;

    public function nullOrFloatVal(Throwable|string|null $description = null): self;

    public function nullOrFloatType(Throwable|string|null $description = null): self;

    public function nullOrGraph(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function nullOrGreaterThan(mixed $compareTo, Throwable|string|null $description = null): self;

    public function nullOrHexRgbColor(Throwable|string|null $description = null): self;

    public function nullOrIban(Throwable|string|null $description = null): self;

    public function nullOrIdentical(mixed $compareTo, Throwable|string|null $description = null): self;

    public function nullOrImage(?finfo $fileInfo = null, Throwable|string|null $description = null): self;

    public function nullOrImei(Throwable|string|null $description = null): self;

    public function nullOrIn(mixed $haystack, bool $compareIdentical = false, Throwable|string|null $description = null): self;

    public function nullOrInfinite(Throwable|string|null $description = null): self;

    public function nullOrInstance(string $instanceName, Throwable|string|null $description = null): self;

    public function nullOrIntVal(Throwable|string|null $description = null): self;

    public function nullOrIntType(Throwable|string|null $description = null): self;

    public function nullOrIp(string $range = '*', ?int $options = null, Throwable|string|null $description = null): self;

    public function nullOrIsbn(Throwable|string|null $description = null): self;

    public function nullOrIterableType(Throwable|string|null $description = null): self;

    public function nullOrJson(Throwable|string|null $description = null): self;

    public function nullOrLanguageCode(?string $set = null, Throwable|string|null $description = null): self;

    public function nullOrLeapDate(string $format, Throwable|string|null $description = null): self;

    public function nullOrLeapYear(Throwable|string|null $description = null): self;

    public function nullOrLowercase(Throwable|string|null $description = null): self;

    public function nullOrLessThan(mixed $compareTo, Throwable|string|null $description = null): self;

    public function nullOrLuhn(Throwable|string|null $description = null): self;

    public function nullOrMacAddress(Throwable|string|null $description = null): self;

    public function nullOrMaxAge(int $age, ?string $format = null, Throwable|string|null $description = null): self;

    public function nullOrMimetype(string $mimetype, Throwable|string|null $description = null): self;

    public function nullOrMinAge(int $age, ?string $format = null, Throwable|string|null $description = null): self;

    public function nullOrMultiple(int $multipleOf, Throwable|string|null $description = null): self;

    public function nullOrNegative(Throwable|string|null $description = null): self;

    public function nullOrNfeAccessKey(Throwable|string|null $description = null): self;

    public function nullOrNif(Throwable|string|null $description = null): self;

    public function nullOrNip(Throwable|string|null $description = null): self;

    public function nullOrNo(bool $useLocale = false, Throwable|string|null $description = null): self;

    public function nullOrNotBlank(Throwable|string|null $description = null): self;

    public function nullOrNotEmoji(Throwable|string|null $description = null): self;

    public function nullOrNotEmpty(Throwable|string|null $description = null): self;

    public function nullOrNotOptional(Throwable|string|null $description = null): self;

    public function nullOrNoWhitespace(Throwable|string|null $description = null): self;

    public function nullOrNullType(Throwable|string|null $description = null): self;

    public function nullOrNumber(Throwable|string|null $description = null): self;

    public function nullOrNumericVal(Throwable|string|null $description = null): self;

    public function nullOrObjectType(Throwable|string|null $description = null): self;

    public function nullOrOdd(Throwable|string|null $description = null): self;

    public function nullOrPerfectSquare(Throwable|string|null $description = null): self;

    public function nullOrPesel(Throwable|string|null $description = null): self;

    public function nullOrPhone(Throwable|string|null $description = null): self;

    public function nullOrPhpLabel(Throwable|string|null $description = null): self;

    public function nullOrPis(Throwable|string|null $description = null): self;

    public function nullOrPolishIdCard(Throwable|string|null $description = null): self;

    public function nullOrPositive(Throwable|string|null $description = null): self;

    public function nullOrPostalCode(string $countryCode, Throwable|string|null $description = null): self;

    public function nullOrPrimeNumber(Throwable|string|null $description = null): self;

    public function nullOrPrintable(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function nullOrPunct(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function nullOrReadable(Throwable|string|null $description = null): self;

    public function nullOrRegex(string $regex, Throwable|string|null $description = null): self;

    public function nullOrResourceType(Throwable|string|null $description = null): self;

    public function nullOrRoman(Throwable|string|null $description = null): self;

    public function nullOrScalarVal(Throwable|string|null $description = null): self;

    public function nullOrSize(?string $minSize = null, ?string $maxSize = null, Throwable|string|null $description = null): self;

    public function nullOrSlug(Throwable|string|null $description = null): self;

    public function nullOrSorted(string $direction, Throwable|string|null $description = null): self;

    public function nullOrSpace(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function nullOrStartsWith(mixed $startValue, bool $identical = false, Throwable|string|null $description = null): self;

    public function nullOrStringType(Throwable|string|null $description = null): self;

    public function nullOrStringVal(Throwable|string|null $description = null): self;

    public function nullOrSubdivisionCode(string $countryCode, Throwable|string|null $description = null): self;

    /**
    * @param mixed[] $superset
    */
    public function nullOrSubset(array $superset, Throwable|string|null $description = null): self;

    public function nullOrSymbolicLink(Throwable|string|null $description = null): self;

    public function nullOrTime(string $format = 'H:i:s', Throwable|string|null $description = null): self;

    public function nullOrTld(Throwable|string|null $description = null): self;

    public function nullOrTrueVal(Throwable|string|null $description = null): self;

    public function nullOrType(string $type, Throwable|string|null $description = null): self;

    public function nullOrUnique(Throwable|string|null $description = null): self;

    public function nullOrUploaded(Throwable|string|null $description = null): self;

    public function nullOrUppercase(Throwable|string|null $description = null): self;

    public function nullOrUrl(Throwable|string|null $description = null): self;

    public function nullOrUuid(?int $version = null, Throwable|string|null $description = null): self;

    public function nullOrVersion(Throwable|string|null $description = null): self;

    public function nullOrVideoUrl(?string $service = null, Throwable|string|null $description = null): self;

    public function nullOrVowel(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function nullOrWritable(Throwable|string|null $description = null): self;

    public function nullOrXdigit(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function nullOrYes(bool $useLocale = false, Throwable|string|null $description = null): self;

    public function nullOrNotAlnum(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function nullOrNotAlpha(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function nullOrNotArrayType(Throwable|string|null $description = null): self;

    public function nullOrNotArrayVal(Throwable|string|null $description = null): self;

    public function nullOrNotBase(int $base, ?string $chars = null, Throwable|string|null $description = null): self;

    public function nullOrNotBase64(Throwable|string|null $description = null): self;

    public function nullOrNotBetween(mixed $minimum, mixed $maximum, Throwable|string|null $description = null): self;

    public function nullOrNotBic(string $countryCode, Throwable|string|null $description = null): self;

    public function nullOrNotBoolType(Throwable|string|null $description = null): self;

    public function nullOrNotBoolVal(Throwable|string|null $description = null): self;

    public function nullOrNotBsn(Throwable|string|null $description = null): self;

    public function nullOrNotCallableType(Throwable|string|null $description = null): self;

    public function nullOrNotCallback(callable $callback, Throwable|string|null $description = null): self;

    public function nullOrNotCharset(string $charset = '', Throwable|string|null $description = null): self;

    public function nullOrNotCnh(Throwable|string|null $description = null): self;

    public function nullOrNotCnpj(Throwable|string|null $description = null): self;

    public function nullOrNotControl(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function nullOrNotConsonant(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function nullOrNotContains(mixed $containsValue, bool $identical = false, Throwable|string|null $description = null): self;

    /**
    * @param mixed[] $needles
    */
    public function nullOrNotContainsAny(array $needles, bool $strictCompareArray = false, Throwable|string|null $description = null): self;

    public function nullOrNotCountable(Throwable|string|null $description = null): self;

    public function nullOrNotCountryCode(?string $set = null, Throwable|string|null $description = null): self;

    public function nullOrNotCurrencyCode(Throwable|string|null $description = null): self;

    public function nullOrNotCpf(Throwable|string|null $description = null): self;

    public function nullOrNotCreditCard(?string $brand = null, Throwable|string|null $description = null): self;

    public function nullOrNotDate(string $format = 'Y-m-d', Throwable|string|null $description = null): self;

    public function nullOrNotDateTime(?string $format = null, Throwable|string|null $description = null): self;

    public function nullOrNotDecimal(int $decimals, Throwable|string|null $description = null): self;

    public function nullOrNotDigit(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function nullOrNotDirectory(Throwable|string|null $description = null): self;

    public function nullOrNotDomain(bool $tldCheck = true, Throwable|string|null $description = null): self;

    public function nullOrNotEmail(Throwable|string|null $description = null): self;

    public function nullOrNotEndsWith(mixed $endValue, bool $identical = false, Throwable|string|null $description = null): self;

    public function nullOrNot(mixed $compareTo, Throwable|string|null $description = null): self;

    public function nullOrNotEquivalent(mixed $compareTo, Throwable|string|null $description = null): self;

    public function nullOrNotEven(Throwable|string|null $description = null): self;

    public function nullOrNotExecutable(Throwable|string|null $description = null): self;

    public function nullOrNotExists(Throwable|string|null $description = null): self;

    public function nullOrNotExtension(string $extension, Throwable|string|null $description = null): self;

    public function nullOrNotFactor(int $dividend, Throwable|string|null $description = null): self;

    public function nullOrNotFalseVal(Throwable|string|null $description = null): self;

    public function nullOrNotFibonacci(Throwable|string|null $description = null): self;

    public function nullOrNotFile(Throwable|string|null $description = null): self;

    /**
    * @param mixed[]|int $options
    */
    public function nullOrNotFilterVar(int $filter, array|int|null $options = null, Throwable|string|null $description = null): self;

    public function nullOrNotFinite(Throwable|string|null $description = null): self;

    public function nullOrNotFloatVal(Throwable|string|null $description = null): self;

    public function nullOrNotFloatType(Throwable|string|null $description = null): self;

    public function nullOrNotGraph(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function nullOrNotGreaterThan(mixed $compareTo, Throwable|string|null $description = null): self;

    public function nullOrNotHexRgbColor(Throwable|string|null $description = null): self;

    public function nullOrNotIban(Throwable|string|null $description = null): self;

    public function nullOrNotIdentical(mixed $compareTo, Throwable|string|null $description = null): self;

    public function nullOrNotImage(?finfo $fileInfo = null, Throwable|string|null $description = null): self;

    public function nullOrNotImei(Throwable|string|null $description = null): self;

    public function nullOrNotIn(mixed $haystack, bool $compareIdentical = false, Throwable|string|null $description = null): self;

    public function nullOrNotInfinite(Throwable|string|null $description = null): self;

    public function nullOrNotInstance(string $instanceName, Throwable|string|null $description = null): self;

    public function nullOrNotIntVal(Throwable|string|null $description = null): self;

    public function nullOrNotIntType(Throwable|string|null $description = null): self;

    public function nullOrNotIp(string $range = '*', ?int $options = null, Throwable|string|null $description = null): self;

    public function nullOrNotIsbn(Throwable|string|null $description = null): self;

    public function nullOrNotIterableType(Throwable|string|null $description = null): self;

    public function nullOrNotJson(Throwable|string|null $description = null): self;

    public function nullOrNotLanguageCode(?string $set = null, Throwable|string|null $description = null): self;

    public function nullOrNotLeapDate(string $format, Throwable|string|null $description = null): self;

    public function nullOrNotLeapYear(Throwable|string|null $description = null): self;

    public function nullOrNotLowercase(Throwable|string|null $description = null): self;

    public function nullOrNotLessThan(mixed $compareTo, Throwable|string|null $description = null): self;

    public function nullOrNotLuhn(Throwable|string|null $description = null): self;

    public function nullOrNotMacAddress(Throwable|string|null $description = null): self;

    public function nullOrNotMaxAge(int $age, ?string $format = null, Throwable|string|null $description = null): self;

    public function nullOrNotMimetype(string $mimetype, Throwable|string|null $description = null): self;

    public function nullOrNotMinAge(int $age, ?string $format = null, Throwable|string|null $description = null): self;

    public function nullOrNotMultiple(int $multipleOf, Throwable|string|null $description = null): self;

    public function nullOrNotNegative(Throwable|string|null $description = null): self;

    public function nullOrNotNfeAccessKey(Throwable|string|null $description = null): self;

    public function nullOrNotNif(Throwable|string|null $description = null): self;

    public function nullOrNotNip(Throwable|string|null $description = null): self;

    public function nullOrNotNo(bool $useLocale = false, Throwable|string|null $description = null): self;

    public function nullOrNotNotBlank(Throwable|string|null $description = null): self;

    public function nullOrNotNotEmoji(Throwable|string|null $description = null): self;

    public function nullOrNotNotEmpty(Throwable|string|null $description = null): self;

    public function nullOrNotNotOptional(Throwable|string|null $description = null): self;

    public function nullOrNotNoWhitespace(Throwable|string|null $description = null): self;

    public function nullOrNotNullType(Throwable|string|null $description = null): self;

    public function nullOrNotNumber(Throwable|string|null $description = null): self;

    public function nullOrNotNumericVal(Throwable|string|null $description = null): self;

    public function nullOrNotObjectType(Throwable|string|null $description = null): self;

    public function nullOrNotOdd(Throwable|string|null $description = null): self;

    public function nullOrNotPerfectSquare(Throwable|string|null $description = null): self;

    public function nullOrNotPesel(Throwable|string|null $description = null): self;

    public function nullOrNotPhone(Throwable|string|null $description = null): self;

    public function nullOrNotPhpLabel(Throwable|string|null $description = null): self;

    public function nullOrNotPis(Throwable|string|null $description = null): self;

    public function nullOrNotPolishIdCard(Throwable|string|null $description = null): self;

    public function nullOrNotPositive(Throwable|string|null $description = null): self;

    public function nullOrNotPostalCode(string $countryCode, Throwable|string|null $description = null): self;

    public function nullOrNotPrimeNumber(Throwable|string|null $description = null): self;

    public function nullOrNotPrintable(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function nullOrNotPunct(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function nullOrNotReadable(Throwable|string|null $description = null): self;

    public function nullOrNotRegex(string $regex, Throwable|string|null $description = null): self;

    public function nullOrNotResourceType(Throwable|string|null $description = null): self;

    public function nullOrNotRoman(Throwable|string|null $description = null): self;

    public function nullOrNotScalarVal(Throwable|string|null $description = null): self;

    public function nullOrNotSize(?string $minSize = null, ?string $maxSize = null, Throwable|string|null $description = null): self;

    public function nullOrNotSlug(Throwable|string|null $description = null): self;

    public function nullOrNotSorted(string $direction, Throwable|string|null $description = null): self;

    public function nullOrNotSpace(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function nullOrNotStartsWith(mixed $startValue, bool $identical = false, Throwable|string|null $description = null): self;

    public function nullOrNotStringType(Throwable|string|null $description = null): self;

    public function nullOrNotStringVal(Throwable|string|null $description = null): self;

    public function nullOrNotSubdivisionCode(string $countryCode, Throwable|string|null $description = null): self;

    /**
    * @param mixed[] $superset
    */
    public function nullOrNotSubset(array $superset, Throwable|string|null $description = null): self;

    public function nullOrNotSymbolicLink(Throwable|string|null $description = null): self;

    public function nullOrNotTime(string $format = 'H:i:s', Throwable|string|null $description = null): self;

    public function nullOrNotTld(Throwable|string|null $description = null): self;

    public function nullOrNotTrueVal(Throwable|string|null $description = null): self;

    public function nullOrNotType(string $type, Throwable|string|null $description = null): self;

    public function nullOrNotUnique(Throwable|string|null $description = null): self;

    public function nullOrNotUploaded(Throwable|string|null $description = null): self;

    public function nullOrNotUppercase(Throwable|string|null $description = null): self;

    public function nullOrNotUrl(Throwable|string|null $description = null): self;

    public function nullOrNotUuid(?int $version = null, Throwable|string|null $description = null): self;

    public function nullOrNotVersion(Throwable|string|null $description = null): self;

    public function nullOrNotVideoUrl(?string $service = null, Throwable|string|null $description = null): self;

    public function nullOrNotVowel(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function nullOrNotWritable(Throwable|string|null $description = null): self;

    public function nullOrNotXdigit(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function nullOrNotYes(bool $useLocale = false, Throwable|string|null $description = null): self;

    public function lengthBase(int $base, ?string $chars = null, Throwable|string|null $description = null): self;

    public function lengthBetween(mixed $minimum, mixed $maximum, Throwable|string|null $description = null): self;

    public function lengthDate(string $format = 'Y-m-d', Throwable|string|null $description = null): self;

    public function lengthDateTime(?string $format = null, Throwable|string|null $description = null): self;

    public function lengthDigit(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function length(mixed $compareTo, Throwable|string|null $description = null): self;

    public function lengthEquivalent(mixed $compareTo, Throwable|string|null $description = null): self;

    public function lengthEven(Throwable|string|null $description = null): self;

    public function lengthFactor(int $dividend, Throwable|string|null $description = null): self;

    public function lengthFibonacci(Throwable|string|null $description = null): self;

    public function lengthFinite(Throwable|string|null $description = null): self;

    public function lengthFloatType(Throwable|string|null $description = null): self;

    public function lengthFloatVal(Throwable|string|null $description = null): self;

    public function lengthGreaterThan(mixed $compareTo, Throwable|string|null $description = null): self;

    public function lengthIdentical(mixed $compareTo, Throwable|string|null $description = null): self;

    public function lengthIn(mixed $haystack, bool $compareIdentical = false, Throwable|string|null $description = null): self;

    public function lengthInfinite(Throwable|string|null $description = null): self;

    public function lengthIntType(Throwable|string|null $description = null): self;

    public function lengthIntVal(Throwable|string|null $description = null): self;

    public function lengthLeapDate(string $format, Throwable|string|null $description = null): self;

    public function lengthLeapYear(Throwable|string|null $description = null): self;

    public function lengthLessThan(mixed $compareTo, Throwable|string|null $description = null): self;

    public function lengthMaxAge(int $age, ?string $format = null, Throwable|string|null $description = null): self;

    public function lengthMinAge(int $age, ?string $format = null, Throwable|string|null $description = null): self;

    public function lengthMultiple(int $multipleOf, Throwable|string|null $description = null): self;

    public function lengthNegative(Throwable|string|null $description = null): self;

    public function lengthNumber(Throwable|string|null $description = null): self;

    public function lengthNumericVal(Throwable|string|null $description = null): self;

    public function lengthOdd(Throwable|string|null $description = null): self;

    public function lengthPerfectSquare(Throwable|string|null $description = null): self;

    public function lengthPositive(Throwable|string|null $description = null): self;

    public function lengthPrimeNumber(Throwable|string|null $description = null): self;

    public function lengthRoman(Throwable|string|null $description = null): self;

    public function lengthStringType(Throwable|string|null $description = null): self;

    public function lengthStringVal(Throwable|string|null $description = null): self;

    public function lengthTime(string $format = 'H:i:s', Throwable|string|null $description = null): self;

    public function maxBase(int $base, ?string $chars = null, Throwable|string|null $description = null): self;

    public function maxBetween(mixed $minimum, mixed $maximum, Throwable|string|null $description = null): self;

    public function maxDate(string $format = 'Y-m-d', Throwable|string|null $description = null): self;

    public function maxDateTime(?string $format = null, Throwable|string|null $description = null): self;

    public function maxDigit(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function max(mixed $compareTo, Throwable|string|null $description = null): self;

    public function maxEquivalent(mixed $compareTo, Throwable|string|null $description = null): self;

    public function maxEven(Throwable|string|null $description = null): self;

    public function maxFactor(int $dividend, Throwable|string|null $description = null): self;

    public function maxFibonacci(Throwable|string|null $description = null): self;

    public function maxFinite(Throwable|string|null $description = null): self;

    public function maxFloatType(Throwable|string|null $description = null): self;

    public function maxFloatVal(Throwable|string|null $description = null): self;

    public function maxGreaterThan(mixed $compareTo, Throwable|string|null $description = null): self;

    public function maxIdentical(mixed $compareTo, Throwable|string|null $description = null): self;

    public function maxIn(mixed $haystack, bool $compareIdentical = false, Throwable|string|null $description = null): self;

    public function maxInfinite(Throwable|string|null $description = null): self;

    public function maxIntType(Throwable|string|null $description = null): self;

    public function maxIntVal(Throwable|string|null $description = null): self;

    public function maxLeapDate(string $format, Throwable|string|null $description = null): self;

    public function maxLeapYear(Throwable|string|null $description = null): self;

    public function maxLessThan(mixed $compareTo, Throwable|string|null $description = null): self;

    public function maxMaxAge(int $age, ?string $format = null, Throwable|string|null $description = null): self;

    public function maxMinAge(int $age, ?string $format = null, Throwable|string|null $description = null): self;

    public function maxMultiple(int $multipleOf, Throwable|string|null $description = null): self;

    public function maxNegative(Throwable|string|null $description = null): self;

    public function maxNumber(Throwable|string|null $description = null): self;

    public function maxNumericVal(Throwable|string|null $description = null): self;

    public function maxOdd(Throwable|string|null $description = null): self;

    public function maxPerfectSquare(Throwable|string|null $description = null): self;

    public function maxPositive(Throwable|string|null $description = null): self;

    public function maxPrimeNumber(Throwable|string|null $description = null): self;

    public function maxRoman(Throwable|string|null $description = null): self;

    public function maxStringType(Throwable|string|null $description = null): self;

    public function maxStringVal(Throwable|string|null $description = null): self;

    public function maxTime(string $format = 'H:i:s', Throwable|string|null $description = null): self;

    public function minBase(int $base, ?string $chars = null, Throwable|string|null $description = null): self;

    public function minBetween(mixed $minimum, mixed $maximum, Throwable|string|null $description = null): self;

    public function minDate(string $format = 'Y-m-d', Throwable|string|null $description = null): self;

    public function minDateTime(?string $format = null, Throwable|string|null $description = null): self;

    public function minDigit(string $additionalChars = '', Throwable|string|null $description = null): self;

    public function min(mixed $compareTo, Throwable|string|null $description = null): self;

    public function minEquivalent(mixed $compareTo, Throwable|string|null $description = null): self;

    public function minEven(Throwable|string|null $description = null): self;

    public function minFactor(int $dividend, Throwable|string|null $description = null): self;

    public function minFibonacci(Throwable|string|null $description = null): self;

    public function minFinite(Throwable|string|null $description = null): self;

    public function minFloatType(Throwable|string|null $description = null): self;

    public function minFloatVal(Throwable|string|null $description = null): self;

    public function minGreaterThan(mixed $compareTo, Throwable|string|null $description = null): self;

    public function minIdentical(mixed $compareTo, Throwable|string|null $description = null): self;

    public function minIn(mixed $haystack, bool $compareIdentical = false, Throwable|string|null $description = null): self;

    public function minInfinite(Throwable|string|null $description = null): self;

    public function minIntType(Throwable|string|null $description = null): self;

    public function minIntVal(Throwable|string|null $description = null): self;

    public function minLeapDate(string $format, Throwable|string|null $description = null): self;

    public function minLeapYear(Throwable|string|null $description = null): self;

    public function minLessThan(mixed $compareTo, Throwable|string|null $description = null): self;

    public function minMaxAge(int $age, ?string $format = null, Throwable|string|null $description = null): self;

    public function minMinAge(int $age, ?string $format = null, Throwable|string|null $description = null): self;

    public function minMultiple(int $multipleOf, Throwable|string|null $description = null): self;

    public function minNegative(Throwable|string|null $description = null): self;

    public function minNumber(Throwable|string|null $description = null): self;

    public function minNumericVal(Throwable|string|null $description = null): self;

    public function minOdd(Throwable|string|null $description = null): self;

    public function minPerfectSquare(Throwable|string|null $description = null): self;

    public function minPositive(Throwable|string|null $description = null): self;

    public function minPrimeNumber(Throwable|string|null $description = null): self;

    public function minRoman(Throwable|string|null $description = null): self;

    public function minStringType(Throwable|string|null $description = null): self;

    public function minStringVal(Throwable|string|null $description = null): self;

    public function minTime(string $format = 'H:i:s', Throwable|string|null $description = null): self;
}
