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

final class AllPrefixTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldThrowForStaticCallWhenAnyItemFails(): void
    {
        $this->expectExceptionMessage('Every item in `[1, 2, "3"]` must be an integer');

        Assert::allIntType([1, 2, '3']);
    }

    /**
     * @test
     */
    public function itShouldThrowForThatAllChainWhenAnyItemFails(): void
    {
        $this->expectExceptionMessage('Every item in `[1, 2, 2, 1, 3]` must be between 1 and 2');

        Assert::thatAll([1, 2, 2, 1, 3])
            ->intVal()
            ->between(1, 2);
    }

    /**
     * @test
     */
    public function itShouldThrowForChainWithAllSegmentWhenEarlierAssertionFails(): void
    {
        $this->expectExceptionMessage('The length of `[1, 2, 2, 1, 3]` must be less than 4');

        Assert::that([1, 2, 2, 1, 3])
            ->arrayType()
            ->lengthLessThan(4)
            ->all()->intVal()->between(1, 2);
    }
}
