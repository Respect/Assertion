--FILE--
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Respect\Assertion\Assert;

exceptionMessage(static fn() => Assert::nullOrNegative(42));
exceptionMessage(static fn() => Assert::nullOrNegative(null));
exceptionMessage(static fn() => Assert::nullOrBetween(5, 1, 4));
exceptionMessage(static fn() => Assert::nullOrBetween(null, 1, 4));
exceptionMessage(
    static fn() => Assert::thatNullOr(6)
        ->positive()
        ->between(1, 10)
        ->primeNumber()
);
exceptionMessage(
    static fn() => Assert::thatNullOr(null)
        ->positive()
        ->between(1, 10)
        ->primeNumber()
);
exceptionMessage(
    static fn() => Assert::that(6)
        ->nullOr()->positive()->between(1, 10)->primeNumber()
);
?>
--EXPECT--
42 must be a negative number or must be null
5 must be between 1 and 4 or must be null
Cannot create assertion for "nullOrPrimeNumber"
Cannot create assertion for "nullOrPrimeNumber"
Cannot create assertion for "nullOrPrimeNumber"