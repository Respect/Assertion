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
use Respect\Assertion\AssertionCreator;
use Respect\Assertion\Standard;
use Respect\Validation\Rules\Key;
use Respect\Validation\Rules\Not;

use function array_shift;
use function lcfirst;
use function str_starts_with;
use function substr;

final class KeyCreator implements AssertionCreator
{
    public function __construct(
        private readonly AssertionCreator $assertionCreator
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public function create(string $name, array $parameters): Assertion
    {
        if (!str_starts_with($name, 'key')) {
            return $this->assertionCreator->create($name, $parameters);
        }

        $key = array_shift($parameters);
        if ($name === 'keyPresent') {
            return new Standard(new Key($key), array_shift($parameters) ?? null);
        }

        if ($name === 'keyNotPresent') {
            return new Standard(new Not(new Key($key)), array_shift($parameters) ?? null);
        }

        $assertion = $this->assertionCreator->create(lcfirst(substr($name, 3)), $parameters);

        return new Standard(new Key($key, $assertion->getRule()), $assertion->getDescription());
    }
}
