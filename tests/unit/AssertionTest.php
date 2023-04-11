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
use Respect\Assertion\Assertion;
use Respect\Validation\Exceptions\DomainException;
use Respect\Validation\Exceptions\ValidationException;
use Respect\Validation\Message\Formatter;
use Respect\Validation\Message\Stringifier\KeepOriginalStringName;
use Respect\Validation\Validatable;

/**
 * @covers \Respect\Assertion\Assertion
 */
final class AssertionTest extends TestCase
{
    /**
     * @test
     */
    public function isShouldCreateAssertion(): void
    {
        $rule = $this->createMock(Validatable::class);
        $description = 'This is some template';

        $sut = new Assertion($rule, $description);

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
            ->method('check')
            ->with($input);

        $sut = new Assertion($rule);
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

        $exception = new ValidationException('input', 'id', [], new Formatter('trim', new KeepOriginalStringName()));

        $rule = $this->createMock(Validatable::class);
        $rule
            ->expects($this->once())
            ->method('check')
            ->with($input)
            ->willThrowException($exception);

        $this->expectExceptionObject($exception);

        $sut = new Assertion($rule);
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
            ->method('check')
            ->with($input)
            ->willThrowException(
                new ValidationException('input', 'id', [], new Formatter('trim', new KeepOriginalStringName()))
            );

        $description = new DomainException('input', 'id', [], new Formatter('trim', new KeepOriginalStringName()));

        $this->expectExceptionObject($description);

        $sut = new Assertion($rule, $description);
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
            ->method('updateTemplate');

        $rule = $this->createMock(Validatable::class);
        $rule
            ->expects($this->once())
            ->method('check')
            ->with($input)
            ->willThrowException($exception);

        $this->expectExceptionObject($exception);

        $sut = new Assertion($rule, $description);
        $sut->assert($input);
    }
}
