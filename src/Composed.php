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

namespace Respect\Assertion;

use Respect\Validation\Validatable;
use Throwable;

final class Composed implements Assertion
{
    public function __construct(
        private readonly Assertion $assertion,
        private readonly Assertor $assertor
    ) {
    }

    public function getRule(): Validatable
    {
        return $this->assertion->getRule();
    }

    public function getDescription(): Throwable|string|null
    {
        return $this->assertion->getDescription();
    }

    public function assert(mixed $input): void
    {
        $this->assertor->execute($this->assertion, $input);
    }
}
