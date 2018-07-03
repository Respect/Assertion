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

/**
 * Executes an assertion on top of another assertion against an input.
 *
 * @author Henrique Moody <henriquemoody@gmail.com>
 */
interface Assertor
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param Assertion $assertion
     * @param mixed $input
     *
     * @throws Exception
     */
    public function execute(Assertion $assertion, $input): void;
}
