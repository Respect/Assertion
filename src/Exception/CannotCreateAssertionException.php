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

namespace Respect\Assertion\Exception;

use RuntimeException;

use function sprintf;

final class CannotCreateAssertionException extends RuntimeException implements Exception
{
    public static function fromAssertionName(string $name): self
    {
        return new self(sprintf('Cannot create assertion for "%s"', $name));
    }
}
