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
use Respect\Assertion\Assertor;
use Respect\Assertion\Composed;

use function strlen;
use function strpos;
use function substr;

/**
 * Creates a composed assertion, which contains an specific assertor.
 *
 * @author Henrique Moody <henriquemoody@gmail.com
 */
final class ComposedCreator implements AssertionCreator
{
    /**
     * @var Assertor
     */
    private $assertor;

    /**
     * @var AssertionCreator
     */
    private $nextCreator;

    public function __construct(Assertor $assertor, AssertionCreator $nextCreator)
    {
        $this->assertor = $assertor;
        $this->nextCreator = $nextCreator;
    }

    /**
     * {@inheritdoc}
     */
    public function create(string $name, array $parameters): Assertion
    {
        $prefix = $this->assertor->getName();
        if (strpos($name, $prefix) !== 0) {
            return $this->nextCreator->create($name, $parameters);
        }

        return new Composed(
            $this->nextCreator->create(substr($name, strlen($prefix)), $parameters),
            $this->assertor
        );
    }
}
