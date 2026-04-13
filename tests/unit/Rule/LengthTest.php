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
use Respect\Assertion\Rule\Length;
use Respect\Test\Unit\Assertion\Double\FakeRule;
use Respect\Validation\Exceptions\ValidationException;
use Respect\Validation\ValidatorBuilder;
use Respect\Validation\Validators\AlwaysInvalid;
use stdClass;

use function count;
use function mb_strlen;
use function range;
use function Respect\Stringifier\stringify;
use function tmpfile;

/**
 * @covers \Respect\Assertion\Rule\Length
 */
final class LengthTest extends TestCase
{
    /**
     * @test
     *
     * @dataProvider invalidInputProvider
     */
    public function itShouldThrowAnExceptionWhenInputIsNotStringOrCountable(mixed $input): void
    {
        $this->expectException(ValidationException::class);
        $this->expectExceptionMessage(stringify($input) . ' must be countable or a string');

        $sut = new Length(new AlwaysInvalid());
        ValidatorBuilder::init($sut)->assert($input);
    }

    /**
     * @test
     */
    public function itShouldAssertLengthOfStrings(): void
    {
        $input = 'Isto é um teste';

        $rule = new FakeRule();

        $sut = new Length($rule);
        ValidatorBuilder::init($sut)->assert($input);

        self::assertSame(mb_strlen($input), $rule->getCalledInputs()[0]);
    }

    /**
     * @test
     */
    public function itShouldAssertLengthOfArrays(): void
    {
        $input = range(1, 5);

        $rule = new FakeRule();

        $sut = new Length($rule);
        ValidatorBuilder::init($sut)->assert($input);

        self::assertSame(count($input), $rule->getCalledInputs()[0]);
        self::assertTrue($sut->evaluate($input)->hasPassed);
    }

    /**
     * @test
     */
    public function itShouldAssertLengthOfCountable(): void
    {
        $input = new ArrayObject(range(1, 5));

        $rule = new FakeRule();

        $sut = new Length($rule);
        ValidatorBuilder::init($sut)->assert($input);

        self::assertSame($input->count(), $rule->getCalledInputs()[0]);
    }

    /**
     * @test
     */
    public function itShouldModifyValidationExceptionsWhenAssertionFails(): void
    {
        $input = [1, 2, 3];

        $this->expectException(ValidationException::class);
        $this->expectExceptionMessage('The length of `[1, 2, 3]` must be valid');

        $sut = new Length(new AlwaysInvalid());
        ValidatorBuilder::init($sut)->assert($input);
    }

    /**
     * @return mixed[][]
     */
    public static function invalidInputProvider(): array
    {
        return [
            [42],
            [true],
            [new stdClass()],
            [tmpfile()],
        ];
    }
}
