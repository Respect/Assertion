# Respect\Assertion

[![Build Status](https://img.shields.io/travis/Respect/Assertion/master.svg?style=flat-square)](http://travis-ci.org/Respect/Assertion)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/Respect/Assertion/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/Respect/Assertion/?branch=master)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/Respect/Assertion/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/Respect/Assertion/?branch=master)
[![Latest Version](https://img.shields.io/packagist/v/respect/assertion.svg?style=flat-square)](https://packagist.org/packages/respect/assertion)
[![Total Downloads](https://img.shields.io/packagist/dt/respect/assertion.svg?style=flat-square)](https://packagist.org/packages/respect/assertion)
[![License](https://img.shields.io/packagist/l/respect/assertion.svg?style=flat-square)](https://packagist.org/packages/respect/assertion)

The power of [Validation][] into an assertion library.

This library allows to use any rule from [Validation][] as an assertion. For a
complete list of rules, check the [list of rules][].

## Installation

Package is available on [Packagist][], it can be installed using [Composer][].

```shell
composer require respect/validation
```

Works on PHP 7.1 or above.

## Another assertion library

There are two great PHP assertion libraries that are very much known in the PHP
community:

- [beberlei/assert][]
- [webmozart/assert][]

They are both extremely easy to use and have a lot of assertions. This library
has no intention to compete or do something better than them, the advantages and
the reason why this library was created is that [Validation][] has **a lot** of
rules and that this library also allows to use custom exceptions at runtime.

The idea of [Validation][] is to make easy to create chain of validations, it
has a very clean API. This library offers a more straightforward API for when
only a simple assertion is needed.

## Usage

The examples in the document will assume that this library is available in the
autoload and that the class `Respect\Assertion\Assert` is imported.

Any rule from [Validation][] can be used by the `Assert` class if the input is
passed as the first argument:

```php
// will throw an exception => 1 must be equals 5
Assert::equals(1, 5);

// will throw an exception => "string" must be of the type integer
Assert::intType('string');

// will not throw an exception
Assert::odd(5);
```

The exceptions that are throw are the same that [Validation][] throws, that also
allows message customization:

```php
// will throw an exception => 5 is the value that 1 should be
Assert::equals(1, 5, '{{compareTo}} is the value that {{input}} should be');
```

This library also allows the use of custom exceptions:

```php
// will throw the defined DomainException
Assert::between(42, 1, 10, true, new DomainException('Something is not right'));
```

That can be very useful if you want to throw custom exceptions. That was a great
idea from [Malukenho][]!

### Not

Assertions can be executed with the `not` prefix which will assert the opposite
of the prefixed assertion:

```php
// will throw an exception => 2 must not be an even number
Assert::notEven(3);

// will throw an exception => 3 must not be in { 1, 2, 3, 4 }
Assert::notIn(3, [1, 2, 3, 4]);
```

If `not` is used without a suffix, this library will use [Equals][] to assert:

```php
// will throw an exception => 42 must not be equals 42
Assert::not(42, 42);
```

### All

Assertions can be executed with the `all` prefix which will assert all elements
in the input with the prefixed assertion:

```php
// will throw an exception => "3" in { 1, 2, "3" } must be of the type integer
Assert::allIntType([1, 2, '3']);
```

Differently from other assertion libraries the message shows not only the item
in the input that failed the assertion but also the input itself.

If `all` is used without a suffix, this library will use [Equals][] to assert:

```php
// will throw an exception => "A" in { "A", "B", "C" } must be equals "D"
Assert::all(['A', 'B', 'C'], 'D');
```

### Length

Assertions can be executed with the `length` prefix which will assert the length
of the input with the prefixed assertion:

```php
// will throw an exception => 6, the length of "string", must be between 10 and 15
Assert::lengthBetween('string', 10, 15);
```

As can be seen the message shows not only the length of the input that failed
the assertion but also the input itself.

The `length` prefix can also be used with arrays and instances of [Countable][]:

```php
// will throw an exception => 4, the length of { 1, 2, 3, 4 }, must be an odd number
Assert::lengthOdd([1, 2, 3, 4]);


// will throw an exception => 3, the length of `[traversable] (ArrayObject: { 1, 2, 3 })`, must be an even number
Assert::lengthEven(new ArrayObject([1, 2, 3]));
```

This library also allows you to use the `not` prefix after the `length` prefix:

```php
// will throw an exception => 2, the length of { 1, 2 }, must not be multiple of 2
Assert::lengthNotMultiple([1, 2], 2);
```

If `length` is used without a suffix, this library will use [Equals][] to assert:

```php
// will throw an exception => 9, the length of "something", must be equals 3
Assert::length('something', 3);
```

### Max

Assertions can be executed with the `max` prefix which will assert the maximum
value of the input with the prefixed assertion:

```php
// will throw an exception => 3, the maximum of { 1, 2, 3 }, must be between 5 and 10
Assert::maxBetween([1, 2, 3], 5, 10);
```

As it can already be seen, the message shows not only the maximum of the input
that failed the assertion but also the input itself.

The `max` prefix can be used with any [iterable][] value:

```php
// will throw an exception => 3, the maximum of { 1, 2, 3 }, must be an even number
Assert::maxEven([1, 2, 3]);


// will throw an exception => 60, the maximum of `[traversable] (ArrayObject: { 45, 60, 20 })`, must be a valid perfect square
Assert::maxPerfectSquare(new ArrayObject([45, 60, 20]));
```

This library also allows you to use the `not` prefix after the `max` prefix:

```php
// will throw an exception => 23, the maximum of { 23, 7, 20 }, must not be positive
Assert::maxNotPositive([23, 7, 20]);
```

If `max` is used without a suffix, this library will use [Equals][] to assert:

```php
// will throw an exception => "C", the maximum of { "A", "B", "C" }, must be equals "D"
Assert::max(['A', 'B', 'C'], 'D');
```

### Min

Assertions can be executed with the `min` prefix which will assert the minimum
value of the input with the prefixed assertion:

```php
// will throw an exception => 1, the minimum of { 1, 2, 3 }, must be between 5 and 10
Assert::minBetween([1, 2, 3], 5, 10);
```

As it can already be seen, the message shows not only the minimum of the input
that failed the assertion but also the input itself.

The `min` prefix can be used with any [iterable][] value:

```php
// will throw an exception => 1, the minimum of { 1, 2, 3 }, must be an even number
Assert::minEven([1, 2, 3]);


// will throw an exception => 20, the minimum of `[traversable] (ArrayObject: { 45, 60, 20 })`, must be a valid perfect square
Assert::minPerfectSquare(new ArrayObject([45, 60, 20]));
```

This library also allows you to use the `not` prefix after the `min` prefix:

```php
// will throw an exception => 7, the minimum of { 23, 7, 20 }, must not be positive
Assert::minNotPositive([23, 7, 20]);
```

If `min` is used without a suffix, this library will use [Equals][] to assert:

```php
// will throw an exception => "A", the minimum of { "A", "B", "C" }, must be equals "D"
Assert::min(['A', 'B', 'C'], 'D');
```

## To-do

- Allow to make assertions with `nullOr` prefix
- Allow to make assertions with `any` prefix
- Allow to make assertions with `key` prefix
- Allow to make assertions with `attribute` prefix

[beberlei/assert]: https://github.com/beberlei/assert
[Composer]: http://getcomposer.org
[Countable]: http://php.net/countable
[Equals]: http://respect.github.io/Validation/docs/equals
[iterable]: http://php.net/types.iterable
[list of rules]: http://respect.github.io/Validation/docs/validators
[Malukenho]: https://github.com/malukenho
[Packagist]: http://packagist.org/packages/respect/assertion
[Validation]: http://respect.github.io/Validation
[webmozart/assert]: https://github.com/webmozart/assert
