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

use Throwable;

abstract class FullChain extends SimpleChain
{
    public function all(null|string|Throwable $description = null): RegularFullChain
    {
        return new RegularFullChain($this->creator, $this->input, $description, 'all');
    }

    public function not(null|string|Throwable $description = null): RegularFullChain
    {
        return new RegularFullChain($this->creator, $this->input, $description, 'not');
    }

    public function nullOr(null|string|Throwable $description = null): RegularFullChain
    {
        return new RegularFullChain($this->creator, $this->input, $description, 'nullOr');
    }

    public function key(string $key, null|string|Throwable $description = null): AssociativeFullChain
    {
        return new AssociativeFullChain($this->creator, $key, $this->input, $description, 'key');
    }

    public function property(string $key, null|string|Throwable $description = null): AssociativeFullChain
    {
        return new AssociativeFullChain($this->creator, $key, $this->input, $description, 'property');
    }
}
