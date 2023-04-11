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

use Countable as PhpCountable;
use Respect\Validation\Exceptions\ValidationException;
use Respect\Validation\Rules\AnyOf;
use Respect\Validation\Rules\Countable;
use Respect\Validation\Rules\StringType;
use Respect\Validation\Validatable;

use function count;
use function is_array;
use function mb_strlen;

final class Length extends Rule
{
    public function __construct(Validatable $rule)
    {
        parent::__construct(
            new Envelope(
                new AnyOf(new StringType(), new Countable()),
                '{{input}} must be a string or a countable object'
            ),
            $rule
        );
    }

    /**
     * @param array<int, mixed>|PhpCountable|string $input
     */
    protected function getFilteredInput(mixed $input): int
    {
        if (is_array($input)) {
            return count($input);
        }

        if ($input instanceof PhpCountable) {
            return $input->count();
        }

        return mb_strlen($input);
    }

    protected function getCustomizedException(ValidationException $exception): ValidationException
    {
        $params = $exception->getParams();
        $params['name'] = $params['input'] . ' (the length of the input)';
        $exception->updateParams($params);

        return $exception;
    }
}
