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

use Respect\Assertion\Exception\CannotCreateAssertionException;

interface Creator
{
    /**
     * @param mixed[] $parameters
     *
     * @throws CannotCreateAssertionException
     */
    public function create(string $name, array $parameters): Assertion;
}
