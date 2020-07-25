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

/**
 * Assertor using a Respect\Validation rule.
 *
 * @author Henrique Moody <henriquemoody@gmail.com>
 */
final class Standard implements Assertion
{
    /**
     * @var Validatable
     */
    private $rule;

    /**
     * @var Throwable|string|null
     */
    private $description;

    /**
     * Initializes the assertion.
     *
     * @param Throwable|string|null $description
     */
    public function __construct(Validatable $rule, $description = null)
    {
        $this->rule = $rule;
        $this->description = $description;
    }

    /**
     * {@inheritdoc}
     */
    public function getRule(): Validatable
    {
        return $this->rule;
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * {@inheritdoc}
     */
    public function assert($input): void
    {
        try {
            $this->rule->assert($input);
        } catch (ValidationException $exception) {
            if ($this->description instanceof Throwable) {
                throw $this->description;
            }

            if ($this->description !== null) {
                $exception->setTemplate($this->description);
            }

            throw $exception;
        }
    }
}
