--FILE--
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Respect\Assertion\Assert;

exceptionMessage(static fn() => Assert::notEven(2));
exceptionMessage(static fn() => Assert::notIn(3, [1, 2, 3, 4]));
exceptionMessage(static fn() => Assert::not(42, 42));
?>
--EXPECT--
2 must not be an even number
3 must not be in `{ 1, 2, 3, 4 }`
42 must not equal 42
