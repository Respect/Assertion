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

namespace Respect\Assertion\Assertor;

use BadMethodCallException;
use Respect\Assertion\Assertion;
use Respect\Assertion\Assertor;
use Respect\Validation\Exceptions\ValidationException;

use function is_iterable;
use function Respect\Stringifier\stringify;

final class AllAssertor implements Assertor
{
    public function getName(): string
    {
        return 'all';
    }

    public function execute(Assertion $assertion, mixed $input): void
    {
        if (!is_iterable($input)) {
            throw new BadMethodCallException();
        }

        try {
            foreach ($input as $value) {
                $assertion->assert($value);
            }
        } catch (ValidationException $exception) {
            throw $this->getCustomizedException($exception);
        }
    }

    private function getCustomizedException(ValidationException $exception): ValidationException
    {
        if ($exception->hasCustomTemplate()) {
            return $exception;
        }

        $params = $exception->getParams();
        $params['name'] = stringify($params['input']) . ' (like all items of the input)';
        $exception->updateParams($params);

        return $exception;
    }
}
