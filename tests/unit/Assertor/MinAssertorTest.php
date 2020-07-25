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

use ArrayObject;
use BadMethodCallException;
use DomainException;
use PHPUnit\Framework\TestCase;
use Respect\Assertion\Assertion;
use Respect\Assertion\Assertor\MinAssertor;
use Respect\Validation\Exceptions\AlwaysInvalidException;

use function range;

/**
 * @covers \Respect\Assertion\Assertor\MinAssertor
 *
 * @author Henrique Moody <henriquemoody@gmail.com>
 */
final class MinAssertorTest extends TestCase
{
    /**
     * @var MinAssertor
     */
    private $sut;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        $this->sut = new MinAssertor();
    }

    /**
     * @test
     */
    public function itShouldReturnTheAssertorName(): void
    {
        self::assertEquals('min', $this->sut->getName());
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
    public function itShouldAssertTheMinValueOfTheInputWhenItIsAnArray(): void
    {
        $input = range(100, 105);

        $assertion = $this->createMock(Assertion::class);
        $assertion
            ->expects($this->once())
            ->method('assert')
            ->with(100);

        $this->sut->execute($assertion, $input);
    }

    /**
     * @test
     */
    public function itShouldAssertTheMinValueOfTheInputWhenItIsAnIterableValue(): void
    {
        $input = new ArrayObject(range(100, 200));

        $assertion = $this->createMock(Assertion::class);
        $assertion
            ->expects($this->once())
            ->method('assert')
            ->with(100);

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
            ->with(1)
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

        $exception = new AlwaysInvalidException();
        $exception->configure('something');

        $assertion = $this->createMock(Assertion::class);
        $assertion
            ->expects($this->once())
            ->method('assert')
            ->with(1)
            ->willThrowException($exception);

        self::assertEquals('something is always invalid', $exception->getMessage());

        $this->expectException(AlwaysInvalidException::class);
        $this->expectExceptionMessage('something, the minimum of { 1, 2, 3 }, is always invalid');

        $this->sut->execute($assertion, $input);
    }

    /**
     * @test
     */
    public function itShouldThrowAndNotModifyValidationExceptionsWhenAssertionFailsAndExceptionHasCustomTemplate(): void
    {
        $input = [1, 2, 3];

        $exception = new AlwaysInvalidException();
        $exception->configure('something');
        $exception->setTemplate('{{input}} is something not cool');

        $assertion = $this->createMock(Assertion::class);
        $assertion
            ->expects($this->once())
            ->method('assert')
            ->with(1)
            ->willThrowException($exception);

        $this->expectExceptionObject($exception);

        $this->sut->execute($assertion, $input);
    }
}
