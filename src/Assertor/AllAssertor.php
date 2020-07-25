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

/**
 * Assert every value in the input.
 *
 * @author Henrique Moody <henriquemoody@gmail.com>
 */
final class AllAssertor implements Assertor
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'all';
    }

    /**
     * {@inheritdoc}
     */
    public function execute(Assertion $assertion, $input): void
    {
        if (!is_iterable($input)) {
            throw new BadMethodCallException();
        }

        try {
            foreach ($input as $value) {
                $assertion->assert($value);
            }
        } catch (ValidationException $exception) {
            throw $this->getCustomizedException($input, $exception);
        }
    }

    /**
     * @param mixed $asserted
     */
    private function getCustomizedException($asserted, ValidationException $exception): ValidationException
    {
        if ($exception->hasCustomTemplate()) {
            return $exception;
        }

        $params = $exception->getParams();
        $params['name'] = $params['input'] . ' in ' . stringify($asserted);
        $exception->updateParams($params);

        return $exception;
    }
}
