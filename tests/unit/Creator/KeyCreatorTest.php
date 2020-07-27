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

namespace unit\Creator;

use PHPUnit\Framework\TestCase;
use Respect\Assertion\Assertion;
use Respect\Assertion\AssertionCreator;
use Respect\Assertion\Creator\KeyCreator;
use Respect\Validation\Rules\Key;
use Respect\Validation\Rules\Not;
use Respect\Validation\Validatable;

/**
 * @covers \Respect\Assertion\Creator\KeyCreator
 *
 * @author Henrique Moody <henriquemoody@gmail.com>
 */
final class KeyCreatorTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldSkipToNextCreatorWhenPrefixIsInvalid(): void
    {
        $name = 'something';
        $parameters = [1, 2, 3];

        $assertion = $this->createMock(Assertion::class);

        $nextCreator = $this->createMock(AssertionCreator::class);
        $nextCreator
            ->expects($this->once())
            ->method('create')
            ->with($name, $parameters)
            ->willReturn($assertion);

        $sut = new KeyCreator($nextCreator);

        self::assertSame($assertion, $sut->create($name, $parameters));
    }

    /**
     * @test
     */
    public function itShouldCreateKeyPresentAssertion(): void
    {
        $key = 'foo';

        $sut = new KeyCreator($this->createMock(AssertionCreator::class));
        $assertion = $sut->create('keyPresent', [$key]);

        self::assertEquals(new Key('foo'), $assertion->getRule());
    }

    /**
     * @test
     */
    public function itShouldCreateKeyNotPresentAssertion(): void
    {
        $key = 'foo';

        $sut = new KeyCreator($this->createMock(AssertionCreator::class));
        $assertion = $sut->create('keyNotPresent', [$key]);

        self::assertEquals(new Not(new Key('foo')), $assertion->getRule());
    }

    /**
     * @test
     */
    public function itShouldCreateKeyAssertionWithExtraRule(): void
    {
        $key = 'foo';

        $name = 'keySomething';
        $parameters = [$key, 1, 2];

        $nextName = 'something';
        $nextParameters = [1, 2];

        $rule = $this->createMock(Validatable::class);

        $assertion = $this->createMock(Assertion::class);
        $assertion
            ->expects($this->once())
            ->method('getRule')
            ->willReturn($rule);
        $assertion
            ->expects($this->once())
            ->method('getDescription')
            ->willReturn(null);

        $nextCreator = $this->createMock(AssertionCreator::class);
        $nextCreator
            ->expects($this->once())
            ->method('create')
            ->with($nextName, $nextParameters)
            ->willReturn($assertion);

        $sut = new KeyCreator($nextCreator);

        $assertion = $sut->create($name, $parameters);

        self::assertEquals(new Key($key, $rule), $assertion->getRule());
    }
}
