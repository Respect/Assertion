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

use function is_array;
use function is_iterable;
use function iterator_to_array;
use function min;
use function str_replace;

final class MinAssertor implements Assertor
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'min';
    }

    /**
     * {@inheritdoc}
     */
    public function execute(Assertion $assertion, $input): void
    {
        if (!is_iterable($input)) {
            throw new BadMethodCallException('Assertion with "min" prefix must be iterable');
        }

        try {
            $assertion->assert($this->getMin($input));
        } catch (ValidationException $exception) {
            throw $this->getCustomizedException($input, $exception);
        }
    }

    /**
     * @param mixed[] $input
     *
     * @return mixed
     */
    private function getMin(iterable $input)
    {
        if (is_array($input)) {
            return min($input);
        }

        return $this->getMin(iterator_to_array($input));
    }

    /**
     * @param mixed[] $asserted
     */
    private function getCustomizedException(iterable $asserted, ValidationException $exception): ValidationException
    {
        $exception->setParam('asserted', $asserted);
        if ($exception->hasCustomTemplate()) {
            return $exception;
        }

        $exception->setTemplate(
            str_replace(
                '{{name}}',
                '{{name}}, the minimum of {{asserted}},',
                $exception->getTemplate()
            )
        );

        return $exception;
    }
}
