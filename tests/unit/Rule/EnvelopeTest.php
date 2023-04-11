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

namespace Respect\Test\Unit\Assertion\Rule;

use PHPUnit\Framework\TestCase;
use Respect\Assertion\Rule\Envelope;
use Respect\Validation\Exceptions\ValidationException;
use Respect\Validation\Rules\AlwaysInvalid;

use function Respect\Stringifier\stringify;

/**
 * @covers \Respect\Assertion\Rule\Envelope
 */
final class EnvelopeTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldCustomizeExceptionTemplate(): void
    {
        $input = 'something';

        $this->expectException(ValidationException::class);
        $this->expectExceptionMessage(stringify($input) . ' should be awesome');

        $sut = new Envelope(new AlwaysInvalid(), '{{input}} should be awesome');
        $sut->check($input);
    }
}
