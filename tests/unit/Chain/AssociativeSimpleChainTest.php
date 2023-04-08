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
use Respect\Assertion\Chain\AssociativeSimpleChain;
use Respect\Test\Unit\Assertion\Double\FakeCreator;

use function ucfirst;

/**
 * @covers \Respect\Assertion\Chain\AssociativeSimpleChain
 * @covers \Respect\Assertion\Chain\SimpleChain
 */
final class AssociativeSimpleChainTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldCreateChainWithPrefix(): void
    {
        $prefix = 'prefix';

        $reference = 'reference';

        $name = 'anything';
        $input = 'something';
        $description = new InvalidArgumentException();

        $creator = new FakeCreator();
        $sut = new AssociativeSimpleChain($creator, $reference, $input, $description, $prefix);
        $sut->__call($name, []);

        self::assertSame($prefix . ucfirst($name), $creator->getLastCalledName());
        self::assertSame($input, $creator->getLastCreatedRule()->getCalledInputs()[0]);
        self::assertSame([$reference, $description], $creator->getLastCalledParameters());
    }
}
