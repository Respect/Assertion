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
use Respect\Validation\Rules\Nullable;

use function lcfirst;
use function strpos;
use function substr;

final class NullOrCreator implements AssertionCreator
{
    /**
     * @var AssertionCreator
     */
    private $assertionCreator;

    public function __construct(AssertionCreator $assertionCreator)
    {
        $this->assertionCreator = $assertionCreator;
    }

    /**
     * {@inheritdoc}
     */
    public function create(string $name, array $parameters): Assertion
    {
        if (strpos($name, 'nullOr') !== 0) {
            return $this->assertionCreator->create($name, $parameters);
        }

        $assertion = $this->assertionCreator->create(lcfirst(substr($name, 6)), $parameters);

        return new Standard(new Nullable($assertion->getRule()), $assertion->getDescription());
    }
}
