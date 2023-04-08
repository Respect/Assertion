--FILE--
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Respect\Assertion\Assert;

$input = new stdClass();
$input->foo = 1;

exceptionMessage(static fn() => Assert::propertyPresent($input, 'bar'));
exceptionMessage(static fn() => Assert::propertyNotPresent($input, 'foo'));
exceptionMessage(static fn() => Assert::propertyEquals($input, 'foo', 3));
exceptionMessage(static fn() => Assert::propertyNegative($input, 'foo'));
exceptionMessage(static fn() => Assert::propertyNotIntType($input, 'foo'));
exceptionMessage(static fn() => Assert::propertyNegative($input, 'baz'));
exceptionMessage(static fn() => Assert::propertyExists($input, 'foo'));
exceptionMessage(
    static fn() => Assert::thatProperty($input, 'foo')
        ->intType()
        ->positive()
        ->greaterThan(5)
);
exceptionMessage(
    static fn() => Assert::that($input)
        ->instance(stdClass::class)
        ->property('foo')->intType()->positive()->greaterThan(5)
);
?>
--EXPECT--
Attribute bar must be present
Attribute foo must not be present
foo must equal 3
foo must be negative
foo must not be of type integer
Attribute baz must be present
foo must exists
foo must be greater than 5
foo must be greater than 5
