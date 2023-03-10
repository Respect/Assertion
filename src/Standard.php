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

use Respect\Validation\Exceptions\ValidationException;
use Respect\Validation\Validatable;
use Throwable;

final class Standard implements Assertion
{
    public function __construct(private Validatable $rule, private Throwable|string|null $description = null)
    {
    }

    public function getRule(): Validatable
    {
        return $this->rule;
    }

    public function getDescription(): Throwable|string|null
    {
        return $this->description;
    }

    public function assert(mixed $input): void
    {
        try {
            $this->rule->check($input);
        } catch (ValidationException $exception) {
            if ($this->description instanceof Throwable) {
                throw $this->description;
            }

            if ($this->description !== null) {
                $exception->updateTemplate($this->description);
            }

            throw $exception;
        }
    }
}
