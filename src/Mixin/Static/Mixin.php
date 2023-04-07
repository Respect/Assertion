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
interface Mixin extends AllMixin, KeyMixin, LengthMixin, MaxMixin, MinMixin, NullOrMixin, PropertyMixin
{
    public static function alnum(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function alpha(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function arrayType(mixed $input, null|string|Throwable $description = null): void;

    public static function arrayVal(mixed $input, null|string|Throwable $description = null): void;

    public static function base(mixed $input, int $base, ?string $chars = null, null|string|Throwable $description = null): void;

    public static function base64(mixed $input, null|string|Throwable $description = null): void;

    public static function between(mixed $input, mixed $minimum, mixed $maximum, null|string|Throwable $description = null): void;

    public static function bic(mixed $input, string $countryCode, null|string|Throwable $description = null): void;

    public static function boolType(mixed $input, null|string|Throwable $description = null): void;

    public static function boolVal(mixed $input, null|string|Throwable $description = null): void;

    public static function bsn(mixed $input, null|string|Throwable $description = null): void;

    public static function callableType(mixed $input, null|string|Throwable $description = null): void;

    public static function callback(mixed $input, callable $callback, null|string|Throwable $description = null): void;

    public static function charset(mixed $input, string $charset = '', null|string|Throwable $description = null): void;

    public static function cnh(mixed $input, null|string|Throwable $description = null): void;

    public static function cnpj(mixed $input, null|string|Throwable $description = null): void;

    public static function control(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function consonant(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function contains(mixed $input, mixed $containsValue, bool $identical = false, null|string|Throwable $description = null): void;

    /**
    * @param mixed[] $needles
    */
    public static function containsAny(mixed $input, array $needles, bool $strictCompareArray = false, null|string|Throwable $description = null): void;

    public static function countable(mixed $input, null|string|Throwable $description = null): void;

    public static function countryCode(mixed $input, ?string $set = null, null|string|Throwable $description = null): void;

    public static function currencyCode(mixed $input, null|string|Throwable $description = null): void;

    public static function cpf(mixed $input, null|string|Throwable $description = null): void;

    public static function creditCard(mixed $input, ?string $brand = null, null|string|Throwable $description = null): void;

    public static function date(mixed $input, string $format = 'Y-m-d', null|string|Throwable $description = null): void;

    public static function dateTime(mixed $input, ?string $format = null, null|string|Throwable $description = null): void;

    public static function decimal(mixed $input, int $decimals, null|string|Throwable $description = null): void;

    public static function digit(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function directory(mixed $input, null|string|Throwable $description = null): void;

    public static function domain(mixed $input, bool $tldCheck = true, null|string|Throwable $description = null): void;

    public static function email(mixed $input, null|string|Throwable $description = null): void;

    public static function endsWith(mixed $input, mixed $endValue, bool $identical = false, null|string|Throwable $description = null): void;

    public static function equals(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function equivalent(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function even(mixed $input, null|string|Throwable $description = null): void;

    public static function executable(mixed $input, null|string|Throwable $description = null): void;

    public static function exists(mixed $input, null|string|Throwable $description = null): void;

    public static function extension(mixed $input, string $extension, null|string|Throwable $description = null): void;

    public static function factor(mixed $input, int $dividend, null|string|Throwable $description = null): void;

    public static function falseVal(mixed $input, null|string|Throwable $description = null): void;

    public static function fibonacci(mixed $input, null|string|Throwable $description = null): void;

    public static function file(mixed $input, null|string|Throwable $description = null): void;

    /**
    * @param mixed[]|int $options
    */
    public static function filterVar(mixed $input, int $filter, array|int|null $options = null, null|string|Throwable $description = null): void;

    public static function finite(mixed $input, null|string|Throwable $description = null): void;

    public static function floatVal(mixed $input, null|string|Throwable $description = null): void;

    public static function floatType(mixed $input, null|string|Throwable $description = null): void;

    public static function graph(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function greaterThan(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function hexRgbColor(mixed $input, null|string|Throwable $description = null): void;

    public static function iban(mixed $input, null|string|Throwable $description = null): void;

    public static function identical(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function image(mixed $input, ?finfo $fileInfo = null, null|string|Throwable $description = null): void;

    public static function imei(mixed $input, null|string|Throwable $description = null): void;

    public static function in(mixed $input, mixed $haystack, bool $compareIdentical = false, null|string|Throwable $description = null): void;

    public static function infinite(mixed $input, null|string|Throwable $description = null): void;

    public static function instance(mixed $input, string $instanceName, null|string|Throwable $description = null): void;

    public static function intVal(mixed $input, null|string|Throwable $description = null): void;

    public static function intType(mixed $input, null|string|Throwable $description = null): void;

    public static function ip(mixed $input, string $range = '*', ?int $options = null, null|string|Throwable $description = null): void;

    public static function isbn(mixed $input, null|string|Throwable $description = null): void;

    public static function iterableType(mixed $input, null|string|Throwable $description = null): void;

    public static function json(mixed $input, null|string|Throwable $description = null): void;

    public static function languageCode(mixed $input, ?string $set = null, null|string|Throwable $description = null): void;

    public static function leapDate(mixed $input, string $format, null|string|Throwable $description = null): void;

    public static function leapYear(mixed $input, null|string|Throwable $description = null): void;

    public static function lowercase(mixed $input, null|string|Throwable $description = null): void;

    public static function lessThan(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function luhn(mixed $input, null|string|Throwable $description = null): void;

    public static function macAddress(mixed $input, null|string|Throwable $description = null): void;

    public static function maxAge(mixed $input, int $age, ?string $format = null, null|string|Throwable $description = null): void;

    public static function mimetype(mixed $input, string $mimetype, null|string|Throwable $description = null): void;

    public static function minAge(mixed $input, int $age, ?string $format = null, null|string|Throwable $description = null): void;

    public static function multiple(mixed $input, int $multipleOf, null|string|Throwable $description = null): void;

    public static function negative(mixed $input, null|string|Throwable $description = null): void;

    public static function nfeAccessKey(mixed $input, null|string|Throwable $description = null): void;

    public static function nif(mixed $input, null|string|Throwable $description = null): void;

    public static function nip(mixed $input, null|string|Throwable $description = null): void;

    public static function no(mixed $input, bool $useLocale = false, null|string|Throwable $description = null): void;

    public static function notBlank(mixed $input, null|string|Throwable $description = null): void;

    public static function notEmoji(mixed $input, null|string|Throwable $description = null): void;

    public static function notEmpty(mixed $input, null|string|Throwable $description = null): void;

    public static function notOptional(mixed $input, null|string|Throwable $description = null): void;

    public static function noWhitespace(mixed $input, null|string|Throwable $description = null): void;

    public static function nullType(mixed $input, null|string|Throwable $description = null): void;

    public static function number(mixed $input, null|string|Throwable $description = null): void;

    public static function numericVal(mixed $input, null|string|Throwable $description = null): void;

    public static function objectType(mixed $input, null|string|Throwable $description = null): void;

    public static function odd(mixed $input, null|string|Throwable $description = null): void;

    public static function perfectSquare(mixed $input, null|string|Throwable $description = null): void;

    public static function pesel(mixed $input, null|string|Throwable $description = null): void;

    public static function phone(mixed $input, null|string|Throwable $description = null): void;

    public static function phpLabel(mixed $input, null|string|Throwable $description = null): void;

    public static function pis(mixed $input, null|string|Throwable $description = null): void;

    public static function polishIdCard(mixed $input, null|string|Throwable $description = null): void;

    public static function positive(mixed $input, null|string|Throwable $description = null): void;

    public static function postalCode(mixed $input, string $countryCode, null|string|Throwable $description = null): void;

    public static function primeNumber(mixed $input, null|string|Throwable $description = null): void;

    public static function printable(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function punct(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function readable(mixed $input, null|string|Throwable $description = null): void;

    public static function regex(mixed $input, string $regex, null|string|Throwable $description = null): void;

    public static function resourceType(mixed $input, null|string|Throwable $description = null): void;

    public static function roman(mixed $input, null|string|Throwable $description = null): void;

    public static function scalarVal(mixed $input, null|string|Throwable $description = null): void;

    public static function size(mixed $input, ?string $minSize = null, ?string $maxSize = null, null|string|Throwable $description = null): void;

    public static function slug(mixed $input, null|string|Throwable $description = null): void;

    public static function sorted(mixed $input, string $direction, null|string|Throwable $description = null): void;

    public static function space(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function startsWith(mixed $input, mixed $startValue, bool $identical = false, null|string|Throwable $description = null): void;

    public static function stringType(mixed $input, null|string|Throwable $description = null): void;

    public static function stringVal(mixed $input, null|string|Throwable $description = null): void;

    public static function subdivisionCode(mixed $input, string $countryCode, null|string|Throwable $description = null): void;

    /**
    * @param mixed[] $superset
    */
    public static function subset(mixed $input, array $superset, null|string|Throwable $description = null): void;

    public static function symbolicLink(mixed $input, null|string|Throwable $description = null): void;

    public static function time(mixed $input, string $format = 'H:i:s', null|string|Throwable $description = null): void;

    public static function tld(mixed $input, null|string|Throwable $description = null): void;

    public static function trueVal(mixed $input, null|string|Throwable $description = null): void;

    public static function type(mixed $input, string $type, null|string|Throwable $description = null): void;

    public static function unique(mixed $input, null|string|Throwable $description = null): void;

    public static function uploaded(mixed $input, null|string|Throwable $description = null): void;

    public static function uppercase(mixed $input, null|string|Throwable $description = null): void;

    public static function url(mixed $input, null|string|Throwable $description = null): void;

    public static function uuid(mixed $input, ?int $version = null, null|string|Throwable $description = null): void;

    public static function version(mixed $input, null|string|Throwable $description = null): void;

    public static function videoUrl(mixed $input, ?string $service = null, null|string|Throwable $description = null): void;

    public static function vowel(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function writable(mixed $input, null|string|Throwable $description = null): void;

    public static function xdigit(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function yes(mixed $input, bool $useLocale = false, null|string|Throwable $description = null): void;

    public static function not(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function notAlnum(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function notAlpha(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function notArrayType(mixed $input, null|string|Throwable $description = null): void;

    public static function notArrayVal(mixed $input, null|string|Throwable $description = null): void;

    public static function notBase(mixed $input, int $base, ?string $chars = null, null|string|Throwable $description = null): void;

    public static function notBase64(mixed $input, null|string|Throwable $description = null): void;

    public static function notBetween(mixed $input, mixed $minimum, mixed $maximum, null|string|Throwable $description = null): void;

    public static function notBic(mixed $input, string $countryCode, null|string|Throwable $description = null): void;

    public static function notBoolType(mixed $input, null|string|Throwable $description = null): void;

    public static function notBoolVal(mixed $input, null|string|Throwable $description = null): void;

    public static function notBsn(mixed $input, null|string|Throwable $description = null): void;

    public static function notCallableType(mixed $input, null|string|Throwable $description = null): void;

    public static function notCallback(mixed $input, callable $callback, null|string|Throwable $description = null): void;

    public static function notCharset(mixed $input, string $charset = '', null|string|Throwable $description = null): void;

    public static function notCnh(mixed $input, null|string|Throwable $description = null): void;

    public static function notCnpj(mixed $input, null|string|Throwable $description = null): void;

    public static function notControl(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function notConsonant(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function notContains(mixed $input, mixed $containsValue, bool $identical = false, null|string|Throwable $description = null): void;

    /**
    * @param mixed[] $needles
    */
    public static function notContainsAny(mixed $input, array $needles, bool $strictCompareArray = false, null|string|Throwable $description = null): void;

    public static function notCountable(mixed $input, null|string|Throwable $description = null): void;

    public static function notCountryCode(mixed $input, ?string $set = null, null|string|Throwable $description = null): void;

    public static function notCurrencyCode(mixed $input, null|string|Throwable $description = null): void;

    public static function notCpf(mixed $input, null|string|Throwable $description = null): void;

    public static function notCreditCard(mixed $input, ?string $brand = null, null|string|Throwable $description = null): void;

    public static function notDate(mixed $input, string $format = 'Y-m-d', null|string|Throwable $description = null): void;

    public static function notDateTime(mixed $input, ?string $format = null, null|string|Throwable $description = null): void;

    public static function notDecimal(mixed $input, int $decimals, null|string|Throwable $description = null): void;

    public static function notDigit(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function notDirectory(mixed $input, null|string|Throwable $description = null): void;

    public static function notDomain(mixed $input, bool $tldCheck = true, null|string|Throwable $description = null): void;

    public static function notEmail(mixed $input, null|string|Throwable $description = null): void;

    public static function notEndsWith(mixed $input, mixed $endValue, bool $identical = false, null|string|Throwable $description = null): void;

    public static function notEquals(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function notEquivalent(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function notEven(mixed $input, null|string|Throwable $description = null): void;

    public static function notExecutable(mixed $input, null|string|Throwable $description = null): void;

    public static function notExists(mixed $input, null|string|Throwable $description = null): void;

    public static function notExtension(mixed $input, string $extension, null|string|Throwable $description = null): void;

    public static function notFactor(mixed $input, int $dividend, null|string|Throwable $description = null): void;

    public static function notFalseVal(mixed $input, null|string|Throwable $description = null): void;

    public static function notFibonacci(mixed $input, null|string|Throwable $description = null): void;

    public static function notFile(mixed $input, null|string|Throwable $description = null): void;

    /**
    * @param mixed[]|int $options
    */
    public static function notFilterVar(mixed $input, int $filter, array|int|null $options = null, null|string|Throwable $description = null): void;

    public static function notFinite(mixed $input, null|string|Throwable $description = null): void;

    public static function notFloatVal(mixed $input, null|string|Throwable $description = null): void;

    public static function notFloatType(mixed $input, null|string|Throwable $description = null): void;

    public static function notGraph(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function notGreaterThan(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function notHexRgbColor(mixed $input, null|string|Throwable $description = null): void;

    public static function notIban(mixed $input, null|string|Throwable $description = null): void;

    public static function notIdentical(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function notImage(mixed $input, ?finfo $fileInfo = null, null|string|Throwable $description = null): void;

    public static function notImei(mixed $input, null|string|Throwable $description = null): void;

    public static function notIn(mixed $input, mixed $haystack, bool $compareIdentical = false, null|string|Throwable $description = null): void;

    public static function notInfinite(mixed $input, null|string|Throwable $description = null): void;

    public static function notInstance(mixed $input, string $instanceName, null|string|Throwable $description = null): void;

    public static function notIntVal(mixed $input, null|string|Throwable $description = null): void;

    public static function notIntType(mixed $input, null|string|Throwable $description = null): void;

    public static function notIp(mixed $input, string $range = '*', ?int $options = null, null|string|Throwable $description = null): void;

    public static function notIsbn(mixed $input, null|string|Throwable $description = null): void;

    public static function notIterableType(mixed $input, null|string|Throwable $description = null): void;

    public static function notJson(mixed $input, null|string|Throwable $description = null): void;

    public static function notLanguageCode(mixed $input, ?string $set = null, null|string|Throwable $description = null): void;

    public static function notLeapDate(mixed $input, string $format, null|string|Throwable $description = null): void;

    public static function notLeapYear(mixed $input, null|string|Throwable $description = null): void;

    public static function notLowercase(mixed $input, null|string|Throwable $description = null): void;

    public static function notLessThan(mixed $input, mixed $compareTo, null|string|Throwable $description = null): void;

    public static function notLuhn(mixed $input, null|string|Throwable $description = null): void;

    public static function notMacAddress(mixed $input, null|string|Throwable $description = null): void;

    public static function notMaxAge(mixed $input, int $age, ?string $format = null, null|string|Throwable $description = null): void;

    public static function notMimetype(mixed $input, string $mimetype, null|string|Throwable $description = null): void;

    public static function notMinAge(mixed $input, int $age, ?string $format = null, null|string|Throwable $description = null): void;

    public static function notMultiple(mixed $input, int $multipleOf, null|string|Throwable $description = null): void;

    public static function notNegative(mixed $input, null|string|Throwable $description = null): void;

    public static function notNfeAccessKey(mixed $input, null|string|Throwable $description = null): void;

    public static function notNif(mixed $input, null|string|Throwable $description = null): void;

    public static function notNip(mixed $input, null|string|Throwable $description = null): void;

    public static function notNo(mixed $input, bool $useLocale = false, null|string|Throwable $description = null): void;

    public static function notNoWhitespace(mixed $input, null|string|Throwable $description = null): void;

    public static function notNullType(mixed $input, null|string|Throwable $description = null): void;

    public static function notNumber(mixed $input, null|string|Throwable $description = null): void;

    public static function notNumericVal(mixed $input, null|string|Throwable $description = null): void;

    public static function notObjectType(mixed $input, null|string|Throwable $description = null): void;

    public static function notOdd(mixed $input, null|string|Throwable $description = null): void;

    public static function notPerfectSquare(mixed $input, null|string|Throwable $description = null): void;

    public static function notPesel(mixed $input, null|string|Throwable $description = null): void;

    public static function notPhone(mixed $input, null|string|Throwable $description = null): void;

    public static function notPhpLabel(mixed $input, null|string|Throwable $description = null): void;

    public static function notPis(mixed $input, null|string|Throwable $description = null): void;

    public static function notPolishIdCard(mixed $input, null|string|Throwable $description = null): void;

    public static function notPositive(mixed $input, null|string|Throwable $description = null): void;

    public static function notPostalCode(mixed $input, string $countryCode, null|string|Throwable $description = null): void;

    public static function notPrimeNumber(mixed $input, null|string|Throwable $description = null): void;

    public static function notPrintable(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function notPunct(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function notReadable(mixed $input, null|string|Throwable $description = null): void;

    public static function notRegex(mixed $input, string $regex, null|string|Throwable $description = null): void;

    public static function notResourceType(mixed $input, null|string|Throwable $description = null): void;

    public static function notRoman(mixed $input, null|string|Throwable $description = null): void;

    public static function notScalarVal(mixed $input, null|string|Throwable $description = null): void;

    public static function notSize(mixed $input, ?string $minSize = null, ?string $maxSize = null, null|string|Throwable $description = null): void;

    public static function notSlug(mixed $input, null|string|Throwable $description = null): void;

    public static function notSorted(mixed $input, string $direction, null|string|Throwable $description = null): void;

    public static function notSpace(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function notStartsWith(mixed $input, mixed $startValue, bool $identical = false, null|string|Throwable $description = null): void;

    public static function notStringType(mixed $input, null|string|Throwable $description = null): void;

    public static function notStringVal(mixed $input, null|string|Throwable $description = null): void;

    public static function notSubdivisionCode(mixed $input, string $countryCode, null|string|Throwable $description = null): void;

    /**
    * @param mixed[] $superset
    */
    public static function notSubset(mixed $input, array $superset, null|string|Throwable $description = null): void;

    public static function notSymbolicLink(mixed $input, null|string|Throwable $description = null): void;

    public static function notTime(mixed $input, string $format = 'H:i:s', null|string|Throwable $description = null): void;

    public static function notTld(mixed $input, null|string|Throwable $description = null): void;

    public static function notTrueVal(mixed $input, null|string|Throwable $description = null): void;

    public static function notType(mixed $input, string $type, null|string|Throwable $description = null): void;

    public static function notUnique(mixed $input, null|string|Throwable $description = null): void;

    public static function notUploaded(mixed $input, null|string|Throwable $description = null): void;

    public static function notUppercase(mixed $input, null|string|Throwable $description = null): void;

    public static function notUrl(mixed $input, null|string|Throwable $description = null): void;

    public static function notUuid(mixed $input, ?int $version = null, null|string|Throwable $description = null): void;

    public static function notVersion(mixed $input, null|string|Throwable $description = null): void;

    public static function notVideoUrl(mixed $input, ?string $service = null, null|string|Throwable $description = null): void;

    public static function notVowel(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function notWritable(mixed $input, null|string|Throwable $description = null): void;

    public static function notXdigit(mixed $input, string $additionalChars = '', null|string|Throwable $description = null): void;

    public static function notYes(mixed $input, bool $useLocale = false, null|string|Throwable $description = null): void;
}
