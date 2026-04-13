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
use Respect\Validation\ValidatorBuilder;
use Respect\Validation\Validators\AlwaysInvalid;
use stdClass;

use function range;
use function Respect\Stringifier\stringify;
use function tmpfile;

/**
 * @covers \Respect\Assertion\Rule\Min
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
        $this->expectExceptionMessage(stringify($input) . ' must be iterable');

        $sut = new Min(new AlwaysInvalid());
        ValidatorBuilder::init($sut)->assert($input);
    }

    /**
     * @test
     */
    public function itShouldAssertTheMinValueOfTheInputWhenItIsAnArray(): void
    {
        $input = range(self::MINIMUM, self::MINIMUM + 5);

        $rule = new FakeRule();

        $sut = new Min($rule);
        ValidatorBuilder::init($sut)->assert($input);

        self::assertSame(self::MINIMUM, $rule->getCalledInputs()[0]);
        self::assertTrue($sut->evaluate($input)->hasPassed);
    }

    /**
     * @test
     */
    public function itShouldAssertTheMinValueOfTheInputWhenItIsAnIterableValue(): void
    {
        $input = new ArrayObject(range(self::MINIMUM, self::MINIMUM + 5));

        $rule = new FakeRule();

        $sut = new Min($rule);
        ValidatorBuilder::init($sut)->assert($input);

        self::assertSame(self::MINIMUM, $rule->getCalledInputs()[0]);
        self::assertTrue($sut->evaluate($input)->hasPassed);
    }

    /**
     * @test
     */
    public function itShouldModifyValidationExceptionsWhenAssertionFails(): void
    {
        $input = range(self::MINIMUM, self::MINIMUM + 5);

        $this->expectException(ValidationException::class);
        $this->expectExceptionMessage('The minimum of `[100, 101, 102, 103, 104, ...]` must be valid');

        $sut = new Min(new AlwaysInvalid());
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
