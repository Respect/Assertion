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

namespace Respect\Assertion\Rule;

use Respect\Validation\Result;
use Respect\Validation\Validator;

abstract class Rule implements Validator
{
    abstract protected function getFilteredInput(mixed $input): mixed;

    public function __construct(
        private readonly Validator $preconditionRule,
        private readonly Validator $rule,
    ) {
    }

    public function evaluate(mixed $input): Result
    {
        $preconditionResult = $this->preconditionRule->evaluate($input);

        if (!$preconditionResult->hasPassed) {
            return $preconditionResult;
        }

        return $this->rule->evaluate($this->getFilteredInput($input));
    }
}
