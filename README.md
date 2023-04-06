# Respect\Assertion

[![Build Status](https://img.shields.io/github/actions/workflow/status/Respect/Assertion/continuous-integration.yml?branch=master&style=flat-square)](https://github.com/Respect/Assertion/actions/workflows/continuous-integration.yml)
[![Code Coverage](https://img.shields.io/codecov/c/github/Respect/Assertion?style=flat-square)](https://codecov.io/gh/Respect/Assertion)
[![Latest Stable Version](https://img.shields.io/packagist/v/respect/assertion.svg?style=flat-square)](https://packagist.org/packages/respect/assertion)
[![Total Downloads](https://img.shields.io/packagist/dt/respect/assertion.svg?style=flat-square)](https://packagist.org/packages/respect/assertion)
[![License](https://img.shields.io/packagist/l/respect/assertion.svg?style=flat-square)](https://packagist.org/packages/respect/assertion)

The power of [Validation][] into an assertion library with
**more than 1k assertions**.

For a complete list of assertions, check all the [mixin interfaces][], and read
[Validation][] to understand how each rule/assertion works.

## Installation

This package is available on [Packagist][], and you can install it using
[Composer][].

```shell
composer require respect/assertion
```

Works on PHP 8.1 or above.

## Another assertion library

There are PHP assertion libraries that a lot of people in the PHP the community
use:

- [beberlei/assert][]
- [webmozart/assert][]

They are both straightforward to use and have a lot of assertions, so there
would be no reason to create yet another one. On the other hand, they have fewer
assertions than [Validation][] does.

The main idea of [Validation][] is to make it easy to create chain of
validations, but when it can get verbose when you want to make a simple
assertion.

This library offers a more straightforward assertion API for [Validation][],
which means that you can use all [Validation][]'s rules plus your own rules.

## Usage

The examples in the document will assume that this library is available in the
autoload and that the class `Respect\Assertion\Assert` is imported.

The `Assert` class can use any rule from [Validation][] with the input as its
first argument:

```php
// will throw an exception => 1 must be equals 5
Assert::equals(1, 5);

// will throw an exception => "string" must be of type integer
Assert::intType('string');

// will not throw an exception
Assert::odd(5);
```

### Custom messages

The exceptions that `Assert` throws are the same that [Validation][] throws.
That allows you to customize the error messages using templates:


```php
// will throw an exception => I was expecting 5, but you gave be 1
Assert::equals(1, 5, 'I was expecting {{compareTo}}, but you gave be {{input}}');
```

### Custom exceptions

Instead of throwing [Validation][] exceptions, you can use your exceptions:

```php
// will throw the defined DomainException
Assert::between(42, 1, 10, new DomainException('Something is not right'));
```

That can be very useful if you want to throw specific exceptions for your
application. That was a great idea from [Malukenho][]!

### Chained assertions

You can chain assertions using `Assert::that($input)`, which allows you to
perform multiple assertions to the same input with less duplication.

```php
// will throw an exception => I expected a positive number
Assert::that(-1)
    ->intVal('The number {{input}} must be an integer')
    ->positive('The number must be positive')
    ->lessThan(4);
```

In the example above, as soon as any assertion fails, it will throw an
exception. If you wish to chain validations and only check them all
simultaneously, we suggest you use the API from [Validation][].

## Prefixes

With Assertion, you can use any [Validation][] rule, but it also allows
you to use them with prefixes that simplify some operations.

### Not

You can execute assertions with the `not` prefix, which will assert the opposite
of the prefixed assertion:

```php
// will throw an exception => 2 must not be an even number
Assert::notEven(2);

// will throw an exception => 3 must not be in `{ 1, 2, 3, 4 }`
Assert::notIn(3, [1, 2, 3, 4]);
```

If you use `not` without a suffix, this library will use [Equals][] to assert:

```php
// will throw an exception => 42 must not equal 42
Assert::not(42, 42);
```

### All

Assertions can be executed with the `all` prefix which will assert all elements
in the input with the prefixed assertion:

```php
// will throw an exception => "3" (like all items of the input) must be of type integer
Assert::allIntType([1, 2, '3']);
```

Differently from other assertion libraries the message shows not only the item
in the input that failed the assertion but also the input itself.

If `all` is used without a suffix, this library will use [Equals][] to assert:

```php
// will throw an exception => "A" (like all items of the input) must equal "D"
Assert::all(['A', 'B', 'C'], 'D');
```

### Key

You can use `keyPresent` to check whether a key is present in an array.

```php
// will throw an exception => bar must be present
Assert::keyPresent(['foo' => true], 'bar');
```

You can use `keyNotPresent` to check whether a key is present in an array.

```php
// will throw an exception => bar must not be present
Assert::keyNotPresent(['bar' => 2], 'bar');
```

Also, with the `key` prefix it will assert the value of the array that contains
the specified key.

```php
// will throw an exception => foo must equal 3
Assert::key(['foo' => 2], 'foo', 3);
Assert::keyEquals(['foo' => 2], 'foo', 3);

// will throw an exception => bar must be negative
Assert::keyNegative(['bar' => 2], 'bar');

// will throw an exception => bar must not be of type integer
Assert::keyNotIntType(['bar' => 2], 'bar');

// will throw an exception => baz must be present
Assert::keyNegative(['foo' => 2], 'baz');

// will throw an exception => foo must exist
Assert::keyExists(['foo' => '/path/to/file.txt'], 'foo');
```

Not that `keyExists` assertion, will assert whether the value of key `foo` exists
in the Filesystem.

### Property

We'll use the object below as input in the examples that follow.

```php
$input = new stdClass();
$input->foo = 1;
```

You can use `propertyPresent` to check whether a property is present in an object.

```php
// will throw an exception => Attribute bar must be present
Assert::propertyPresent($input, 'bar');
```

You can use `propertyNotPresent` to check whether a property is *not* present in
an object.

```php
// will throw an exception => Attribute foo must not be present
Assert::propertyNotPresent($input, 'foo');
```

With the `property` prefix, you can make assertions with the value of a specific
object's property.

```php
// will throw an exception => foo must equal 3
Assert::property($input, 'foo', 3);

// will throw an exception => foo must be negative
Assert::propertyNegative($input, 'foo');

// will throw an exception => foo must not be of type integer
Assert::propertyNotIntType($input, 'foo');

// will throw an exception => Attribute baz must be present
Assert::propertyNegative($input, 'baz');

// will throw an exception => foo must exists
Assert::propertyExists($input, 'foo');
```

Note that the `propertyExists` assertion will assert whether the value of
property `foo` exists in the FileSystem.

### Length

Assertions can be executed with the `length` prefix which will assert the length
of the input with the prefixed assertion:

```php
// will throw an exception => 6 (the length of the input) must be between 10 and 15
Assert::lengthBetween('string', 10, 15);
```

As can be seen the message shows not only the length of the input that failed
the assertion but also the input itself.

The `length` prefix can also be used with arrays and instances of [Countable][]:

```php
// will throw an exception => 4 (the length of the input) must be an odd number
Assert::lengthOdd([1, 2, 3, 4]);

// will throw an exception => 3 (the length of the input) must be an even number
Assert::lengthEven(new ArrayObject([1, 2, 3]));
```

This library also allows you to use the `not` prefix after the `length` prefix:

```php
// will throw an exception => 2 (the length of the input) must not be multiple of 2
Assert::lengthNotMultiple([1, 2], 2);
```

If `length` is used without a suffix, this library will use [Equals][] to assert:

```php
// will throw an exception => 9 (the length of the input) must equal 3
Assert::length('something', 3);
```

### Max

Assertions can be executed with the `max` prefix which will assert the maximum
value of the input with the prefixed assertion:

```php
// will throw an exception => 3 (the maximum of the input) must be between 5 and 10
Assert::maxBetween([1, 2, 3], 5, 10);
```

As it can already be seen, the message shows not only the maximum of the input
that failed the assertion but also the input itself.

The `max` prefix can be used with any [iterable][] value:

```php
// will throw an exception => 3 (the maximum of the input) must be an even number
Assert::maxEven([1, 2, 3]);

// will throw an exception => 60 (the maximum of the input) must be a valid perfect square
Assert::maxPerfectSquare(new ArrayObject([45, 60, 20]));
```

This library also allows you to use the `not` prefix after the `max` prefix:

```php
// will throw an exception => 23 (the maximum of the input) must not be positive
Assert::maxNotPositive([23, 7, 20]);
```

If `max` is used without a suffix, this library will use [Equals][] to assert:

```php
// will throw an exception => "C" (the maximum of the input) must equal "D"
Assert::max(['A', 'B', 'C'], 'D');
```

### Min

Assertions can be executed with the `min` prefix which will assert the minimum
value of the input with the prefixed assertion:

```php
// will throw an exception => 1 (the minimum of the input) must be between 5 and 10
Assert::minBetween([1, 2, 3], 5, 10);
```

As it can already be seen, the message shows not only the minimum of the input
that failed the assertion but also the input itself.

The `min` prefix can be used with any [iterable][] value:

```php
// will throw an exception => 1 (the minimum of the input) must be an even number
Assert::minEven([1, 2, 3]);

// will throw an exception => 20 (the minimum of the input) must be a valid perfect square
Assert::minPerfectSquare(new ArrayObject([45, 60, 20]));
```

This library also allows you to use the `not` prefix after the `min` prefix:

```php
// will throw an exception => 7 (the minimum of the input) must not be positive
Assert::minNotPositive([23, 7, 20]);
```

If `min` is used without a suffix, this library will use [Equals][] to assert:

```php
// will throw an exception => "A" (the minimum of the input) must equal "D"
Assert::min(['A', 'B', 'C'], 'D');
```

### NullOr

Assertions can be executed with the `nullOr` prefix which will assert only if the
value of the input it not null.

```php
// will throw an exception => 42 must be negative
Assert::nullOrNegative(42);

// will not throw an exception
Assert::nullOrNegative(null);

// will throw an exception => 5 must be between 1 and 4
Assert::nullOrBetween(5, 1, 4);

// will not throw an exception
Assert::nullOrBetween(null, 1, 4);
```

If `nullOr` is used without a suffix, this library will use [Equals][] to assert:

```php
// will throw an exception => 1 must equal 2
Assert::nullOr(1, 2);
```

[beberlei/assert]: https://github.com/beberlei/assert
[Composer]: http://getcomposer.org
[Countable]: http://php.net/countable
[Equals]: https://respect-validation.readthedocs.io/en/latest/rules/Equals/
[iterable]: http://php.net/types.iterable
[Malukenho]: https://github.com/malukenho
[mixin interfaces]: src/Mixin/Static
[Packagist]: http://packagist.org/packages/respect/assertion
[Validation]: https://respect-validation.readthedocs.io
[webmozart/assert]: https://github.com/webmozart/assert
