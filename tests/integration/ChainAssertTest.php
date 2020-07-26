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

namespace integration;

use Exception;
use PHPUnit\Framework\TestCase;
use Respect\Assertion\Assert;
use Respect\Validation\Exceptions\NegativeException;

/**
 * @author Henrique Moody <henriquemoody@gmail.com>
 */
final class ChainAssertTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldThrowRespectValidationException(): void
    {
        $this->expectException(NegativeException::class);

        Assert::that(2)->negative();
    }

    /**
     * @test
     */
    public function itShouldThrowRespectValidationExceptionWithCustomTemplate(): void
    {
        $this->expectException(NegativeException::class);
        $this->expectExceptionMessage('The input 2 that you are validating must be negative.');

        Assert::that(2)->negative('The input {{input}} that you are validating must be negative.');
    }

    /**
     * @test
     */
    public function itShouldThrowCustomException(): void
    {
        $exception = new Exception('The number you are validating must be negative');

        $this->expectExceptionObject($exception);

        Assert::that(2)->negative($exception);
    }

    /**
     * @test
     */
    public function itShouldThrowExceptionImmediatelyWhenRuleFails(): void
    {
        $exception = new Exception('This one has the be thrown');

        $this->expectExceptionObject($exception);

        Assert::that(2)
            ->intType()
            ->positive()
            ->greaterThan(1)
            ->lessThan(3)
            ->notEquals(2, $exception)
            ->floatType(new Exception('This one should never be thrown'));
    }
}
