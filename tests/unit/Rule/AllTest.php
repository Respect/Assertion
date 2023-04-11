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

use PHPUnit\Framework\TestCase;
use Respect\Assertion\Rule\All;
use Respect\Test\Unit\Assertion\Double\FakeRule;
use Respect\Validation\Exceptions\AlwaysInvalidException;
use Respect\Validation\Exceptions\IterableTypeException;
use Respect\Validation\Rules\AlwaysInvalid;

use function range;

/**
 * @covers \Respect\Assertion\Rule\All
 * @covers \Respect\Assertion\Rule\Rule
 */
final class AllTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldThrowAnExceptionWhenInputIsNotIterable(): void
    {
        $this->expectException(IterableTypeException::class);

        $sut = new All(new AlwaysInvalid());
        $sut->check(42);
    }

    /**
     * @test
     */
    public function itShouldAssertEveryValueInTheInput(): void
    {
        $input = range(100, 105);

        $rule = new FakeRule();

        $sut = new All($rule);
        $sut->check($input);

        self::assertSame($input, $rule->getCalledInputs());
        self::assertTrue($sut->validate($input));
    }

    /**
     * @test
     */
    public function itShouldModifyValidationExceptionsWhenAssertionFails(): void
    {
        $input = [1, 2, 3];

        $this->expectException(AlwaysInvalidException::class);
        $this->expectExceptionMessage('1 (like all items of the input) is always invalid');

        $sut = new All(new AlwaysInvalid());
        $sut->check($input);
    }
}
