--FILE--
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Respect\Assertion\Assert;

exceptionMessage(static fn() => Assert::equals(1, 5, 'I was expecting {{compareTo}}, but you gave be {{input}}'));
?>
--EXPECT--
I was expecting 5, but you gave be 1
