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

final class MaxPrefixTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldThrowWhenMaximumFailsBetweenAssertion(): void
    {
        $this->expectExceptionMessage('The maximum of `[1, 2, 3]` must be between 5 and 10');

        Assert::maxBetween([1, 2, 3], 5, 10);
    }

    /**
     * @test
     */
    public function itShouldThrowWhenMaximumFailsEvenAssertion(): void
    {
        $this->expectExceptionMessage('The maximum of `[1, 2, 3]` must be an even number');

        Assert::maxEven([1, 2, 3]);
    }

    /**
     * @test
     */
    public function itShouldThrowCannotCreateExceptionForUnsupportedRule(): void
    {
        $this->expectException(CannotCreateAssertionException::class);
        $this->expectExceptionMessage('Cannot create assertion for "maxPerfectSquare"');

        Assert::maxPerfectSquare(new ArrayObject([45, 60, 20]));
    }

    /**
     * @test
     */
    public function itShouldThrowWhenMaximumFailsNotPositiveAssertion(): void
    {
        $this->expectExceptionMessage('The maximum of `[23, 7, 20]` must not be a positive number');

        Assert::maxNotPositive([23, 7, 20]);
    }
}
