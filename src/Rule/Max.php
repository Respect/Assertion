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
use Respect\Validation\Rules\AllOf;
use Respect\Validation\Rules\AnyOf;
use Respect\Validation\Rules\ArrayType;
use Respect\Validation\Rules\Call;
use Respect\Validation\Rules\GreaterThan;
use Respect\Validation\Rules\IterableType;
use Respect\Validation\Validatable;

use function is_array;
use function iterator_to_array;
use function max;
use function Respect\Stringifier\stringify;

final class Max extends Rule
{
    public function __construct(Validatable $rule)
    {
        parent::__construct(
            new Envelope(
                new AllOf(
                    new AnyOf(new ArrayType(), new IterableType()),
                    new Call('count', new GreaterThan(0)),
                ),
                '{{input}} must be an non-empty array or iterable',
            ),
            $rule,
        );
    }

    /**
     * @param array<int, mixed>|iterable<int, mixed> $input
     */
    protected function getFilteredInput(mixed $input): mixed
    {
        if (is_array($input)) {
            return max($input);
        }

        return $this->getFilteredInput(iterator_to_array($input));
    }

    protected function getCustomizedException(ValidationException $exception): ValidationException
    {
        $params = $exception->getParams();
        $params['name'] = stringify($params['input']) . ' (the maximum of the input)';
        $exception->updateParams($params);

        return $exception;
    }
}
