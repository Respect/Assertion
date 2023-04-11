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
use Respect\Validation\Rules\Each;
use Respect\Validation\Rules\IterableType;
use Respect\Validation\Validatable;

use function Respect\Stringifier\stringify;

final class All extends Rule
{
    public function __construct(Validatable $rule)
    {
        parent::__construct(
            new IterableType(),
            new Each($rule),
        );
    }

    protected function getFilteredInput(mixed $input): mixed
    {
        return $input;
    }

    protected function getCustomizedException(ValidationException $exception): ValidationException
    {
        $params = $exception->getParams();
        $params['name'] = stringify($params['input']) . ' (like all items of the input)';
        $exception->updateParams($params);

        return $exception;
    }
}
