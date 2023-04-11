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

namespace Respect\Test\Unit\Assertion\Exception;

use PHPUnit\Framework\TestCase;
use Respect\Assertion\Exception\CannotCreateAssertionException;

final class CannotCreateAssertionExceptionTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldCreateAnExceptionFromAnAssertionName(): void
    {
        $exception = CannotCreateAssertionException::fromAssertionName('foo');

        self::assertSame('Cannot create assertion for "foo"', $exception->getMessage());
    }
}
