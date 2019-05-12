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

use Exception;
use Respect\Validation\Validatable;

interface Assertion
{
    public function getRule(): Validatable;

    /**
     * @return Exception|string|null
     */
    public function getDescription();

    /**
     * Execute the assertion
     *
     * @param mixed $input
     *
     * @throws Exception
     */
    public function assert($input): void;
}
