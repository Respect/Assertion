--FILE--
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Respect\Assertion\Assert;

exceptionMessage(static fn() => Assert::notEven(2));
exceptionMessage(static fn() => Assert::notIn(3, [1, 2, 3, 4]));
exceptionMessage(
    static fn() => Assert::thatNot('1')
        ->intType()
        ->positive()
        ->between(1, 3)
);
exceptionMessage(
    static fn() => Assert::that('1')
        ->not()->intType()->positive()->between(1, 3)
);
?>
--EXPECT--
2 must not be an even number
3 must not be in `{ 1, 2, 3, 4 }`
"1" must not be positive
"1" must not be positive