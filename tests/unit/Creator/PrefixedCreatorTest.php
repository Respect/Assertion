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
use Respect\Assertion\Creator\PrefixedCreator;
use Respect\Assertion\Exception\CannotCreateAssertionException;
use Respect\Assertion\Rule\Rule;
use Respect\Test\Unit\Assertion\Double\FakeCreator;
use Respect\Validation\Rules\Optional;

use function ucfirst;

/**
 * @covers \Respect\Assertion\Creator\PrefixedCreator
 */
final class PrefixedCreatorTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldThrowAnExceptionWhenPrefixIsInvalid(): void
    {
        $name = 'somethingWithoutPrefix';
        $parameters = [1, 2, 3];

        $this->expectExceptionObject(CannotCreateAssertionException::fromAssertionName($name));

        $sut = new PrefixedCreator('prefix', Rule::class, new FakeCreator());
        $sut->create($name, $parameters);
    }

    /**
     * @test
     */
    public function itShouldCreateAssertion(): void
    {
        $prefix = 'optional';

        $nextName = 'something';
        $nextParameters = [1, 2, 3];

        $name = $prefix . ucfirst($nextName);
        $parameters = $nextParameters;

        $nextCreator = new FakeCreator();

        $sut = new PrefixedCreator($prefix, Optional::class, $nextCreator);
        $assertion = $sut->create($name, $parameters);

        self::assertEquals(
            new Assertion(
                new Optional($nextCreator->getLastCreatedRule()),
                $nextCreator->getLastCreatedDescription(),
            ),
            $assertion
        );
        self::assertEquals($nextCreator->getLastCalledName(), $nextName);
        self::assertEquals($nextCreator->getLastCalledParameters(), $nextParameters);
    }
}
