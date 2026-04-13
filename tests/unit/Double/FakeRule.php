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

use Respect\Validation\Result;
use Respect\Validation\Validator;

final class FakeRule implements Validator
{
    /**
     * @var array<int, mixed>
     */
    private array $calledInputs = [];

    public function evaluate(mixed $input): Result
    {
        $this->calledInputs[] = $input;

        return Result::of(true, $input, $this);
    }

    /**
     * @return array<int, mixed>
     */
    public function getCalledInputs(): array
    {
        return $this->calledInputs;
    }
}
