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
use function max;
use function str_replace;

final class MaxAssertor implements Assertor
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'max';
    }

    /**
     * {@inheritdoc}
     */
    public function execute(Assertion $assertion, $input): void
    {
        if (!is_iterable($input)) {
            throw new BadMethodCallException('Assertion with "max" prefix must be iterable');
        }

        try {
            $assertion->assert($this->getMax($input));
        } catch (ValidationException $exception) {
            throw $this->getCustomizedException($input, $exception);
        }
    }

    private function getMax(iterable $input)
    {
        if (is_array($input)) {
            return max($input);
        }

        return $this->getMax(iterator_to_array($input));
    }

    private function getCustomizedException($asserted, ValidationException $exception): ValidationException
    {
        $exception->setParam('asserted', $asserted);
        if ($exception->hasCustomTemplate()) {
            return $exception;
        }

        $exception->setTemplate(
            str_replace(
                '{{name}}', '{{name}}, the maximum of {{asserted}},',
                $exception->getTemplate()
            )
        );

        return $exception;
    }
}
