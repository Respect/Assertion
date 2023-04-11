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
use Respect\Assertion\Assertion;
use Respect\Assertion\Creator\StandardCreator;
use Respect\Assertion\Exception\CannotCreateAssertionException;
use Respect\Validation\Rules\Equals;
use Respect\Validation\Rules\IntType;
use stdClass;

use function tmpfile;

/**
 * @covers \Respect\Assertion\Creator\StandardCreator
 */
final class StandardCreatorTest extends TestCase
{
    /**
     * @test
     */
    public function isShouldCreateAnAssertion(): void
    {
        $assertion = $this->getSut()->create('IntType', []);

        self::assertInstanceOf(Assertion::class, $assertion);
        self::assertInstanceOf(IntType::class, $assertion->getRule());
        self::assertNull($assertion->getDescription());
    }

    /**
     * @test
     */
    public function isShouldCreateAnAssertionWithRuleThatHasArguments(): void
    {
        $compareTo = 42;

        $assertion = $this->getSut()->create('Equals', [$compareTo]);

        self::assertInstanceOf(Equals::class, $assertion->getRule());
    }

    /**
     * @test
     */
    public function isShouldCreateAnAssertionWithEqualsRuleWhenAssertionNameIsEmpty(): void
    {
        $assertion = $this->getSut()->create('', [42]);

        self::assertInstanceOf(Equals::class, $assertion->getRule());
    }

    /**
     * @test
     */
    public function isShouldCreateAnAssertionWithDescription(): void
    {
        $description = new InvalidArgumentException();

        $assertion = $this->getSut()->create('Equals', [42, $description]);

        self::assertSame($description, $assertion->getDescription());
    }

    /**
     * @test
     */
    public function isShouldThrowAnExceptionWhenRuleDoesNotExist(): void
    {
        $this->expectException(CannotCreateAssertionException::class);

        $this->getSut()->create('ThatIsNotARule', []);
    }

    /**
     * @test
     *
     * @dataProvider invalidDescriptionProvider
     */
    public function itShouldNotCreateAssertionWhenDescriptionIsInvalid(mixed $description): void
    {
        $this->expectException(CannotCreateAssertionException::class);
        $this->expectExceptionMessage('"alwaysInvalid" assertion has an invalid error description');

        $this->getSut()->create('alwaysInvalid', [$description]);
    }

    /**
     * @test
     */
    public function isShouldThrowAnExceptionWhenRuleIsNotInstantiable(): void
    {
        $this->expectException(CannotCreateAssertionException::class);

        $this->getSut()->create('AbstractRule', []);
    }

    /**
     * @return array<int, array{0: mixed}>
     */
    public static function invalidDescriptionProvider(): array
    {
        return [
            [12],
            [1.5],
            [[]],
            [tmpfile()],
            [static fn() => 1],
            [new stdClass()],
        ];
    }

    private function getSut(): StandardCreator
    {
        return new StandardCreator();
    }
}
