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

namespace Respect\Test\Unit\Assertion\Creator;

use Exception;
use PHPUnit\Framework\TestCase;
use Respect\Assertion\Assertion;
use Respect\Assertion\AssertionCreator;
use Respect\Assertion\Creator\NotCreator;
use Respect\Validation\Rules\Not;
use Respect\Validation\Validatable;

/**
 * @covers \Respect\Assertion\Creator\NotCreator
 */
final class NotCreatorTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldSkipToNextCreatorWhenPrefixIsInvalid(): void
    {
        $name = 'isNotEquals';
        $parameters = [1, 2, 3];

        $assertion = $this->createMock(Assertion::class);

        $nextCreator = $this->createMock(AssertionCreator::class);
        $nextCreator
            ->expects($this->once())
            ->method('create')
            ->with($name, $parameters)
            ->willReturn($assertion);

        $sut = new NotCreator($nextCreator);

        self::assertSame($assertion, $sut->create($name, $parameters));
    }

    /**
     * @test
     *
     * @dataProvider cannotInvertProvider
     */
    public function itShouldSkipToNextCreatorWhenCannotInvertRule(string $name): void
    {
        $parameters = [1, 2, 3];

        $assertion = $this->createMock(Assertion::class);

        $nextCreator = $this->createMock(AssertionCreator::class);
        $nextCreator
            ->expects($this->once())
            ->method('create')
            ->with($name, $parameters)
            ->willReturn($assertion);

        $sut = new NotCreator($nextCreator);

        self::assertSame($assertion, $sut->create($name, $parameters));
    }

    /**
     * @test
     */
    public function itShouldCreateAssertion(): void
    {
        $name = 'notSomething';
        $nextName = 'Something';
        $parameters = [1, 2, 3];

        $rule = $this->createMock(Validatable::class);
        $description = new Exception();

        $assertion = $this->createMock(Assertion::class);
        $assertion
            ->expects($this->once())
            ->method('getRule')
            ->willReturn($rule);
        $assertion
            ->expects($this->once())
            ->method('getDescription')
            ->willReturn($description);

        $nextCreator = $this->createMock(AssertionCreator::class);
        $nextCreator
            ->expects($this->once())
            ->method('create')
            ->with($nextName, $parameters)
            ->willReturn($assertion);

        $sut = new NotCreator($nextCreator);

        $actual = $sut->create($name, $parameters);

        /** @var Not $validatable */
        $validatable = $actual->getRule();

        self::assertInstanceOf(Not::class, $validatable);
        self::assertSame($rule, $validatable->getNegatedRule());
        self::assertSame($description, $actual->getDescription());
    }

    /**
     * @return string[][]
     */
    public static function cannotInvertProvider(): array
    {
        return [
            ['notEmpty'],
            ['notBlank'],
            ['notOptional'],
        ];
    }
}
