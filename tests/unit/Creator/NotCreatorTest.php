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
use Respect\Assertion\Creator\NotCreator;
use Respect\Assertion\Exception\CannotCreateAssertionException;
use Respect\Test\Unit\Assertion\Double\FakeCreator;
use Respect\Validation\Rules\Not;

use function ucfirst;

/**
 * @covers \Respect\Assertion\Creator\NotCreator
 */
final class NotCreatorTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldThrowAnExceptionWhenPrefixIsInvalid(): void
    {
        $name = 'isNotEquals';
        $parameters = [1, 2, 3];

        $this->expectExceptionObject(CannotCreateAssertionException::fromAssertionName($name));

        $sut = new NotCreator(new FakeCreator());
        $sut->create($name, $parameters);
    }

    /**
     * @test
     *
     * @dataProvider cannotInvertProvider
     */
    public function itShouldThrowAnExceptionCannotInvertRule(string $name): void
    {
        $parameters = [1, 2, 3];

        $this->expectExceptionObject(CannotCreateAssertionException::fromAssertionName($name));

        $sut = new NotCreator(new FakeCreator());
        $sut->create($name, $parameters);
    }

    /**
     * @test
     */
    public function itShouldCreateAssertion(): void
    {
        $nextName = 'something';
        $nextParameters = [1, 2, 3];

        $name = 'not' . ucfirst($nextName);
        $parameters = $nextParameters;

        $nextCreator = new FakeCreator();

        $sut = new NotCreator($nextCreator);
        $assertion = $sut->create($name, $parameters);

        self::assertEquals(
            new Assertion(
                new Not($nextCreator->getLastCreatedRule()),
                $nextCreator->getLastCreatedDescription()
            ),
            $assertion
        );
        self::assertSame($nextCreator->getLastCalledName(), $nextName);
        self::assertSame($nextCreator->getLastCalledParameters(), $nextParameters);
    }

    /**
     * @return string[][]
     */
    public static function cannotInvertProvider(): array
    {
        return [
            ['notEmpty'],
            ['notEmoji'],
            ['notBlank'],
            ['notOptional'],
        ];
    }
}
