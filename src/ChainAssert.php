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

use function array_unshift;

/**
 * @mixin ChainAssertMixin
 */
final class ChainAssert
{
    public function __construct(private readonly mixed $input)
    {
    }

    /**
     * @param array<mixed> $arguments
     */
    public function __call(string $name, array $arguments): self
    {
        array_unshift($arguments, $this->input);

        Assert::__callStatic($name, $arguments);

        return $this;
    }
}
