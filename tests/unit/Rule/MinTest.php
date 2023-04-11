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
use Respect\Assertion\Rule\Min;
use Respect\Test\Unit\Assertion\Double\FakeRule;
use Respect\Validation\Exceptions\ValidationException;
use Respect\Validation\Rules\AlwaysInvalid;
use stdClass;

use function range;
use function Respect\Stringifier\stringify;
use function tmpfile;

/**
 * @covers \Respect\Assertion\Rule\Min
 * @covers \Respect\Assertion\Rule\Rule
 */
final class MinTest extends TestCase
{
    private const MINIMUM = 100;

    /**
     * @test
     *
     * @dataProvider invalidInputProvider
     */
    public function itShouldThrowAnExceptionWhenInputIsNotStringOrCountable(mixed $input): void
    {
        $this->expectException(ValidationException::class);
        $this->expectExceptionMessage(stringify($input) . ' must be an non-empty array or iterable');

        $sut = new Min(new AlwaysInvalid());
        $sut->check($input);
    }

    /**
     * @test
     */
    public function itShouldAssertTheMinValueOfTheInputWhenItIsAnArray(): void
    {
        $input = range(self::MINIMUM, self::MINIMUM + 5);

        $rule = new FakeRule();

        $sut = new Min($rule);
        $sut->check($input);

        self::assertSame(self::MINIMUM, $rule->getCalledInputs()[0]);
        self::assertTrue($sut->validate($input));
    }

    /**
     * @test
     */
    public function itShouldAssertTheMinValueOfTheInputWhenItIsAnIterableValue(): void
    {
        $input = new ArrayObject(range(self::MINIMUM, self::MINIMUM + 5));

        $rule = new FakeRule();

        $sut = new Min($rule);
        $sut->check($input);

        self::assertSame(self::MINIMUM, $rule->getCalledInputs()[0]);
        self::assertTrue($sut->validate($input));
    }

    /**
     * @test
     */
    public function itShouldModifyValidationExceptionsWhenAssertionFails(): void
    {
        $input = range(self::MINIMUM, self::MINIMUM + 5);

        $this->expectException(ValidationException::class);
        $this->expectExceptionMessage(stringify(self::MINIMUM) . ' (the minimum of the input) is always invalid');

        $sut = new Min(new AlwaysInvalid());
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
