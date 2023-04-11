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
use Respect\Assertion\Creator\KeyCreator;
use Respect\Assertion\Exception\CannotCreateAssertionException;
use Respect\Test\Unit\Assertion\Double\FakeCreator;
use Respect\Validation\Rules\Key;
use Respect\Validation\Rules\Not;
use stdClass;

use function Respect\Stringifier\stringify;
use function sprintf;
use function tmpfile;
use function ucfirst;

/**
 * @covers \Respect\Assertion\Creator\KeyCreator
 */
final class KeyCreatorTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldThrowAnExceptionWhenPrefixIsInvalid(): void
    {
        $name = 'something';
        $parameters = [1, 2, 3];

        $this->expectExceptionObject(CannotCreateAssertionException::fromAssertionName($name));

        $sut = new KeyCreator(new FakeCreator());
        $sut->create($name, $parameters);
    }

    /**
     * @test
     *
     * @dataProvider invalidKeyProvider
     */
    public function itShouldThrowAnExceptionWhenKeyIsNotStringOrInteger(mixed $key): void
    {
        $this->expectException(CannotCreateAssertionException::class);
        $this->expectExceptionMessage(sprintf('%s is an invalid array key', stringify($key)));

        $sut = new KeyCreator(new FakeCreator());
        $sut->create('key', [$key]);
    }

    /**
     * @test
     */
    public function itShouldCreateKeyPresentAssertion(): void
    {
        $key = 'foo';

        $sut = new KeyCreator(new FakeCreator());
        $assertion = $sut->create('keyPresent', [$key]);

        self::assertEquals(new Key('foo'), $assertion->getRule());
    }

    /**
     * @test
     *
     * @dataProvider invalidDescriptionProvider
     */
    public function itShouldNotCreateKeyPresentAssertionWhenDescriptionIsInvalid(mixed $description): void
    {
        $this->expectException(CannotCreateAssertionException::class);
        $this->expectExceptionMessage('"keyPresent" assertion has an invalid error description');

        $sut = new KeyCreator(new FakeCreator());
        $sut->create('keyPresent', ['foo', $description]);
    }

    /**
     * @test
     */
    public function itShouldCreateKeyNotPresentAssertion(): void
    {
        $key = 'foo';

        $sut = new KeyCreator(new FakeCreator());
        $assertion = $sut->create('keyNotPresent', [$key]);

        self::assertEquals(new Not(new Key('foo')), $assertion->getRule());
    }

    /**
     * @test
     *
     * @dataProvider invalidDescriptionProvider
     */
    public function itShouldNotCreateKeyNotPresentAssertionWhenDescriptionIsInvalid(mixed $description): void
    {
        $this->expectException(CannotCreateAssertionException::class);
        $this->expectExceptionMessage('"keyNotPresent" assertion has an invalid error description');

        $sut = new KeyCreator(new FakeCreator());
        $sut->create('keyNotPresent', ['foo', $description]);
    }

    /**
     * @test
     */
    public function itShouldCreateKeyAssertionWithExtraRule(): void
    {
        $key = 'foo';

        $nextName = 'something';
        $nextParameters = [1, 2];

        $name = 'key' . ucfirst($nextName);
        $parameters = [$key, ...$nextParameters];

        $nextCreator = new FakeCreator();

        $sut = new KeyCreator($nextCreator);
        $assertion = $sut->create($name, $parameters);

        self::assertEquals(
            new Assertion(
                new Key($key, $nextCreator->getLastCreatedRule()),
                $nextCreator->getLastCreatedDescription()
            ),
            $assertion
        );
        self::assertEquals($nextCreator->getLastCalledName(), $nextName);
        self::assertEquals($nextCreator->getLastCalledParameters(), $nextParameters);
    }

    /**
     * @return array<int, array{0: mixed}>
     */
    public static function invalidKeyProvider(): array
    {
        return [
            [null],
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
