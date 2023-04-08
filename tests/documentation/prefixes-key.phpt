--FILE--
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Respect\Assertion\Assert;

exceptionMessage(static fn() => Assert::keyPresent(['foo' => true], 'bar'));
exceptionMessage(static fn() => Assert::keyNotPresent(['bar' => 2], 'bar'));
exceptionMessage(static fn() => Assert::keyEquals(['foo' => 2], 'foo', 3));
exceptionMessage(static fn() => Assert::keyNegative(['bar' => 2], 'bar'));
exceptionMessage(static fn() => Assert::keyNotIntType(['bar' => 2], 'bar'));
exceptionMessage(static fn() => Assert::keyNegative(['foo' => 2], 'baz'));
exceptionMessage(static fn() => Assert::keyExists(['foo' => '/path/to/file.txt'], 'foo'));
exceptionMessage(
    static fn() => Assert::thatKey(['foo' => 'my-string'], 'foo')
        ->stringType()
        ->startsWith('my-')
        ->lengthLessThan(4)
);exceptionMessage(
    static fn() => Assert::that(['foo' => 'my-string', 'bar' => 42])
        ->arrayType()
        ->key('foo')->stringType()->startsWith('my-')
        ->key('bar')->intType()->positive()->lessThan(40)
);

?>
--EXPECT--
bar must be present
bar must not be present
foo must equal 3
bar must be negative
bar must not be of type integer
baz must be present
foo must exists
9 (the length of the input) must be less than 4
bar must be less than 40