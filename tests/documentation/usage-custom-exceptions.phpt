--FILE--
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Respect\Assertion\Assert;

exceptionMessage(static fn() => Assert::between(42, 1, 10, new DomainException('Something is not right')));
?>
--EXPECT--
Something is not right
