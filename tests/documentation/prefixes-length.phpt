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
6 (the length of the input) must be between 10 and 15
4 (the length of the input) must be an odd number
3 (the length of the input) must be an even number
2 (the length of the input) must not be multiple of 2
