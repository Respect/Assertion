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

namespace Respect\Assertion\Chain;

use Respect\Assertion\Creator;
use Respect\Assertion\Mixin\Chain\Mixin;
use Throwable;

/**
 * @mixin Mixin
 */
final class AssociativeSimpleChain extends SimpleChain
{
    public function __construct(
        Creator $creator,
        int|string $reference,
        mixed $input,
        null|string|Throwable $description,
        string $prefix
    ) {
        parent::__construct($creator, $input, $description, $prefix, $reference);
    }
}
