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

use DomainException;
use PHPUnit\Framework\TestCase;
use Respect\Assertion\Assert;

final class UsageTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldThrowExceptionForFailedEqualsAssertion(): void
    {
        $this->expectExceptionMessage('1 must be equal to 5');

        Assert::equals(1, 5);
    }

    /**
     * @test
     */
    public function itShouldThrowExceptionForFailedIntTypeAssertion(): void
    {
        $this->expectExceptionMessage('"string" must be an integer');

        Assert::intType('string');
    }

    /**
     * @test
     *
     * @doesNotPerformAssertions
     */
    public function itShouldNotThrowExceptionWhenAssertionPasses(): void
    {
        Assert::odd(5);
    }

    /**
     * @test
     */
    public function itShouldThrowCustomExceptionObjectWhenAssertionFails(): void
    {
        $this->expectException(DomainException::class);
        $this->expectExceptionMessage('Something is not right');

        Assert::between(42, 1, 10, new DomainException('Something is not right'));
    }

    /**
     * @test
     */
    public function itShouldThrowExceptionWithTemplatedCustomMessage(): void
    {
        $this->expectExceptionMessage('I was expecting 5, but you gave be 1');

        Assert::equals(1, 5, 'I was expecting {{compareTo}}, but you gave be {{subject}}');
    }
}
