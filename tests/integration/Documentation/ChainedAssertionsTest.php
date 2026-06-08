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

use DomainException;
use PHPUnit\Framework\TestCase;
use Respect\Assertion\Assert;

final class ChainedAssertionsTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldThrowFirstFailedRuleMessageFromChain(): void
    {
        $this->expectExceptionMessage('I expected a positive number');

        Assert::that(-1)
            ->intVal('The number {{subject}} must be an integer')
            ->positive('I expected a positive number')
            ->lessThan(4);
    }

    /**
     * @test
     */
    public function itShouldThrowChainExceptionObjectWhenDescriptionIsException(): void
    {
        $this->expectException(DomainException::class);
        $this->expectExceptionMessage('The number must be valid');

        Assert::that(0, new DomainException('The number must be valid'))
            ->positive()
            ->greaterThan(5);
    }

    /**
     * @test
     */
    public function itShouldThrowCustomMessageFromFailedRuleWhenOverridingChainMessage(): void
    {
        $this->expectExceptionMessage('But it is not greater than 5, though');

        Assert::that(3, 'The number must be valid')
            ->positive()
            ->greaterThan(5, 'But it is not greater than 5, though');
    }

    /**
     * @test
     */
    public function itShouldPropagateKeyPrefixInNestedAllAndKeyChain(): void
    {
        $this->expectExceptionMessage('The length of `.options` must be equal to 4');

        Assert::that(['names' => ['Respect', 'Assertion'], 'options' => [1, 2, 3]])
            ->all()->arrayType()
            ->key('names')->allStringType()
            ->key('options')->lengthEquals(4);
    }
}
