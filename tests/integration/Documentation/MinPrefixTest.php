<?php

/*
 * This file is part of Respect/Assertion.
 *
 * (c) Henrique Moody <henriquemoody@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 */

declare(strict_types=1);

namespace Respect\Test\Integration\Assertion\Documentation;

use ArrayObject;
use PHPUnit\Framework\TestCase;
use Respect\Assertion\Assert;
use Respect\Assertion\Exception\CannotCreateAssertionException;

final class MinPrefixTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldThrowWhenMinimumFailsBetweenAssertion(): void
    {
        $this->expectExceptionMessage('The minimum of `[1, 2, 3]` must be between 5 and 10');

        Assert::minBetween([1, 2, 3], 5, 10);
    }

    /**
     * @test
     */
    public function itShouldThrowWhenMinimumFailsEvenAssertion(): void
    {
        $this->expectExceptionMessage('The minimum of `[1, 2, 3]` must be an even number');

        Assert::minEven([1, 2, 3]);
    }

    /**
     * @test
     */
    public function itShouldThrowCannotCreateExceptionForUnsupportedRule(): void
    {
        $this->expectException(CannotCreateAssertionException::class);
        $this->expectExceptionMessage('Cannot create assertion for "minPerfectSquare"');

        Assert::minPerfectSquare(new ArrayObject([45, 60, 20]));
    }

    /**
     * @test
     */
    public function itShouldThrowWhenMinimumFailsNotPositiveAssertion(): void
    {
        $this->expectExceptionMessage('The minimum of `[23, 7, 20]` must not be a positive number');

        Assert::minNotPositive([23, 7, 20]);
    }
}
