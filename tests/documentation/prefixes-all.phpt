--FILE--
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Respect\Assertion\Assert;

exceptionMessage(static fn() => Assert::allIntType([1, 2, '3']));
exceptionMessage(static fn() => Assert::all(['A', 'B', 'C'], 'D'));
?>
--EXPECT--
"3" (like all items of the input) must be of type integer
"A" (like all items of the input) must equal "D"
