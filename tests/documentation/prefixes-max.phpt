--FILE--
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Respect\Assertion\Assert;

exceptionMessage(static fn() => Assert::maxBetween([1, 2, 3], 5, 10));
exceptionMessage(static fn() => Assert::maxEven([1, 2, 3]));
exceptionMessage(static fn() => Assert::maxPerfectSquare(new ArrayObject([45, 60, 20])));
exceptionMessage(static fn() => Assert::maxNotPositive([23, 7, 20]));
exceptionMessage(static fn() => Assert::max(['A', 'B', 'C'], 'D'));
?>
--EXPECT--
3 (the maximum of the input) must be between 5 and 10
3 (the maximum of the input) must be an even number
60 (the maximum of the input) must be a valid perfect square
23 (the maximum of the input) must not be positive
"C" (the maximum of the input) must equal "D"
