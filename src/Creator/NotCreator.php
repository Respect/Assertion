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
use Respect\Validation\Rules\Not;

use function in_array;
use function strpos;
use function strtolower;
use function substr;

final class NotCreator implements AssertionCreator
{
    private const IGNORED_RULES = [
        'notempty',
        'notblank',
        'notoptional',
    ];

    public function __construct(private AssertionCreator $assertionCreator)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function create(string $name, array $parameters): Assertion
    {
        if (strpos(strtolower($name), 'not') !== 0) {
            return $this->assertionCreator->create($name, $parameters);
        }

        if (in_array(strtolower($name), self::IGNORED_RULES)) {
            return $this->assertionCreator->create($name, $parameters);
        }

        $assertion = $this->assertionCreator->create(substr($name, 3), $parameters);

        return new Standard(new Not($assertion->getRule()), $assertion->getDescription());
    }
}
