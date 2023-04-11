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

namespace Respect\Test\Unit\Assertion\Rule;

use ArrayObject;
use PHPUnit\Framework\TestCase;
use Respect\Assertion\Rule\Max;
use Respect\Test\Unit\Assertion\Double\FakeRule;
use Respect\Validation\Exceptions\ValidationException;
use Respect\Validation\Rules\AlwaysInvalid;
use stdClass;

use function range;
use function Respect\Stringifier\stringify;
use function tmpfile;

/**
 * @covers \Respect\Assertion\Rule\Max
 * @covers \Respect\Assertion\Rule\Rule
 */
final class MaxTest extends TestCase
{
    private const MAXIMUM = 100;

    /**
     * @test
     *
     * @dataProvider invalidInputProvider
     */
    public function itShouldThrowAnExceptionWhenInputIsNotStringOrCountable(mixed $input): void
    {
        $this->expectException(ValidationException::class);
        $this->expectExceptionMessage(stringify($input) . ' must be an non-empty array or iterable');

        $sut = new Max(new AlwaysInvalid());
        $sut->check($input);
    }

    /**
     * @test
     */
    public function itShouldAssertTheMaxValueOfTheInputWhenItIsAnArray(): void
    {
        $input = range(self::MAXIMUM - 5, self::MAXIMUM);

        $rule = new FakeRule();

        $sut = new Max($rule);
        $sut->check($input);

        self::assertSame(self::MAXIMUM, $rule->getCalledInputs()[0]);
        self::assertTrue($sut->validate($input));
    }

    /**
     * @test
     */
    public function itShouldAssertTheMaxValueOfTheInputWhenItIsAnIterableValue(): void
    {
        $input = new ArrayObject(range(self::MAXIMUM - 5, self::MAXIMUM));

        $rule = new FakeRule();

        $sut = new Max($rule);
        $sut->check($input);

        self::assertSame(self::MAXIMUM, $rule->getCalledInputs()[0]);
        self::assertTrue($sut->validate($input));
    }

    /**
     * @test
     */
    public function itShouldModifyValidationExceptionsWhenAssertionFails(): void
    {
        $input = range(self::MAXIMUM - 5, self::MAXIMUM);

        $this->expectException(ValidationException::class);
        $this->expectExceptionMessage(stringify(self::MAXIMUM) . ' (the maximum of the input) is always invalid');

        $sut = new Max(new AlwaysInvalid());
        $sut->check($input);
    }

    /**
     * @return mixed[][]
     */
    public static function invalidInputProvider(): array
    {
        return [
            [42],
            [[]],
            [new ArrayObject()],
            [new stdClass()],
            [tmpfile()],
        ];
    }
}
