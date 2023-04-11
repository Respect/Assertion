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

use Respect\Validation\Exceptions\ValidationException;
use Respect\Validation\Rules\AbstractRule;
use Respect\Validation\Validatable;

abstract class Rule extends AbstractRule
{
    abstract protected function getFilteredInput(mixed $input): mixed;

    abstract protected function getCustomizedException(ValidationException $exception): ValidationException;

    public function __construct(
        private readonly Validatable $preconditionRule,
        private readonly Validatable $rule,
    ) {
    }

    /**
     * {@inheritDoc}
     */
    public function validate($input): bool
    {
        return $this->preconditionRule->validate($input) && $this->rule->validate($this->getFilteredInput($input));
    }

    /**
     * {@inheritDoc}
     */
    public function check($input): void
    {
        $this->preconditionRule->assert($input);

        try {
            $this->rule->check($this->getFilteredInput($input));
        } catch (ValidationException $exception) {
            throw $this->getCustomizedException($exception);
        }
    }
}
