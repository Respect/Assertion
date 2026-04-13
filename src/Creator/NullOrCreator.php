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

namespace Respect\Assertion\Creator;

use Respect\Assertion\Assertion;
use Respect\Assertion\Creator;
use Respect\Assertion\Exception\CannotCreateAssertionException;
use Respect\Validation\Validators\NullOr;

use function lcfirst;
use function str_starts_with;
use function substr;

final class NullOrCreator implements Creator
{
    public function __construct(
        private readonly Creator $creator
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public function create(string $name, array $parameters): Assertion
    {
        if (!str_starts_with($name, 'nullOr')) {
            throw CannotCreateAssertionException::fromAssertionName($name);
        }

        $assertion = $this->creator->create(lcfirst(substr($name, 6)), $parameters);

        return new Assertion(new NullOr($assertion->getRule()), $assertion->getDescription());
    }
}
