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

use DomainException;
use Exception;
use PHPUnit\Framework\TestCase;
use Respect\Assertion\Assertion;
use Respect\Validation\Exceptions\ValidationException;
use Respect\Validation\Result;
use Respect\Validation\Validator;
use Respect\Validation\Validators\AlwaysInvalid;

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
        $rule = $this->createMock(Validator::class);
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

        $rule = $this->createMock(Validator::class);
        $rule
            ->expects($this->once())
            ->method('evaluate')
            ->with($input)
            ->willReturn(Result::of(true, $input, $rule));

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

        $rule = new AlwaysInvalid();

        $this->expectException(ValidationException::class);

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

        $description = new DomainException('custom error');
        $rule = new AlwaysInvalid();

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
        $rule = new AlwaysInvalid();

        $this->expectException(ValidationException::class);

        $sut = new Assertion($rule, $description);
        $sut->assert($input);
    }
}
