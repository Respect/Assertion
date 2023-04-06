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
exceptionMessage(
    static fn() => Assert::that(0, new DomainException('The number must be valid'))
        ->positive()
        ->greaterThan(5)
);
exceptionMessage(
    static fn() => Assert::that(3, 'The number must be valid')
        ->positive()
        ->greaterThan(5, 'But it is not greater than 5, though')
);
?>
--EXPECT--
I expected a positive number
The number must be valid
But it is not greater than 5, though
