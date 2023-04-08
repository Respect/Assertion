--FILE--
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Respect\Assertion\Assert;

exceptionMessage(static fn() => Assert::allIntType([1, 2, '3']));
exceptionMessage(
    static fn() => Assert::thatAll([1, 2, 2, 1, 3])
        ->intVal()
        ->between(1, 2)
);
exceptionMessage(
    static fn() => Assert::that([1, 2, 2, 1, 3])
        ->arrayType()
        ->lengthLessThan(4)
        ->all()->intVal()->between(1, 2)
);
?>
--EXPECT--
"3" (like all items of the input) must be of type integer
3 (like all items of the input) must be between 1 and 2
5 (the length of the input) must be less than 4
