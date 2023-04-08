# Respect\Assertion

[![Build Status](https://img.shields.io/github/actions/workflow/status/Respect/Assertion/continuous-integration.yml?branch=master&style=flat-square)](https://github.com/Respect/Assertion/actions/workflows/continuous-integration.yml)
[![Code Coverage](https://img.shields.io/codecov/c/github/Respect/Assertion?style=flat-square)](https://codecov.io/gh/Respect/Assertion)
[![Latest Stable Version](https://img.shields.io/packagist/v/respect/assertion.svg?style=flat-square)](https://packagist.org/packages/respect/assertion)
[![Total Downloads](https://img.shields.io/packagist/dt/respect/assertion.svg?style=flat-square)](https://packagist.org/packages/respect/assertion)
[![License](https://img.shields.io/packagist/l/respect/assertion.svg?style=flat-square)](https://packagist.org/packages/respect/assertion)

The power of [Validation][] into an assertion library.

* More than 1.5k assertions
* Support for custom messages
* Support for custom exceptions

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

By default, it throws exceptions that are instances of [ValidationException][],
which means you can catch [InvalidArgumentException][] (or [LogicException][]).

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

### Chained assertions (`that()`)

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

You can also customize a message or exception for the whole chain.

```php
// will throw an exception => The number must be valid
Assert::that(0, new DomainException('The number must be valid'))
        ->positive()
        ->greaterThan(5);

// will throw an exception => But it is not greater than 5, though
Assert::that(3, 'The number must be valid')
        ->positive()
        ->greaterThan(5, 'But it is not greater than 5, though');
```

Note that the customization on a specific assertion will overwrite the
customization on the whole chain.

You can also apply the effect of the prefixes listed below to the whole chain.

```php
// will throw an exception => 3 (the length of the input) must equal 4
Assert::that(['names' => ['Respect', 'Assertion'], 'options' => [1, 2, 3]])
    ->all()->arrayType()
    ->key('names')->allStringType()
    ->key('options')->lengthEquals(4);
```

There are also some special methods that allow you to create a chain of
assertions.

* `thatAll()`: assert all elements in the input with the subsequent assertions.
* `thatNot()`: assert the input inverting the subsequent assertions.
* `thatNullOr()`: assert the input if it is not `null` with the subsequent assertions.
* `thatKey()`: assert a key from the input with the subsequent assertions.
* `thatProperty()`: assert a property from the input with the subsequent assertions.

## Prefixes

With Assertion, you can use any [Validation][] rule, but it also allows
you to use them with prefixes that simplify some operations.

### `all*()`: asserting all elements in an input

Assertions can be executed with the `all` prefix which will assert all elements
in the input with the prefixed assertion:

```php
// will throw an exception => "3" (like all items of the input) must be of type integer
Assert::allIntType([1, 2, '3']);
```

In some cases, you might want to perform multiple assertions to all elements. You
can use `thatAll()` chain of assertions that will assert all elements in the input
with the subsequent assertions:

```php
// will throw an exception => 3 (like all items of the input) must be between 1 and 2
Assert::thatAll([1, 2, 2, 1, 3])
    ->intVal()
    ->between(1, 2);
```

If you want to perform multiple assertions to all elements, but you also want to
perform other assertions to the input, you can `that()->all()`:

```php
// will throw an exception => 5 (the length of the input) must be less than 4
Assert::that([1, 2, 2, 1, 3])
    ->arrayType()
    ->notEmpty()
    ->lengthGreaterThan(3)
    ->all()->intVal()->between(1, 2);
```

### `nullOr*()`: asserting the value of an input or null

Assertions can be executed with the `nullOr` prefix which will assert only if
the value of the input it not null.

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

In some cases, you might want to perform multiple assertions to a value in case
it is not null. In this case, you can use `thatNullOr()`:

```php
// will throw an exception => 6 must be a valid prime number
Assert::thatNullOr(6)
        ->positive()
        ->between(1, 10)
        ->primeNumber();

// will not throw an exception
Assert::thatNullOr(null)
        ->positive()
        ->between(1, 10)
        ->primeNumber();
```

For convenience, you might also use the `that()->nullOr()`:

```php
Assert::that(6)
    ->nullOr()->positive()->between(1, 10)->primeNumber();
```

### `not*()`: inverting assertions

You can execute assertions with the `not` prefix, which will assert the opposite
of the prefixed assertion:

```php
// will throw an exception => 2 must not be an even number
Assert::notEven(2);

// will throw an exception => 3 must not be in `{ 1, 2, 3, 4 }`
Assert::notIn(3, [1, 2, 3, 4]);
```

If you need to invert more than a few rules, it might be easier to use `thatNot()`
and `that()->not()`:

```php
// will throw an exception => "1" must not be positive
Assert::thatNot('1')
        ->intType()
        ->positive()
        ->between(1, 3);


// will throw an exception => "1" must not be positive
Assert::that('1')
        ->not()->intType()->positive()->between(1, 3);
```

### `key*()`: asserting a key in an array

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

If you want to perform multiple assertions to the key of an input, you can use
`thatKey()`:

```php
// will throw an exception => 9 (the length of the input) must be less than 4
Assert::thatKey(['foo' => 'my-string'], 'foo')
        ->stringType()
        ->startsWith('my-')
        ->lengthLessThan(4);
```

If you want to perform multiple key assertions to the same input, you can use
`that()->key()`:

```php
// will throw an exception => bar must be less than 40
Assert::that(['foo' => 'my-string', 'bar' => 42])
        ->arrayType()
        ->key('foo')->stringType()->startsWith('my-')
        ->key('bar')->intType()->positive()->lessThan(40);
```

### `property*()`: asserting a property in an object

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
Assert::propertyEquals($input, 'foo', 3);

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

If you want to perform multiple assertions to a property of an object, you can
use `thatProperty()`:

```php
// will throw an exception => foo must be greater than 5
Assert::thatProperty($input, 'foo')
        ->intType()
        ->positive()
        ->greaterThan(5);
```

If you want to perform multiple key assertions to the same input, you can use
`that()->property()`:

```php
// will throw an exception => foo must be greater than 5
Assert::that($input)
        ->instance(stdClass::class)
        ->property('foo')->intType()->positive()->greaterThan(5);
```

### `length*()`: asserting the length of an input

Assertions can be executed with the `length` prefix which will assert the length
of the input with the prefixed assertion:

```php
// will throw an exception => 6 (the length of the input) must be between 10 and 15
Assert::lengthBetween('string', 10, 15);
```

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

### `max*()`: asserting the maximum of an input

Assertions can be executed with the `max` prefix which will assert the maximum
value of the input with the prefixed assertion:

```php
// will throw an exception => 3 (the maximum of the input) must be between 5 and 10
Assert::maxBetween([1, 2, 3], 5, 10);
```

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

### `min*()`: asserting the minimum of an input

Assertions can be executed with the `min` prefix which will assert the minimum
value of the input with the prefixed assertion:

```php
// will throw an exception => 1 (the minimum of the input) must be between 5 and 10
Assert::minBetween([1, 2, 3], 5, 10);
```

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

[beberlei/assert]: https://github.com/beberlei/assert
[Composer]: http://getcomposer.org
[Countable]: http://php.net/countable
[InvalidArgumentException]: https://www.php.net/InvalidArgumentException
[iterable]: http://php.net/types.iterable
[LogicException]: https://www.php.net/LogicException
[Malukenho]: https://github.com/malukenho
[mixin interfaces]: src/Mixin/Static
[Packagist]: http://packagist.org/packages/respect/assertion
[Validation]: https://github.com/Respect/Validation
[ValidationException]: https://github.com/Respect/Validation/blob/master/library/Exceptions/ValidationException.php
[webmozart/assert]: https://github.com/webmozart/assert
