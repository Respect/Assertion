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

namespace Respect\Test\Unit\Assertion\Double;

use Respect\Validation\Rules\AbstractRule;

final class FakeRule extends AbstractRule
{
    /**
     * @var array<int, mixed>
     */
    private array $calledInputs = [];

    /**
     * {@inheritDoc}
     */
    public function validate($input): bool
    {
        return true;
    }

    /**
     * {@inheritDoc}
     */
    public function check($input): void
    {
        $this->calledInputs[] = $input;
    }

    /**
     * @return array<int, mixed>
     */
    public function getCalledInputs(): array
    {
        return $this->calledInputs;
    }
}
