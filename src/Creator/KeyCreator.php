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

use function array_pop;
use function array_shift;
use function lcfirst;
use function strpos;
use function substr;

final class KeyCreator implements AssertionCreator
{
    public function __construct(private AssertionCreator $assertionCreator)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function create(string $name, array $parameters): Assertion
    {
        if (strpos($name, 'key') !== 0) {
            return $this->assertionCreator->create($name, $parameters);
        }

        $key = array_shift($parameters);
        if ($name === 'keyPresent') {
            return new Standard(new Key($key), array_pop($parameters) ?? null);
        }

        if ($name === 'keyNotPresent') {
            return new Standard(new Not(new Key($key)), array_pop($parameters) ?? null);
        }

        $assertion = $this->assertionCreator->create(lcfirst(substr($name, 3)), $parameters);

        return new Standard(new Key($key, $assertion->getRule()), $assertion->getDescription());
    }
}
