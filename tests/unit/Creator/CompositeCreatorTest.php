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
use Respect\Assertion\Creator;
use Respect\Assertion\Creator\CompositeCreator;
use Respect\Assertion\Exception\CannotCreateAssertionException;
use Respect\Test\Unit\Assertion\Double\FakeCreator;

/**
 * @covers \Respect\Assertion\Creator\CompositeCreator
 */
final class CompositeCreatorTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldUseInternalCreatorsToCreatAssertion(): void
    {
        $name = 'something';
        $parameters = [1, 2, 3];

        $creator1 = new FakeCreator();
        $creator2 = new FakeCreator();
        $creator3 = new FakeCreator();

        $sut = new CompositeCreator($creator1, $creator2, $creator3);
        $assertion = $sut->create($name, $parameters);

        self::assertSame($creator1->getLastCreatedAssertion(), $assertion);
    }

    /**
     * @test
     */
    public function itShouldTryEachCreatorUntilOneSucceeds(): void
    {
        $name = 'something';
        $parameters = [1, 2, 3];

        $creator1 = $this->createMock(Creator::class);
        $creator1->expects(self::once())
            ->method('create')
            ->willThrowException(CannotCreateAssertionException::fromAssertionName($name));

        $creator2 = $this->createMock(Creator::class);
        $creator2->expects(self::once())
            ->method('create')
            ->willThrowException(CannotCreateAssertionException::fromAssertionName($name));

        $creator3 = new FakeCreator();

        $sut = new CompositeCreator($creator1, $creator2, $creator3);
        $assertion = $sut->create($name, $parameters);

        self::assertSame($creator3->getLastCreatedAssertion(), $assertion);
    }

    /**
     * @test
     */
    public function itShouldThrowAnExceptionWhenNonOfTheCreatorsCanCreateAnAssertion(): void
    {
        $name = 'something';
        $parameters = [1, 2, 3];

        $creator1 = $this->createMock(Creator::class);
        $creator1->expects(self::once())
            ->method('create')
            ->willThrowException(CannotCreateAssertionException::fromAssertionName($name));

        $creator2 = $this->createMock(Creator::class);
        $creator2->expects(self::once())
            ->method('create')
            ->willThrowException(CannotCreateAssertionException::fromAssertionName($name));

        $this->expectExceptionObject(CannotCreateAssertionException::fromAssertionName($name));

        $sut = new CompositeCreator($creator1, $creator2);
        $sut->create($name, $parameters);
    }

    /**
     * @test
     */
    public function itShouldCreateDefaultInstanceOfCompositeCreator(): void
    {
        self::assertInstanceOf(CompositeCreator::class, CompositeCreator::createDefault());
    }
}
