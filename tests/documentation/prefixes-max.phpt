--FILE--
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Respect\Assertion\Assert;

exceptionMessage(static fn() => Assert::maxBetween([1, 2, 3], 5, 10));
exceptionMessage(static fn() => Assert::maxEven([1, 2, 3]));
exceptionMessage(static fn() => Assert::maxPerfectSquare(new ArrayObject([45, 60, 20])));
exceptionMessage(static fn() => Assert::maxNotPositive([23, 7, 20]));
?>
--EXPECT--
The maximum of `[1, 2, 3]` must be between 5 and 10
The maximum of `[1, 2, 3]` must be an even number
Cannot create assertion for "maxPerfectSquare"
The maximum of `[23, 7, 20]` must not be a positive number
