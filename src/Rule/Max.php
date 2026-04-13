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
use Respect\Validation\Validators\Max as ValidateMax;

final class Max implements Validator
{
    private readonly ValidateMax $validator;

    public function __construct(Validator $rule)
    {
        $this->validator = new ValidateMax($rule);
    }

    public function evaluate(mixed $input): Result
    {
        return $this->validator->evaluate($input);
    }
}
