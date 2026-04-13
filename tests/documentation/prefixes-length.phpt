--FILE--
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Respect\Assertion\Assert;

exceptionMessage(static fn() => Assert::lengthBetween('string', 10, 15));
exceptionMessage(static fn() => Assert::lengthOdd([1, 2, 3, 4]));
exceptionMessage(static fn() => Assert::lengthEven(new ArrayObject([1, 2, 3])));
exceptionMessage(static fn() => Assert::lengthNotMultiple([1, 2], 2));
?>
--EXPECT--
The length of "string" must be between 10 and 15
The length of `[1, 2, 3, 4]` must be an odd number
The length of `ArrayObject { getArrayCopy() => [1, 2, 3] }` must be an even number
The length of `[1, 2]` must not be a multiple of 2
