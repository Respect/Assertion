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
The minimum of `[1, 2, 3]` must be between 5 and 10
The minimum of `[1, 2, 3]` must be an even number
Cannot create assertion for "minPerfectSquare"
The minimum of `[23, 7, 20]` must not be a positive number
