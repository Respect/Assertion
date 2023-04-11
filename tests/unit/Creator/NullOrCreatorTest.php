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
use Respect\Assertion\Creator\NullOrCreator;
use Respect\Assertion\Exception\CannotCreateAssertionException;
use Respect\Test\Unit\Assertion\Double\FakeCreator;
use Respect\Validation\Rules\Nullable;

use function ucfirst;

/**
 * @covers \Respect\Assertion\Creator\NullOrCreator
 */
final class NullOrCreatorTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldThrowAnExceptionWhenPrefixIsInvalid(): void
    {
        $name = 'something';
        $parameters = [1, 2, 3];

        $this->expectExceptionObject(CannotCreateAssertionException::fromAssertionName($name));

        $sut = new NullOrCreator(new FakeCreator());
        $sut->create($name, $parameters);
    }

    /**
     * @test
     */
    public function itShouldCreateNullOrAssertionWithExtraRule(): void
    {
        $nextName = 'something';
        $nextParameters = [1, 2];

        $name = 'nullOr' . ucfirst($nextName);
        $parameters = $nextParameters;

        $nextCreator = new FakeCreator();

        $sut = new NullOrCreator($nextCreator);

        $assertion = $sut->create($name, $parameters);

        self::assertEquals(
            new Assertion(
                new Nullable($nextCreator->getLastCreatedRule()),
                $nextCreator->getLastCreatedDescription()
            ),
            $assertion
        );
        self::assertEquals($nextCreator->getLastCalledName(), $nextName);
        self::assertEquals($nextCreator->getLastCalledParameters(), $nextParameters);
    }
}
