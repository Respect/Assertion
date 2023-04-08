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

namespace Respect\Test\Unit\Assertion\Chain;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Respect\Assertion\Chain\AssociativeFullChain;
use Respect\Assertion\Chain\RegularFullChain;
use Respect\Test\Unit\Assertion\Double\FakeCreator;

use function ucfirst;

/**
 * @covers \Respect\Assertion\Chain\RegularFullChain
 * @covers \Respect\Assertion\Chain\FullChain
 */
final class RegularFullChainTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldCreateChainWithPrefix(): void
    {
        $prefix = 'prefix';

        $name = 'anything';
        $input = 'something';
        $description = new InvalidArgumentException();

        $creator = new FakeCreator();
        $sut = new RegularFullChain($creator, $input, $description, $prefix);
        $sut->__call($name, []);

        self::assertSame($prefix . ucfirst($name), $creator->getLastCalledName());
        self::assertSame($input, $creator->getLastCreatedRule()->getCalledInputs()[0]);
        self::assertSame([$description], $creator->getLastCalledParameters());
    }

    /**
     * @test
     */
    public function itShouldCreateChainWithAllPrefix(): void
    {
        $creator = new FakeCreator();

        $sut = new RegularFullChain($creator, 'input', 'description', 'prefix');
        $chain = $sut->all('all description');

        self::assertEquals(
            new RegularFullChain($creator, 'input', 'all description', 'all'),
            $chain
        );
    }

    /**
     * @test
     */
    public function itShouldCreateChainWithNotPrefix(): void
    {
        $creator = new FakeCreator();

        $sut = new RegularFullChain($creator, 'input', 'description', 'prefix');
        $chain = $sut->not('not description');

        self::assertEquals(
            new RegularFullChain($creator, 'input', 'not description', 'not'),
            $chain
        );
    }

    /**
     * @test
     */
    public function itShouldCreateChainWithNullOfPrefix(): void
    {
        $creator = new FakeCreator();

        $sut = new RegularFullChain($creator, 'input', 'description', 'prefix');
        $chain = $sut->nullOr('nullOr description');

        self::assertEquals(
            new RegularFullChain($creator, 'input', 'nullOr description', 'nullOr'),
            $chain
        );
    }

    /**
     * @test
     */
    public function itShouldCreateChainWithKeyPrefix(): void
    {
        $creator = new FakeCreator();

        $sut = new RegularFullChain($creator, 'input', 'description', 'prefix');
        $chain = $sut->key('key reference', 'key description');

        self::assertEquals(
            new AssociativeFullChain($creator, 'key reference', 'input', 'key description', 'key'),
            $chain
        );
    }

    /**
     * @test
     */
    public function itShouldCreateChainWithPropertyPrefix(): void
    {
        $creator = new FakeCreator();

        $sut = new RegularFullChain($creator, 'input', 'description', 'prefix');
        $chain = $sut->property('property reference', 'property description');

        self::assertEquals(
            new AssociativeFullChain($creator, 'property reference', 'input', 'property description', 'property'),
            $chain
        );
    }
}
