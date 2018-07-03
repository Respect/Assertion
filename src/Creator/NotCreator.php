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

final class NotCreator implements AssertionCreator
{
    private const BLACKLIST = [
        'notempty',
        'notblank',
        'notoptional',
    ];

    /**
     * @var AssertionCreator
     */
    private $assertionCreator;

    /**
     * Initializes the assertion creator.
     *
     * @param AssertionCreator $assertionCreator
     */
    public function __construct(AssertionCreator $assertionCreator)
    {
        $this->assertionCreator = $assertionCreator;
    }

    /**
     * {@inheritdoc}
     */
    public function create(string $name, array $parameters): Assertion
    {
        if (0 !== strpos(strtolower($name), 'not')) {
            return $this->assertionCreator->create($name, $parameters);
        }

        if (in_array(strtolower($name), self::BLACKLIST)) {
            return $this->assertionCreator->create($name, $parameters);
        }

        $assertion = $this->assertionCreator->create(substr($name, 3), $parameters);

        return new Standard(new Not($assertion->getRule()), $assertion->getDescription());
    }
}
