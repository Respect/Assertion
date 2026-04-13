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
use Respect\Validation\ValidatorBuilder;
use Respect\Validation\Validators\AlwaysInvalid;
use stdClass;

use function range;
use function Respect\Stringifier\stringify;
use function tmpfile;

/**
 * @covers \Respect\Assertion\Rule\Max
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
        $this->expectExceptionMessage(stringify($input) . ' must be iterable');

        $sut = new Max(new AlwaysInvalid());
        ValidatorBuilder::init($sut)->assert($input);
    }

    /**
     * @test
     */
    public function itShouldAssertTheMaxValueOfTheInputWhenItIsAnArray(): void
    {
        $input = range(self::MAXIMUM - 5, self::MAXIMUM);

        $rule = new FakeRule();

        $sut = new Max($rule);
        ValidatorBuilder::init($sut)->assert($input);

        self::assertSame(self::MAXIMUM, $rule->getCalledInputs()[0]);
        self::assertTrue($sut->evaluate($input)->hasPassed);
    }

    /**
     * @test
     */
    public function itShouldAssertTheMaxValueOfTheInputWhenItIsAnIterableValue(): void
    {
        $input = new ArrayObject(range(self::MAXIMUM - 5, self::MAXIMUM));

        $rule = new FakeRule();

        $sut = new Max($rule);
        ValidatorBuilder::init($sut)->assert($input);

        self::assertSame(self::MAXIMUM, $rule->getCalledInputs()[0]);
        self::assertTrue($sut->evaluate($input)->hasPassed);
    }

    /**
     * @test
     */
    public function itShouldModifyValidationExceptionsWhenAssertionFails(): void
    {
        $input = range(self::MAXIMUM - 5, self::MAXIMUM);

        $this->expectException(ValidationException::class);
        $this->expectExceptionMessage('The maximum of `[95, 96, 97, 98, 99, ...]` must be valid');

        $sut = new Max(new AlwaysInvalid());
        ValidatorBuilder::init($sut)->assert($input);
    }

    /**
     * @return mixed[][]
     */
    public static function invalidInputProvider(): array
    {
        return [
            [42],
            [new stdClass()],
            [tmpfile()],
        ];
    }
}
