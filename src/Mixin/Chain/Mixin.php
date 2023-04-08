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
interface Mixin extends AllMixin, KeyMixin, LengthMixin, MaxMixin, MinMixin, NullOrMixin, PropertyMixin
{
    public function alnum(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function alpha(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function arrayType(null|string|Throwable $description = null): static;

    public function arrayVal(null|string|Throwable $description = null): static;

    public function base(int $base, ?string $chars = null, null|string|Throwable $description = null): static;

    public function base64(null|string|Throwable $description = null): static;

    public function between(mixed $minimum, mixed $maximum, null|string|Throwable $description = null): static;

    public function bic(string $countryCode, null|string|Throwable $description = null): static;

    public function boolType(null|string|Throwable $description = null): static;

    public function boolVal(null|string|Throwable $description = null): static;

    public function bsn(null|string|Throwable $description = null): static;

    public function callableType(null|string|Throwable $description = null): static;

    public function callback(callable $callback, null|string|Throwable $description = null): static;

    public function charset(string $charset = '', null|string|Throwable $description = null): static;

    public function cnh(null|string|Throwable $description = null): static;

    public function cnpj(null|string|Throwable $description = null): static;

    public function control(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function consonant(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function contains(mixed $containsValue, bool $identical = false, null|string|Throwable $description = null): static;

    /**
    * @param mixed[] $needles
    */
    public function containsAny(array $needles, bool $strictCompareArray = false, null|string|Throwable $description = null): static;

    public function countable(null|string|Throwable $description = null): static;

    public function countryCode(?string $set = null, null|string|Throwable $description = null): static;

    public function currencyCode(null|string|Throwable $description = null): static;

    public function cpf(null|string|Throwable $description = null): static;

    public function creditCard(?string $brand = null, null|string|Throwable $description = null): static;

    public function date(string $format = 'Y-m-d', null|string|Throwable $description = null): static;

    public function dateTime(?string $format = null, null|string|Throwable $description = null): static;

    public function decimal(int $decimals, null|string|Throwable $description = null): static;

    public function digit(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function directory(null|string|Throwable $description = null): static;

    public function domain(bool $tldCheck = true, null|string|Throwable $description = null): static;

    public function email(null|string|Throwable $description = null): static;

    public function endsWith(mixed $endValue, bool $identical = false, null|string|Throwable $description = null): static;

    public function equals(mixed $compareTo, null|string|Throwable $description = null): static;

    public function equivalent(mixed $compareTo, null|string|Throwable $description = null): static;

    public function even(null|string|Throwable $description = null): static;

    public function executable(null|string|Throwable $description = null): static;

    public function exists(null|string|Throwable $description = null): static;

    public function extension(string $extension, null|string|Throwable $description = null): static;

    public function factor(int $dividend, null|string|Throwable $description = null): static;

    public function falseVal(null|string|Throwable $description = null): static;

    public function fibonacci(null|string|Throwable $description = null): static;

    public function file(null|string|Throwable $description = null): static;

    /**
    * @param mixed[]|int $options
    */
    public function filterVar(int $filter, array|int|null $options = null, null|string|Throwable $description = null): static;

    public function finite(null|string|Throwable $description = null): static;

    public function floatVal(null|string|Throwable $description = null): static;

    public function floatType(null|string|Throwable $description = null): static;

    public function graph(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function greaterThan(mixed $compareTo, null|string|Throwable $description = null): static;

    public function hexRgbColor(null|string|Throwable $description = null): static;

    public function iban(null|string|Throwable $description = null): static;

    public function identical(mixed $compareTo, null|string|Throwable $description = null): static;

    public function image(?finfo $fileInfo = null, null|string|Throwable $description = null): static;

    public function imei(null|string|Throwable $description = null): static;

    public function in(mixed $haystack, bool $compareIdentical = false, null|string|Throwable $description = null): static;

    public function infinite(null|string|Throwable $description = null): static;

    public function instance(string $instanceName, null|string|Throwable $description = null): static;

    public function intVal(null|string|Throwable $description = null): static;

    public function intType(null|string|Throwable $description = null): static;

    public function ip(string $range = '*', ?int $options = null, null|string|Throwable $description = null): static;

    public function isbn(null|string|Throwable $description = null): static;

    public function iterableType(null|string|Throwable $description = null): static;

    public function json(null|string|Throwable $description = null): static;

    public function languageCode(?string $set = null, null|string|Throwable $description = null): static;

    public function leapDate(string $format, null|string|Throwable $description = null): static;

    public function leapYear(null|string|Throwable $description = null): static;

    public function lowercase(null|string|Throwable $description = null): static;

    public function lessThan(mixed $compareTo, null|string|Throwable $description = null): static;

    public function luhn(null|string|Throwable $description = null): static;

    public function macAddress(null|string|Throwable $description = null): static;

    public function maxAge(int $age, ?string $format = null, null|string|Throwable $description = null): static;

    public function mimetype(string $mimetype, null|string|Throwable $description = null): static;

    public function minAge(int $age, ?string $format = null, null|string|Throwable $description = null): static;

    public function multiple(int $multipleOf, null|string|Throwable $description = null): static;

    public function negative(null|string|Throwable $description = null): static;

    public function nfeAccessKey(null|string|Throwable $description = null): static;

    public function nif(null|string|Throwable $description = null): static;

    public function nip(null|string|Throwable $description = null): static;

    public function no(bool $useLocale = false, null|string|Throwable $description = null): static;

    public function notBlank(null|string|Throwable $description = null): static;

    public function notEmoji(null|string|Throwable $description = null): static;

    public function notEmpty(null|string|Throwable $description = null): static;

    public function notOptional(null|string|Throwable $description = null): static;

    public function noWhitespace(null|string|Throwable $description = null): static;

    public function nullType(null|string|Throwable $description = null): static;

    public function number(null|string|Throwable $description = null): static;

    public function numericVal(null|string|Throwable $description = null): static;

    public function objectType(null|string|Throwable $description = null): static;

    public function odd(null|string|Throwable $description = null): static;

    public function perfectSquare(null|string|Throwable $description = null): static;

    public function pesel(null|string|Throwable $description = null): static;

    public function phone(null|string|Throwable $description = null): static;

    public function phpLabel(null|string|Throwable $description = null): static;

    public function pis(null|string|Throwable $description = null): static;

    public function polishIdCard(null|string|Throwable $description = null): static;

    public function positive(null|string|Throwable $description = null): static;

    public function postalCode(string $countryCode, null|string|Throwable $description = null): static;

    public function primeNumber(null|string|Throwable $description = null): static;

    public function printable(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function punct(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function readable(null|string|Throwable $description = null): static;

    public function regex(string $regex, null|string|Throwable $description = null): static;

    public function resourceType(null|string|Throwable $description = null): static;

    public function roman(null|string|Throwable $description = null): static;

    public function scalarVal(null|string|Throwable $description = null): static;

    public function size(?string $minSize = null, ?string $maxSize = null, null|string|Throwable $description = null): static;

    public function slug(null|string|Throwable $description = null): static;

    public function sorted(string $direction, null|string|Throwable $description = null): static;

    public function space(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function startsWith(mixed $startValue, bool $identical = false, null|string|Throwable $description = null): static;

    public function stringType(null|string|Throwable $description = null): static;

    public function stringVal(null|string|Throwable $description = null): static;

    public function subdivisionCode(string $countryCode, null|string|Throwable $description = null): static;

    /**
    * @param mixed[] $superset
    */
    public function subset(array $superset, null|string|Throwable $description = null): static;

    public function symbolicLink(null|string|Throwable $description = null): static;

    public function time(string $format = 'H:i:s', null|string|Throwable $description = null): static;

    public function tld(null|string|Throwable $description = null): static;

    public function trueVal(null|string|Throwable $description = null): static;

    public function type(string $type, null|string|Throwable $description = null): static;

    public function unique(null|string|Throwable $description = null): static;

    public function uploaded(null|string|Throwable $description = null): static;

    public function uppercase(null|string|Throwable $description = null): static;

    public function url(null|string|Throwable $description = null): static;

    public function uuid(?int $version = null, null|string|Throwable $description = null): static;

    public function version(null|string|Throwable $description = null): static;

    public function videoUrl(?string $service = null, null|string|Throwable $description = null): static;

    public function vowel(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function writable(null|string|Throwable $description = null): static;

    public function xdigit(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function yes(bool $useLocale = false, null|string|Throwable $description = null): static;

    public function not(mixed $compareTo, null|string|Throwable $description = null): static;

    public function notAlnum(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function notAlpha(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function notArrayType(null|string|Throwable $description = null): static;

    public function notArrayVal(null|string|Throwable $description = null): static;

    public function notBase(int $base, ?string $chars = null, null|string|Throwable $description = null): static;

    public function notBase64(null|string|Throwable $description = null): static;

    public function notBetween(mixed $minimum, mixed $maximum, null|string|Throwable $description = null): static;

    public function notBic(string $countryCode, null|string|Throwable $description = null): static;

    public function notBoolType(null|string|Throwable $description = null): static;

    public function notBoolVal(null|string|Throwable $description = null): static;

    public function notBsn(null|string|Throwable $description = null): static;

    public function notCallableType(null|string|Throwable $description = null): static;

    public function notCallback(callable $callback, null|string|Throwable $description = null): static;

    public function notCharset(string $charset = '', null|string|Throwable $description = null): static;

    public function notCnh(null|string|Throwable $description = null): static;

    public function notCnpj(null|string|Throwable $description = null): static;

    public function notControl(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function notConsonant(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function notContains(mixed $containsValue, bool $identical = false, null|string|Throwable $description = null): static;

    /**
    * @param mixed[] $needles
    */
    public function notContainsAny(array $needles, bool $strictCompareArray = false, null|string|Throwable $description = null): static;

    public function notCountable(null|string|Throwable $description = null): static;

    public function notCountryCode(?string $set = null, null|string|Throwable $description = null): static;

    public function notCurrencyCode(null|string|Throwable $description = null): static;

    public function notCpf(null|string|Throwable $description = null): static;

    public function notCreditCard(?string $brand = null, null|string|Throwable $description = null): static;

    public function notDate(string $format = 'Y-m-d', null|string|Throwable $description = null): static;

    public function notDateTime(?string $format = null, null|string|Throwable $description = null): static;

    public function notDecimal(int $decimals, null|string|Throwable $description = null): static;

    public function notDigit(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function notDirectory(null|string|Throwable $description = null): static;

    public function notDomain(bool $tldCheck = true, null|string|Throwable $description = null): static;

    public function notEmail(null|string|Throwable $description = null): static;

    public function notEndsWith(mixed $endValue, bool $identical = false, null|string|Throwable $description = null): static;

    public function notEquals(mixed $compareTo, null|string|Throwable $description = null): static;

    public function notEquivalent(mixed $compareTo, null|string|Throwable $description = null): static;

    public function notEven(null|string|Throwable $description = null): static;

    public function notExecutable(null|string|Throwable $description = null): static;

    public function notExists(null|string|Throwable $description = null): static;

    public function notExtension(string $extension, null|string|Throwable $description = null): static;

    public function notFactor(int $dividend, null|string|Throwable $description = null): static;

    public function notFalseVal(null|string|Throwable $description = null): static;

    public function notFibonacci(null|string|Throwable $description = null): static;

    public function notFile(null|string|Throwable $description = null): static;

    /**
    * @param mixed[]|int $options
    */
    public function notFilterVar(int $filter, array|int|null $options = null, null|string|Throwable $description = null): static;

    public function notFinite(null|string|Throwable $description = null): static;

    public function notFloatVal(null|string|Throwable $description = null): static;

    public function notFloatType(null|string|Throwable $description = null): static;

    public function notGraph(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function notGreaterThan(mixed $compareTo, null|string|Throwable $description = null): static;

    public function notHexRgbColor(null|string|Throwable $description = null): static;

    public function notIban(null|string|Throwable $description = null): static;

    public function notIdentical(mixed $compareTo, null|string|Throwable $description = null): static;

    public function notImage(?finfo $fileInfo = null, null|string|Throwable $description = null): static;

    public function notImei(null|string|Throwable $description = null): static;

    public function notIn(mixed $haystack, bool $compareIdentical = false, null|string|Throwable $description = null): static;

    public function notInfinite(null|string|Throwable $description = null): static;

    public function notInstance(string $instanceName, null|string|Throwable $description = null): static;

    public function notIntVal(null|string|Throwable $description = null): static;

    public function notIntType(null|string|Throwable $description = null): static;

    public function notIp(string $range = '*', ?int $options = null, null|string|Throwable $description = null): static;

    public function notIsbn(null|string|Throwable $description = null): static;

    public function notIterableType(null|string|Throwable $description = null): static;

    public function notJson(null|string|Throwable $description = null): static;

    public function notLanguageCode(?string $set = null, null|string|Throwable $description = null): static;

    public function notLeapDate(string $format, null|string|Throwable $description = null): static;

    public function notLeapYear(null|string|Throwable $description = null): static;

    public function notLowercase(null|string|Throwable $description = null): static;

    public function notLessThan(mixed $compareTo, null|string|Throwable $description = null): static;

    public function notLuhn(null|string|Throwable $description = null): static;

    public function notMacAddress(null|string|Throwable $description = null): static;

    public function notMaxAge(int $age, ?string $format = null, null|string|Throwable $description = null): static;

    public function notMimetype(string $mimetype, null|string|Throwable $description = null): static;

    public function notMinAge(int $age, ?string $format = null, null|string|Throwable $description = null): static;

    public function notMultiple(int $multipleOf, null|string|Throwable $description = null): static;

    public function notNegative(null|string|Throwable $description = null): static;

    public function notNfeAccessKey(null|string|Throwable $description = null): static;

    public function notNif(null|string|Throwable $description = null): static;

    public function notNip(null|string|Throwable $description = null): static;

    public function notNo(bool $useLocale = false, null|string|Throwable $description = null): static;

    public function notNoWhitespace(null|string|Throwable $description = null): static;

    public function notNullType(null|string|Throwable $description = null): static;

    public function notNumber(null|string|Throwable $description = null): static;

    public function notNumericVal(null|string|Throwable $description = null): static;

    public function notObjectType(null|string|Throwable $description = null): static;

    public function notOdd(null|string|Throwable $description = null): static;

    public function notPerfectSquare(null|string|Throwable $description = null): static;

    public function notPesel(null|string|Throwable $description = null): static;

    public function notPhone(null|string|Throwable $description = null): static;

    public function notPhpLabel(null|string|Throwable $description = null): static;

    public function notPis(null|string|Throwable $description = null): static;

    public function notPolishIdCard(null|string|Throwable $description = null): static;

    public function notPositive(null|string|Throwable $description = null): static;

    public function notPostalCode(string $countryCode, null|string|Throwable $description = null): static;

    public function notPrimeNumber(null|string|Throwable $description = null): static;

    public function notPrintable(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function notPunct(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function notReadable(null|string|Throwable $description = null): static;

    public function notRegex(string $regex, null|string|Throwable $description = null): static;

    public function notResourceType(null|string|Throwable $description = null): static;

    public function notRoman(null|string|Throwable $description = null): static;

    public function notScalarVal(null|string|Throwable $description = null): static;

    public function notSize(?string $minSize = null, ?string $maxSize = null, null|string|Throwable $description = null): static;

    public function notSlug(null|string|Throwable $description = null): static;

    public function notSorted(string $direction, null|string|Throwable $description = null): static;

    public function notSpace(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function notStartsWith(mixed $startValue, bool $identical = false, null|string|Throwable $description = null): static;

    public function notStringType(null|string|Throwable $description = null): static;

    public function notStringVal(null|string|Throwable $description = null): static;

    public function notSubdivisionCode(string $countryCode, null|string|Throwable $description = null): static;

    /**
    * @param mixed[] $superset
    */
    public function notSubset(array $superset, null|string|Throwable $description = null): static;

    public function notSymbolicLink(null|string|Throwable $description = null): static;

    public function notTime(string $format = 'H:i:s', null|string|Throwable $description = null): static;

    public function notTld(null|string|Throwable $description = null): static;

    public function notTrueVal(null|string|Throwable $description = null): static;

    public function notType(string $type, null|string|Throwable $description = null): static;

    public function notUnique(null|string|Throwable $description = null): static;

    public function notUploaded(null|string|Throwable $description = null): static;

    public function notUppercase(null|string|Throwable $description = null): static;

    public function notUrl(null|string|Throwable $description = null): static;

    public function notUuid(?int $version = null, null|string|Throwable $description = null): static;

    public function notVersion(null|string|Throwable $description = null): static;

    public function notVideoUrl(?string $service = null, null|string|Throwable $description = null): static;

    public function notVowel(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function notWritable(null|string|Throwable $description = null): static;

    public function notXdigit(string $additionalChars = '', null|string|Throwable $description = null): static;

    public function notYes(bool $useLocale = false, null|string|Throwable $description = null): static;
}
