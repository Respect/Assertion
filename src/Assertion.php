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

use Respect\Validation\Validator;
use Respect\Validation\ValidatorBuilder;
use Throwable;

final class Assertion
{
    public function __construct(
        private readonly Validator $rule,
        private readonly null|string|Throwable $description = null
    ) {
    }

    public function getRule(): Validator
    {
        return $this->rule;
    }

    public function getDescription(): null|string|Throwable
    {
        return $this->description;
    }

    public function assert(mixed $input): void
    {
        if ($this->description instanceof Throwable) {
            $result = $this->rule->evaluate($input);
            if (!$result->hasPassed) {
                throw $this->description;
            }

            return;
        }

        ValidatorBuilder::init($this->rule)->assert($input, $this->description);
    }
}
