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

use Respect\Assertion\Mixin\Dynamic\Mixin;
use Throwable;

use function array_unshift;

/**
 * @mixin Mixin
 */
final class ChainAssert
{
    public function __construct(
        private readonly mixed $input,
        private readonly null|string|Throwable $description = null
    ) {
    }

    /**
     * @param array<int, mixed> $arguments
     */
    public function __call(string $name, array $arguments): self
    {
        array_unshift($arguments, $this->input);
        if ($this->description !== null) {
            $arguments[] = $this->description;
        }

        Assert::__callStatic($name, $arguments);

        return $this;
    }
}
