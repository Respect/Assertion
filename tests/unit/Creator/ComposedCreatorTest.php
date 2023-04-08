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
use Respect\Assertion\Assertor;
use Respect\Assertion\Composed;
use Respect\Assertion\Creator;
use Respect\Assertion\Creator\ComposedCreator;

/**
 * @covers \Respect\Assertion\Creator\ComposedCreator
 */
final class ComposedCreatorTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldSkipToNextCreatorWhenPrefixIsInvalid(): void
    {
        $prefix = 'right';

        $name = 'wrongSomething';
        $parameters = [1, 2, 3];

        $assertion = $this->createMock(Assertion::class);

        $nextCreator = $this->createMock(Creator::class);
        $nextCreator
            ->expects($this->once())
            ->method('create')
            ->with($name, $parameters)
            ->willReturn($assertion);

        $assertor = $this->createMock(Assertor::class);
        $assertor
            ->expects($this->once())
            ->method('getName')
            ->willReturn($prefix);

        $sut = new ComposedCreator($assertor, $nextCreator);

        self::assertSame($assertion, $sut->create($name, $parameters));
    }

    /**
     * @test
     */
    public function itShouldCreateAssertion(): void
    {
        $prefix = 'right';

        $name = 'rightSomething';
        $nextName = 'Something';
        $parameters = [1, 2, 3];

        $assertion = $this->createMock(Assertion::class);

        $nextCreator = $this->createMock(Creator::class);
        $nextCreator
            ->expects($this->once())
            ->method('create')
            ->with($nextName, $parameters)
            ->willReturn($assertion);

        $assertor = $this->createMock(Assertor::class);
        $assertor
            ->expects($this->once())
            ->method('getName')
            ->willReturn($prefix);

        $sut = new ComposedCreator($assertor, $nextCreator);

        self::assertInstanceOf(Composed::class, $sut->create($name, $parameters));
    }
}
