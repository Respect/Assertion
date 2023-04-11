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
use Respect\Assertion\Assertion;
use Respect\Assertion\Creator\PropertyCreator;
use Respect\Assertion\Exception\CannotCreateAssertionException;
use Respect\Test\Unit\Assertion\Double\FakeCreator;
use Respect\Validation\Rules\Attribute;
use Respect\Validation\Rules\Not;
use stdClass;

use function Respect\Stringifier\stringify;
use function sprintf;
use function tmpfile;
use function ucfirst;

/**
 * @covers \Respect\Assertion\Creator\PropertyCreator
 */
final class PropertyCreatorTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldThrowAnExceptionWhenPrefixIsInvalid(): void
    {
        $name = 'something';
        $parameters = [1, 2, 3];

        $this->expectExceptionObject(CannotCreateAssertionException::fromAssertionName($name));

        $sut = new PropertyCreator(new FakeCreator());
        $sut->create($name, $parameters);
    }

    /**
     * @test
     *
     * @dataProvider invalidPropertyProvider
     */
    public function itShouldThrowAnExceptionWhenPropertyIsNotString(mixed $property): void
    {
        $this->expectException(CannotCreateAssertionException::class);
        $this->expectExceptionMessage(sprintf('%s is an invalid property name', stringify($property)));

        $sut = new PropertyCreator(new FakeCreator());
        $sut->create('property', [$property]);
    }

    /**
     * @test
     */
    public function itShouldCreateSimplePropertyAssertionWhenPrefixCalledPropertyPresent(): void
    {
        $property = 'foo';

        $sut = new PropertyCreator(new FakeCreator());
        $assertion = $sut->create('propertyPresent', [$property]);

        self::assertEquals(new Assertion(new Attribute($property)), $assertion);
    }

    /**
     * @test
     *
     * @dataProvider invalidDescriptionProvider
     */
    public function itShouldNotCreatePropertyPresentAssertionWhenDescriptionIsInvalid(mixed $description): void
    {
        $this->expectException(CannotCreateAssertionException::class);
        $this->expectExceptionMessage('"propertyPresent" assertion has an invalid error description');

        $sut = new PropertyCreator(new FakeCreator());
        $sut->create('propertyPresent', ['foo', $description]);
    }

    /**
     * @test
     */
    public function itShouldCreateSimplePropertyAssertionWhenPrefixCalledPropertyNotPresent(): void
    {
        $key = 'foo';

        $sut = new PropertyCreator(new FakeCreator());
        $assertion = $sut->create('propertyNotPresent', [$key]);

        self::assertEquals(new Assertion(new Not(new Attribute('foo'))), $assertion);
    }

    /**
     * @test
     *
     * @dataProvider invalidDescriptionProvider
     */
    public function itShouldNotCreatePropertyNotPresentAssertionWhenDescriptionIsInvalid(mixed $description): void
    {
        $this->expectException(CannotCreateAssertionException::class);
        $this->expectExceptionMessage('"propertyNotPresent" assertion has an invalid error description');

        $sut = new PropertyCreator(new FakeCreator());
        $sut->create('propertyNotPresent', ['foo', $description]);
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
            new Assertion(
                new Attribute($property, $nextCreator->getLastCreatedRule()),
                $nextCreator->getLastCreatedDescription()
            ),
            $assertion
        );
        self::assertEquals($nextName, $nextCreator->getLastCalledName());
        self::assertEquals($nextParameters, $nextCreator->getLastCalledParameters());
    }

    /**
     * @return array<int, array{0: mixed}>
     */
    public static function invalidPropertyProvider(): array
    {
        return [
            [null],
            [1],
            [1.5],
            [[]],
            [tmpfile()],
            [static fn() => 1],
            [new stdClass()],
        ];
    }

    /**
     * @return array<int, array{0: mixed}>
     */
    public static function invalidDescriptionProvider(): array
    {
        return StandardCreatorTest::invalidDescriptionProvider();
    }
}
