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

use Exception;
use finfo;
use Respect\Assertion\Creator\StandardCreator;
use Respect\Assertion\Exception\CannotCreateAssertionException;

/**
 * @method static void age($input, int $minAge = null, int $maxAge = null, $description = null)
 * @method static void alnum($input, string $additionalChars = null, $description = null)
 * @method static void alpha($input, string $additionalChars = null, $description = null)
 * @method static void alwaysInvalid($input, $description = null)
 * @method static void alwaysValid($input, $description = null)
 * @method static void arrayType($input, $description = null)
 * @method static void arrayVal($input, $description = null)
 * @method static void bank($input, string $countryCode, $description = null)
 * @method static void bankAccount($input, string $countryCode, $description = null)
 * @method static void base($input, $description = null)
 * @method static void between($input, $min = null, $max = null, bool $inclusive = true, $description = null)
 * @method static void bic($input, string $countryCode, $description = null)
 * @method static void boolType($input, $description = null)
 * @method static void boolVal($input, $description = null)
 * @method static void bsn($input, $description = null)
 * @method static void call($input, $description = null)
 * @method static void callableType($input, $description = null)
 * @method static void callback($input, callable $callback, $description = null)
 * @method static void charset($input, $charset, $description = null)
 * @method static void cnh($input, $description = null)
 * @method static void cnpj($input, $description = null)
 * @method static void consonant($input, string $additionalChars = null, $description = null)
 * @method static void contains($input, $containsValue, bool $identical = false, $description = null)
 * @method static void countable($input, $description = null)
 * @method static void countryCode($input, $description = null)
 * @method static void cpf($input, $description = null)
 * @method static void creditCard($input, string $brand = null, $description = null)
 * @method static void currencyCode($input, $description = null)
 * @method static void date($input, string $format = null, $description = null)
 * @method static void digit($input, string $additionalChars = null, $description = null)
 * @method static void directory($input, $description = null)
 * @method static void domain($input, bool $tldCheck = true, $description = null)
 * @method static void email($input, $description = null)
 * @method static void endsWith($input, $endValue, bool $identical = false, $description = null)
 * @method static void equals($input, $compareTo, $description = null)
 * @method static void even($input, $description = null)
 * @method static void executable($input, $description = null)
 * @method static void exists($input, $description = null)
 * @method static void extension($input, string $extension, $description = null)
 * @method static void factor($input, int $dividend, $description = null)
 * @method static void falseVal($input, $description = null)
 * @method static void fibonacci($input, $description = null)
 * @method static void file($input, $description = null)
 * @method static void filterVar($input, int $filter, $options = null, $description = null)
 * @method static void finite($input, $description = null)
 * @method static void floatType($input, $description = null)
 * @method static void floatVal($input, $description = null)
 * @method static void graph($input, string $additionalChars = null, $description = null)
 * @method static void hexRgbColor($input, $description = null)
 * @method static void identical($input, $value, $description = null)
 * @method static void identityCard($input, string $countryCode, $description = null)
 * @method static void image($input, finfo $fileInfo = null, $description = null)
 * @method static void imei($input, $description = null)
 * @method static void in($input, $haystack, bool $compareIdentical = false, $description = null)
 * @method static void infinite($input, $description = null)
 * @method static void instance($input, string $instanceName, $description = null)
 * @method static void intType($input, $description = null)
 * @method static void intVal($input, $description = null)
 * @method static void ip($input, $ipOptions = null, $description = null)
 * @method static void iterableType($input, $description = null)
 * @method static void json($input, $description = null)
 * @method static void keyValue($input, string $comparedKey, string $ruleName, string $baseKey, $description = null)
 * @method static void languageCode($input, string $set, $description = null)
 * @method static void leapDate($input, string $format, $description = null)
 * @method static void leapYear($input, $description = null)
 * @method static void length($input, int $min = null, int $max = null, bool $inclusive = true, $description = null)
 * @method static void lowercase($input, $description = null)
 * @method static void macAddress($input, $description = null)
 * @method static void max($input, $maxValue, bool $inclusive = true, $description = null)
 * @method static void mimetype($input, string $mimetype, $description = null)
 * @method static void min($input, $minValue, bool $inclusive = true, $description = null)
 * @method static void minimumAge($input, int $age, $description = null)
 * @method static void multiple($input, int $multipleOf, $description = null)
 * @method static void negative($input, $description = null)
 * @method static void no($input, $useLocale = false, $description = null)
 * @method static void notBlank($input, $description = null)
 * @method static void notEmpty($input, $description = null)
 * @method static void notOptional($input, $description = null)
 * @method static void noWhitespace($input, $description = null)
 * @method static void nullType($input, $description = null)
 * @method static void numeric($input, $description = null)
 * @method static void objectType($input, $description = null)
 * @method static void odd($input, $description = null)
 * @method static void perfectSquare($input, $description = null)
 * @method static void pesel($input, $description = null)
 * @method static void phone($input, $description = null)
 * @method static void phpLabel($input, $description = null)
 * @method static void positive($input, $description = null)
 * @method static void postalCode($input, string $countryCode, $description = null)
 * @method static void primeNumber($input, $description = null)
 * @method static void prnt($input, string $additionalChars = null, $description = null)
 * @method static void punct($input, string $additionalChars = null, $description = null)
 * @method static void readable($input, $description = null)
 * @method static void regex($input, string $regex, $description = null)
 * @method static void resourceType($input, $description = null)
 * @method static void roman($input, $description = null)
 * @method static void scalarVal($input, $description = null)
 * @method static void sf($input, string $name, array $params = null, $description = null)
 * @method static void size($input, string $minSize = null, string $maxSize = null, $description = null)
 * @method static void slug($input, $description = null)
 * @method static void space($input, string $additionalChars = null, $description = null)
 * @method static void startsWith($input, $startValue, bool $identical = false, $description = null)
 * @method static void stringType($input, $description = null)
 * @method static void subdivisionCode($input, string $countryCode, $description = null)
 * @method static void symbolicLink($input, $description = null)
 * @method static void tld($input, $description = null)
 * @method static void trueVal($input, $description = null)
 * @method static void type($input, string $type, $description = null)
 * @method static void uploaded($input, $description = null)
 * @method static void uppercase($input, $description = null)
 * @method static void url($input, $description = null)
 * @method static void version($input, $description = null)
 * @method static void videoUrl($input, string $service = null, $description = null)
 * @method static void vowel($input, $description = null)
 * @method static void writable($input, $description = null)
 * @method static void xdigit($input, string $additionalChars = null, $description = null)
 * @method static void yes($input, $useLocale = false, $description = null)
 * @method static void zend($input, $validator, array $params = null, $description = null)
 */
final class Assert
{
    /**
     * @var AssertionCreator
     */
    private static $assertionCreator;

    /**
     * @return AssertionCreator
     */
    private static function getAssertionCreator(): AssertionCreator
    {
        if (!self::$assertionCreator instanceof AssertionCreator) {
            self::$assertionCreator = new StandardCreator();
        }

        return self::$assertionCreator;
    }

    /**
     * @param string $name
     * @param array $parameters
     *
     * @throws CannotCreateAssertionException
     * @throws Exception
     */
    public static function __callStatic(string $name, array $parameters): void
    {
        $input = array_shift($parameters);

        $assertion = self::getAssertionCreator()->create($name, $parameters);
        $assertion->assert($input);
    }
}
