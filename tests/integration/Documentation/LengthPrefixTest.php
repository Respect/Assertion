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

namespace Respect\Test\Integration\Assertion\Documentation;

use ArrayObject;
use PHPUnit\Framework\TestCase;
use Respect\Assertion\Assert;

final class LengthPrefixTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldThrowWhenStringLengthFailsBetweenAssertion(): void
    {
        $this->expectExceptionMessage('The length of "string" must be between 10 and 15');

        Assert::lengthBetween('string', 10, 15);
    }

    /**
     * @test
     */
    public function itShouldThrowWhenArrayLengthFailsOddAssertion(): void
    {
        $this->expectExceptionMessage('The length of `[1, 2, 3, 4]` must be an odd number');

        Assert::lengthOdd([1, 2, 3, 4]);
    }

    /**
     * @test
     */
    public function itShouldThrowWhenArrayObjectLengthFailsEvenAssertion(): void
    {
        $this->expectExceptionMessage(
            'The length of `ArrayObject { getArrayCopy() => [1, 2, 3] }` must be an even number'
        );

        Assert::lengthEven(new ArrayObject([1, 2, 3]));
    }

    /**
     * @test
     */
    public function itShouldThrowWhenArrayLengthFailsNotMultipleAssertion(): void
    {
        $this->expectExceptionMessage('The length of `[1, 2]` must not be a multiple of 2');

        Assert::lengthNotMultiple([1, 2], 2);
    }
}
