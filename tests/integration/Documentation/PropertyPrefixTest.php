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
use stdClass;

final class PropertyPrefixTest extends TestCase
{
    private stdClass $input;

    /**
     * @test
     */
    public function itShouldThrowWhenPropertyIsNotPresent(): void
    {
        $this->expectExceptionMessage('`.bar` must be present');

        Assert::propertyPresent($this->input, 'bar');
    }

    /**
     * @test
     */
    public function itShouldThrowWhenPropertyIsPresent(): void
    {
        $this->expectExceptionMessage('`.foo` must not be present');

        Assert::propertyNotPresent($this->input, 'foo');
    }

    /**
     * @test
     */
    public function itShouldThrowWhenPropertyValueDoesNotMatch(): void
    {
        $this->expectExceptionMessage('`.foo` must be equal to 3');

        Assert::propertyEquals($this->input, 'foo', 3);
    }

    /**
     * @test
     */
    public function itShouldThrowWhenPropertyValueFailsAssertion(): void
    {
        $this->expectExceptionMessage('`.foo` must be a negative number');

        Assert::propertyNegative($this->input, 'foo');
    }

    /**
     * @test
     */
    public function itShouldThrowWhenPropertyValueFailsNegatedAssertion(): void
    {
        $this->expectExceptionMessage('`.foo` must not be an integer');

        Assert::propertyNotIntType($this->input, 'foo');
    }

    /**
     * @test
     */
    public function itShouldThrowWhenReferencedPropertyDoesNotExist(): void
    {
        $this->expectExceptionMessage('`.baz` must be present');

        Assert::propertyNegative($this->input, 'baz');
    }

    /**
     * @test
     */
    public function itShouldThrowWhenPropertyValueFailsExistsAssertion(): void
    {
        $this->expectExceptionMessage('`.foo` must be an existing file');

        Assert::propertyExists($this->input, 'foo');
    }

    /**
     * @test
     */
    public function itShouldThrowForThatPropertyChainWhenAssertionFails(): void
    {
        $this->expectExceptionMessage('`.foo` must be greater than 5');

        Assert::thatProperty($this->input, 'foo')
            ->intType()
            ->positive()
            ->greaterThan(5);
    }

    /**
     * @test
     */
    public function itShouldThrowForChainWithPropertySegmentWhenAssertionFails(): void
    {
        $this->expectExceptionMessage('`.foo` must be greater than 5');

        Assert::that($this->input)
            ->instance(stdClass::class)
            ->property('foo')->intType()->positive()->greaterThan(5);
    }

    protected function setUp(): void
    {
        $this->input = new stdClass();
        $this->input->foo = 1;
    }
}
