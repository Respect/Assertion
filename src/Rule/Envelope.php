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
use Respect\Validation\Rules\AbstractEnvelope;
use Respect\Validation\Validatable;

final class Envelope extends AbstractEnvelope
{
    public function __construct(Validatable $validatable, string $template)
    {
        parent::__construct($validatable, []);
        $this->template = $template;
    }

    /**
     * {@inheritDoc}
     */
    public function reportError($input, array $extraParameters = []): ValidationException
    {
        $exception = parent::reportError($input, $extraParameters);
        $exception->updateTemplate((string) $this->template);

        return $exception;
    }
}
