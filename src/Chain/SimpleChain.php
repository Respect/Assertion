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

namespace Respect\Assertion\Chain;

use Respect\Assertion\Assertion;
use Respect\Assertion\Creator;
use Respect\Assertion\Mixin\Chain\Mixin;
use Throwable;

use function array_unshift;
use function ucfirst;

/**
 * @mixin Mixin
 */
abstract class SimpleChain
{
    public function __construct(
        protected readonly Creator $creator,
        protected readonly mixed $input,
        private readonly null|string|Throwable $description,
        private readonly string $prefix = '',
        private readonly null|int|string $reference = null
    ) {
    }

    /**
     * @param array<int, mixed> $parameters
     */
    private function create(string $name, array $parameters): Assertion
    {
        if ($this->reference !== null) {
            array_unshift($parameters, $this->reference);
        }

        if ($this->description !== null) {
            $parameters[] = $this->description;
        }

        if ($this->prefix !== '') {
            $name = $this->prefix . ucfirst($name);
        }

        return $this->creator->create($name, $parameters);
    }

    /**
     * @param array<int, mixed> $arguments
     */
    public function __call(string $name, array $arguments): self
    {
        $assertion = $this->create($name, $arguments);
        $assertion->assert($this->input);

        return $this;
    }
}
