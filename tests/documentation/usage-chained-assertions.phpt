--FILE--
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Respect\Assertion\Assert;

exceptionMessage(
    static fn() => Assert::that(-1)
        ->intVal('The number {{input}} must be an integer')
        ->positive('I expected a positive number')
        ->lessThan(4)
);
?>
--EXPECT--
I expected a positive number
