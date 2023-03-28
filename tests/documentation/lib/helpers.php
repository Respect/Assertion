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

function exceptionMessage(callable $callable): void
{
    try {
        $callable();
    } catch (Throwable $exception) {
        echo $exception->getMessage() . PHP_EOL;
    }
}
