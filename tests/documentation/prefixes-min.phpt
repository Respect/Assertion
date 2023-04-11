--FILE--
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Respect\Assertion\Assert;

exceptionMessage(static fn() => Assert::minBetween([1, 2, 3], 5, 10));
exceptionMessage(static fn() => Assert::minEven([1, 2, 3]));
exceptionMessage(static fn() => Assert::minPerfectSquare(new ArrayObject([45, 60, 20])));
exceptionMessage(static fn() => Assert::minNotPositive([23, 7, 20]));
?>
--EXPECT--
1 (the minimum of the input) must be between 5 and 10
1 (the minimum of the input) must be an even number
20 (the minimum of the input) must be a valid perfect square
7 (the minimum of the input) must not be positive
