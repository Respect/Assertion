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

final class KeyPrefixTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldThrowWhenKeyIsNotPresent(): void
    {
        $this->expectExceptionMessage('`.bar` must be present');

        Assert::keyPresent(['foo' => true], 'bar');
    }

    /**
     * @test
     */
    public function itShouldThrowWhenKeyIsPresent(): void
    {
        $this->expectExceptionMessage('`.bar` must not be present');

        Assert::keyNotPresent(['bar' => 2], 'bar');
    }

    /**
     * @test
     */
    public function itShouldThrowWhenKeyValueDoesNotMatch(): void
    {
        $this->expectExceptionMessage('`.foo` must be equal to 3');

        Assert::keyEquals(['foo' => 2], 'foo', 3);
    }

    /**
     * @test
     */
    public function itShouldThrowWhenKeyValueFailsAssertion(): void
    {
        $this->expectExceptionMessage('`.bar` must be a negative number');

        Assert::keyNegative(['bar' => 2], 'bar');
    }

    /**
     * @test
     */
    public function itShouldThrowWhenKeyValueFailsNegatedAssertion(): void
    {
        $this->expectExceptionMessage('`.bar` must not be an integer');

        Assert::keyNotIntType(['bar' => 2], 'bar');
    }

    /**
     * @test
     */
    public function itShouldThrowWhenReferencedKeyDoesNotExist(): void
    {
        $this->expectExceptionMessage('`.baz` must be present');

        Assert::keyNegative(['foo' => 2], 'baz');
    }

    /**
     * @test
     */
    public function itShouldThrowWhenKeyValueFailsExistsAssertion(): void
    {
        $this->expectExceptionMessage('`.foo` must be an existing file');

        Assert::keyExists(['foo' => '/path/to/file.txt'], 'foo');
    }

    /**
     * @test
     */
    public function itShouldThrowForThatKeyChainWhenAssertionFails(): void
    {
        $this->expectExceptionMessage('The length of `.foo` must be less than 4');

        Assert::thatKey(['foo' => 'my-string'], 'foo')
            ->stringType()
            ->startsWith('my-')
            ->lengthLessThan(4);
    }

    /**
     * @test
     */
    public function itShouldThrowForChainWithKeySegmentWhenAssertionFails(): void
    {
        $this->expectExceptionMessage('`.bar` must be less than 40');

        Assert::that(['foo' => 'my-string', 'bar' => 42])
            ->arrayType()
            ->key('foo')->stringType()->startsWith('my-')
            ->key('bar')->intType()->positive()->lessThan(40);
    }
}
