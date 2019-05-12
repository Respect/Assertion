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

namespace Respect\Test\Unit\Assertion;

use Exception;
use PHPUnit\Framework\TestCase;
use Respect\Assertion\Standard;
use Respect\Validation\Exceptions\DomainException;
use Respect\Validation\Exceptions\ValidationException;
use Respect\Validation\Validatable;

/**
 * @covers \Respect\Assertion\Standard
 *
 * @author Henrique Moody <henriquemoody@gmail.com>
 */
final class StandardTest extends TestCase
{
    /**
     * @test
     */
    public function isShouldCreateAssertion(): void
    {
        $rule = $this->createMock(Validatable::class);
        $description = 'This is some template';

        $sut = new Standard($rule, $description);

        self::assertSame($rule, $sut->getRule());
        self::assertSame($description, $sut->getDescription());
    }

    /**
     * @test
     *
     * @throws Exception
     */
    public function isShouldExecuteWhenSucceed(): void
    {
        $input = 'something';

        $rule = $this->createMock(Validatable::class);
        $rule
            ->expects($this->once())
            ->method('assert')
            ->with($input)
            ->willReturn(null);

        $sut = new Standard($rule);
        $sut->assert($input);
    }

    /**
     * @test
     *
     * @throws Exception
     */
    public function isShouldExecuteIfFailsWhenThereIsNoDescription(): void
    {
        $input = 'something';

        $exception = new ValidationException();

        $rule = $this->createMock(Validatable::class);
        $rule
            ->expects($this->once())
            ->method('assert')
            ->with($input)
            ->willThrowException($exception);

        $this->expectExceptionObject($exception);

        $sut = new Standard($rule);
        $sut->assert($input);
    }

    /**
     * @test
     *
     * @throws Exception
     */
    public function isShouldExecuteIfFailsWhenDescriptionIsAnException(): void
    {
        $input = 'something';

        $rule = $this->createMock(Validatable::class);
        $rule
            ->expects($this->once())
            ->method('assert')
            ->with($input)
            ->willThrowException(new ValidationException());

        $description = new DomainException();

        $this->expectExceptionObject($description);

        $sut = new Standard($rule, $description);
        $sut->assert($input);
    }

    /**
     * @test
     *
     * @throws Exception
     */
    public function isShouldExecuteIfFailsWhenDescriptionIsString(): void
    {
        $input = 'something';

        $description = 'Template for exception';

        $exception = $this->createMock(ValidationException::class);
        $exception
            ->expects($this->once())
            ->method('setTemplate')
            ->willReturn($description)
            ->willReturn($exception);

        $rule = $this->createMock(Validatable::class);
        $rule
            ->expects($this->once())
            ->method('assert')
            ->with($input)
            ->willThrowException($exception);

        $this->expectExceptionObject($exception);

        $sut = new Standard($rule, $description);
        $sut->assert($input);
    }
}
