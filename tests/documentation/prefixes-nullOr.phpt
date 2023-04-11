--FILE--
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Respect\Assertion\Assert;

exceptionMessage(static fn() => Assert::nullOrNegative(42));
exceptionMessage(static fn() => Assert::nullOrNegative(null));
exceptionMessage(static fn() => Assert::nullOrBetween(5, 1, 4));
exceptionMessage(static fn() => Assert::nullOrBetween(null, 1, 4));
?>
--EXPECT--
42 must be negative
5 must be between 1 and 4
