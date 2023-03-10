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

namespace Respect\Test\Unit\Assertion;

use Exception;
use PHPUnit\Framework\TestCase;
use Respect\Assertion\Assertion;
use Respect\Assertion\Assertor;
use Respect\Assertion\Composed;
use Respect\Validation\Validatable;
use stdClass;

/**
 * @covers \Respect\Assertion\Composed
 */
final class ComposedTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldHaveTheSameRuleAndDescriptionOfWrappedAssertion(): void
    {
        $rule = $this->createMock(Validatable::class);
        $description = new Exception();

        $assertion = $this->createMock(Assertion::class);
        $assertion
            ->expects($this->once())
            ->method('getRule')
            ->will($this->returnValue($rule));
        $assertion
            ->expects($this->once())
            ->method('getDescription')
            ->will($this->returnValue($description));

        $sut = new Composed($assertion, $this->createMock(Assertor::class));

        self::assertSame($rule, $sut->getRule());
        self::assertSame($description, $sut->getDescription());
    }

    /**
     * @test
     */
    public function itShouldAssertWithTheDefinedAssertor(): void
    {
        $input = new stdClass();
        $assertion = $this->createMock(Assertion::class);

        $assertor = $this->createMock(Assertor::class);
        $assertor
            ->expects($this->once())
            ->method('execute')
            ->with($assertion, $input);

        $sut = new Composed($assertion, $assertor);
        $sut->assert($input);
    }
}
