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

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Respect\Assertion\Creator\StandardCreator;
use Respect\Assertion\Exception\CannotCreateAssertionException;
use Respect\Assertion\Standard;
use Respect\Validation\Rules\Equals;
use Respect\Validation\Rules\IntType;

/**
 * @covers \Respect\Assertion\Creator\StandardCreator
 */
final class StandardCreatorTest extends TestCase
{
    private StandardCreator $sut;

    /**
     * @test
     */
    public function isShouldCreateAnAssertion(): void
    {
        $assertion = $this->sut->create('IntType', []);

        self::assertInstanceOf(Standard::class, $assertion);
        self::assertInstanceOf(IntType::class, $assertion->getRule());
        self::assertNull($assertion->getDescription());
    }

    /**
     * @test
     */
    public function isShouldCreateAnAssertionWithRuleThatHasArguments(): void
    {
        $compareTo = 42;

        $assertion = $this->sut->create('Equals', [$compareTo]);

        self::assertInstanceOf(Equals::class, $assertion->getRule());
    }

    /**
     * @test
     */
    public function isShouldCreateAnAssertionWithEqualsRuleWhenAssertionNameIsEmpty(): void
    {
        $assertion = $this->sut->create('', [42]);

        self::assertInstanceOf(Equals::class, $assertion->getRule());
    }

    /**
     * @test
     */
    public function isShouldCreateAnAssertionWithDescription(): void
    {
        $description = new InvalidArgumentException();

        $assertion = $this->sut->create('Equals', [42, $description]);

        self::assertSame($description, $assertion->getDescription());
    }

    /**
     * @test
     */
    public function isShouldThrowAnExceptionWhenRuleDoesNotExist(): void
    {
        $this->expectException(CannotCreateAssertionException::class);

        $this->sut->create('ThatIsNotARule', []);
    }

    /**
     * @test
     */
    public function isShouldThrowAnExceptionWhenRuleIsNotInstantiable(): void
    {
        $this->expectException(CannotCreateAssertionException::class);

        $this->sut->create('AbstractRule', []);
    }

    protected function setUp(): void
    {
        $this->sut = new StandardCreator();
    }
}
