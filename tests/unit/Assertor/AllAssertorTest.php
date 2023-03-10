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

namespace Respect\Test\Unit\Assertion\Assertor;

use BadMethodCallException;
use DomainException;
use PHPUnit\Framework\TestCase;
use Respect\Assertion\Assertion;
use Respect\Assertion\Assertor\AllAssertor;
use Respect\Validation\Exceptions\AlwaysInvalidException;
use Respect\Validation\Factory;
use Respect\Validation\Rules\AlwaysInvalid;

use function array_chunk;
use function count;
use function current;
use function range;

/**
 * @covers \Respect\Assertion\Assertor\AllAssertor
 */
final class AllAssertorTest extends TestCase
{
    private AllAssertor $sut;

    /**
     * @test
     */
    public function itShouldReturnTheAssertorName(): void
    {
        self::assertEquals('all', $this->sut->getName());
    }

    /**
     * @test
     */
    public function itShouldThrowAnExceptionWhenInputIsNotIterable(): void
    {
        $this->expectException(BadMethodCallException::class);

        $this->sut->execute($this->createMock(Assertion::class), 42);
    }

    /**
     * @test
     */
    public function itShouldAssertEveryValueInTheInput(): void
    {
        $input = range(100, 105);

        $assertion = $this->createMock(Assertion::class);
        $assertion
            ->expects($this->exactly(count($input)))
            ->method('assert')
            ->will($this->onConsecutiveCalls(...array_chunk($input, 1)));

        $this->sut->execute($assertion, $input);
    }

    /**
     * @test
     */
    public function itShouldThrowCustomExceptionsWhenAssertionFails(): void
    {
        $input = [1, 2, 3];

        $exception = new DomainException('Custom exception');

        $assertion = $this->createMock(Assertion::class);
        $assertion
            ->expects($this->once())
            ->method('assert')
            ->with(current($input))
            ->willThrowException($exception);

        $this->expectExceptionObject($exception);

        $this->sut->execute($assertion, $input);
    }

    /**
     * @test
     */
    public function itShouldThrowAndModifyValidationExceptionsWhenAssertionFails(): void
    {
        $input = [1, 2, 3];

        $exception = Factory::getDefaultInstance()->exception(new AlwaysInvalid(), 2);

        $assertion = $this->createMock(Assertion::class);
        $assertion
            ->expects($this->once())
            ->method('assert')
            ->with(current($input))
            ->willThrowException($exception);

        self::assertEquals('2 is always invalid', $exception->getMessage());

        $this->expectException(AlwaysInvalidException::class);
        $this->expectExceptionMessage('2, and all values of `{ 1, 2, 3 }`, is always invalid');

        $this->sut->execute($assertion, $input);
    }

    /**
     * @test
     */
    public function itShouldThrowAndNotModifyValidationExceptionsWhenAssertionFailsAndExceptionHasCustomTemplate(): void
    {
        $input = [1, 2, 3];

        $exception = Factory::getDefaultInstance()->exception(new AlwaysInvalid(), 2);
        $exception->updateTemplate('{{input}} is something not cool');

        $assertion = $this->createMock(Assertion::class);
        $assertion
            ->expects($this->once())
            ->method('assert')
            ->with(current($input))
            ->willThrowException($exception);

        $this->expectExceptionObject($exception);

        $this->sut->execute($assertion, $input);
    }

    protected function setUp(): void
    {
        $this->sut = new AllAssertor();
    }
}
