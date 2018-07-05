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
use Respect\Assertion\Assertor\LengthAssertor;
use Respect\Validation\Exceptions\AlwaysInvalidException;
use stdClass;
use function count;
use function range;
use function tmpfile;

/**
 * @covers \Respect\Assertion\Assertor\LengthAssertor
 *
 * @author Henrique Moody <henriquemoody@gmail.com>
 */
final class LengthAssertorTest extends TestCase
{
    /**
     * @var LengthAssertor
     */
    private $sut;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        $this->sut = new LengthAssertor();
    }

    /**
     * @test
     */
    public function itShouldReturnTheAssertorName(): void
    {
        self::assertEquals('length', $this->sut->getName());
    }

    /**
     * @test
     */
    public function itShouldAssertLengthOfStrings(): void
    {
        $input = '12345';

        $assertion = $this->createMock(Assertion::class);
        $assertion
            ->expects($this->once())
            ->method('assert')
            ->with(5);

        $this->sut->execute($assertion, $input);
    }

    /**
     * @test
     */
    public function itShouldAssertLengthOfArrays(): void
    {
        $input = range(1, 5);

        $assertion = $this->createMock(Assertion::class);
        $assertion
            ->expects($this->once())
            ->method('assert')
            ->with(5);

        $this->sut->execute($assertion, $input);
    }

    /**
     * @test
     */
    public function itShouldAssertLengthOfCountable(): void
    {
        $input = new ArrayObject(range(1, 5));

        $assertion = $this->createMock(Assertion::class);
        $assertion
            ->expects($this->once())
            ->method('assert')
            ->with(5);

        $this->sut->execute($assertion, $input);
    }

    public function noLengthProvider(): array
    {
        return [
            [42],
            [true],
            [new stdClass()],
            [tmpfile()],
        ];
    }

    /**
     * @test
     *
     * @param mixed $input
     *
     * @dataProvider noLengthProvider
     */
    public function itShouldThrowAnExceptionWhenCannotGetLengthOfInput($input): void
    {
        $assertion = $this->createMock(Assertion::class);
        $assertion
            ->expects($this->never())
            ->method('assert');

        $this->expectException(BadMethodCallException::class);

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
            ->with(count($input))
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
            ->with(count($input))
            ->willThrowException($exception);

        self::assertEquals('something is always invalid', $exception->getMessage());

        $this->expectException(AlwaysInvalidException::class);
        $this->expectExceptionMessage('something, the length of { 1, 2, 3 }, is always invalid');

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
            ->with(count($input))
            ->willThrowException($exception);

        $this->expectExceptionObject($exception);

        $this->sut->execute($assertion, $input);
    }
}
