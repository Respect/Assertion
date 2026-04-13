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
`.bar` must be present
`.foo` must not be present
`.foo` must be equal to 3
`.foo` must be a negative number
`.foo` must not be an integer
`.baz` must be present
`.foo` must be an existing file
`.foo` must be greater than 5
`.foo` must be greater than 5
