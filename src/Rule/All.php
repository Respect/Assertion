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
use Respect\Validation\Validators\All as ValidateAll;

final class All implements Validator
{
    private readonly ValidateAll $validator;

    public function __construct(Validator $rule)
    {
        $this->validator = new ValidateAll($rule);
    }

    public function evaluate(mixed $input): Result
    {
        return $this->validator->evaluate($input);
    }
}
