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

namespace Respect\Test\Unit\Assertion\Creator;

use PHPUnit\Framework\TestCase;
use Respect\Assertion\Creator\PropertyCreator;
use Respect\Assertion\Standard;
use Respect\Test\Unit\Assertion\Double\FakeCreator;
use Respect\Validation\Rules\Attribute;
use Respect\Validation\Rules\Not;

use function ucfirst;

/**
 * @covers \Respect\Assertion\Creator\PropertyCreator
 */
final class PropertyCreatorTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldNotCreatePropertyAssertionWhenPrefixIsNotValid(): void
    {
        $name = 'something';
        $parameters = [1, 2, 3];

        $nextCreator = new FakeCreator();

        $sut = new PropertyCreator($nextCreator);
        $assertion = $sut->create($name, $parameters);

        self::assertSame($nextCreator->getLastCreatedAssertion(), $assertion);
    }

    /**
     * @test
     */
    public function itShouldCreateSimplePropertyAssertionWhenPrefixCalledPropertyPresent(): void
    {
        $property = 'foo';

        $sut = new PropertyCreator(new FakeCreator());
        $assertion = $sut->create('propertyPresent', [$property]);

        self::assertEquals(new Standard(new Attribute($property)), $assertion);
    }

    /**
     * @test
     */
    public function itShouldCreateSimplePropertyAssertionWhenPrefixCalledPropertyNotPresent(): void
    {
        $key = 'foo';

        $sut = new PropertyCreator(new FakeCreator());
        $assertion = $sut->create('propertyNotPresent', [$key]);

        self::assertEquals(new Standard(new Not(new Attribute('foo'))), $assertion);
    }

    /**
     * @test
     */
    public function itShouldCreatePropertyAssertionWhenPrefixCalledProperty(): void
    {
        $property = 'foo';

        $nextName = 'something';
        $nextParameters = [1, 2];

        $name = 'property' . ucfirst($nextName);
        $parameters = [$property, ...$nextParameters];

        $nextCreator = new FakeCreator();

        $sut = new PropertyCreator($nextCreator);
        $assertion = $sut->create($name, $parameters);

        self::assertEquals(
            new Standard(
                new Attribute($property, $nextCreator->getLastCreatedRule()),
                $nextCreator->getLastCreatedDescription()
            ),
            $assertion
        );
        self::assertEquals($nextName, $nextCreator->getLastCalledName());
        self::assertEquals($nextParameters, $nextCreator->getLastCalledParameters());
    }
}
