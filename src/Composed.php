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

namespace Respect\Assertion;

use Respect\Validation\Validatable;

final class Composed implements Assertion
{
    /**
     * @var Assertion
     */
    private $assertion;

    /**
     * @var Assertor
     */
    private $assertor;

    /**
     * Initializes assertion.
     *
     * @param Assertion $assertion
     * @param Assertor $assertor
     */
    public function __construct(Assertion $assertion, Assertor $assertor)
    {
        $this->assertion = $assertion;
        $this->assertor = $assertor;
    }

    /**
     * {@inheritdoc}
     */
    public function getRule(): Validatable
    {
        return $this->assertion->getRule();
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        return $this->assertion->getDescription();
    }

    /**
     * {@inheritdoc}
     */
    public function assert($input): void
    {
        $this->assertor->execute($this->assertion, $input);
    }
}
