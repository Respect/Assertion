--FILE--
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Respect\Assertion\Assert;

exceptionMessage(static fn() => Assert::equals(1, 5));
exceptionMessage(static fn() => Assert::intType('string'));
exceptionMessage(static fn() => Assert::odd(5));
?>
--EXPECT--
1 must equal 5
"string" must be of type integer
