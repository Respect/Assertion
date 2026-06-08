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

use PHPUnit\Framework\TestCase;
use Respect\Assertion\Assert;

final class NotPrefixTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldThrowWhenStaticNotCallFails(): void
    {
        $this->expectExceptionMessage('2 must be an odd number');

        Assert::notEven(2);
    }

    /**
     * @test
     */
    public function itShouldThrowWhenStaticNotInCallFails(): void
    {
        $this->expectExceptionMessage('3 must not be in `[1, 2, 3, 4]`');

        Assert::notIn(3, [1, 2, 3, 4]);
    }

    /**
     * @test
     */
    public function itShouldThrowForThatNotChainWhenAssertionFails(): void
    {
        $this->expectExceptionMessage('"1" must not be a positive number');

        Assert::thatNot('1')
            ->intType()
            ->positive()
            ->between(1, 3);
    }

    /**
     * @test
     */
    public function itShouldThrowForChainWithNotSegmentWhenAssertionFails(): void
    {
        $this->expectExceptionMessage('"1" must not be a positive number');

        Assert::that('1')
            ->not()->intType()->positive()->between(1, 3);
    }
}
