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
use Respect\Assertion\Creator;
use Respect\Assertion\Creator\NullOrCreator;
use Respect\Validation\Rules\Nullable;
use Respect\Validation\Validatable;

/**
 * @covers \Respect\Assertion\Creator\NullOrCreator
 */
final class NullOrCreatorTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldSkipToNextCreatorWhenPrefixIsInvalid(): void
    {
        $name = 'something';
        $parameters = [1, 2, 3];

        $assertion = $this->createMock(Assertion::class);

        $nextCreator = $this->createMock(Creator::class);
        $nextCreator
            ->expects($this->once())
            ->method('create')
            ->with($name, $parameters)
            ->willReturn($assertion);

        $sut = new NullOrCreator($nextCreator);

        self::assertSame($assertion, $sut->create($name, $parameters));
    }

    /**
     * @test
     */
    public function itShouldCreateNullOrAssertionWithExtraRule(): void
    {
        $name = 'nullOrSomething';
        $description = 'This is the description';
        $nextName = 'something';
        $parameters = [1, 2];

        $rule = $this->createMock(Validatable::class);

        $assertion = $this->createMock(Assertion::class);
        $assertion
            ->expects($this->once())
            ->method('getRule')
            ->willReturn($rule);
        $assertion
            ->expects($this->once())
            ->method('getDescription')
            ->willReturn($description);

        $nextCreator = $this->createMock(Creator::class);
        $nextCreator
            ->expects($this->once())
            ->method('create')
            ->with($nextName, $parameters)
            ->willReturn($assertion);

        $sut = new NullOrCreator($nextCreator);

        $assertion = $sut->create($name, $parameters);

        self::assertEquals(new Nullable($rule), $assertion->getRule());
        self::assertEquals($description, $assertion->getDescription());
    }
}
