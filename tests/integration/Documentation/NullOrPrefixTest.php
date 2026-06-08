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

use PHPUnit\Framework\TestCase;
use Respect\Assertion\Assert;
use Respect\Assertion\Exception\CannotCreateAssertionException;

final class NullOrPrefixTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldThrowWhenNonNullValueFailsAssertion(): void
    {
        $this->expectExceptionMessage('42 must be a negative number or must be null');

        Assert::nullOrNegative(42);
    }

    /**
     * @test
     *
     * @doesNotPerformAssertions
     */
    public function itShouldNotThrowWhenValueIsNull(): void
    {
        Assert::nullOrNegative(null);
    }

    /**
     * @test
     */
    public function itShouldThrowWhenNonNullValueFailsBetweenAssertion(): void
    {
        $this->expectExceptionMessage('5 must be between 1 and 4 or must be null');

        Assert::nullOrBetween(5, 1, 4);
    }

    /**
     * @test
     *
     * @doesNotPerformAssertions
     */
    public function itShouldNotThrowForBetweenWhenValueIsNull(): void
    {
        Assert::nullOrBetween(null, 1, 4);
    }

    /**
     * @test
     */
    public function itShouldThrowCannotCreateExceptionForUnsupportedRuleInThatNullOrChain(): void
    {
        $this->expectException(CannotCreateAssertionException::class);
        $this->expectExceptionMessage('Cannot create assertion for "nullOrPrimeNumber"');

        Assert::thatNullOr(6)
            ->positive()
            ->between(1, 10)
            ->primeNumber();
    }

    /**
     * @test
     */
    public function itShouldThrowCannotCreateExceptionEvenWhenValueIsNullInThatNullOrChain(): void
    {
        $this->expectException(CannotCreateAssertionException::class);
        $this->expectExceptionMessage('Cannot create assertion for "nullOrPrimeNumber"');

        Assert::thatNullOr(null)
            ->positive()
            ->between(1, 10)
            ->primeNumber();
    }

    /**
     * @test
     */
    public function itShouldThrowCannotCreateExceptionForUnsupportedRuleInChainWithNullOrSegment(): void
    {
        $this->expectException(CannotCreateAssertionException::class);
        $this->expectExceptionMessage('Cannot create assertion for "nullOrPrimeNumber"');

        Assert::that(6)
            ->nullOr()->positive()->between(1, 10)->primeNumber();
    }
}
