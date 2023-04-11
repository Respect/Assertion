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
use Respect\Validation\Rules\Attribute;
use Respect\Validation\Rules\Not;
use Throwable;

use function array_shift;
use function is_null;
use function is_string;
use function lcfirst;
use function Respect\Stringifier\stringify;
use function sprintf;
use function str_starts_with;
use function substr;

final class PropertyCreator implements Creator
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
        if (!str_starts_with($name, 'property')) {
            throw CannotCreateAssertionException::fromAssertionName($name);
        }

        $property = array_shift($parameters);
        if (!is_string($property)) {
            throw new CannotCreateAssertionException(sprintf('%s is an invalid property name', stringify($property)));
        }

        if ($name === 'propertyPresent') {
            return new Assertion(new Attribute($property), $this->getDescription($name, $parameters));
        }

        if ($name === 'propertyNotPresent') {
            return new Assertion(new Not(new Attribute($property)), $this->getDescription($name, $parameters));
        }

        $assertion = $this->creator->create(lcfirst(substr($name, 8)), $parameters);

        return new Assertion(new Attribute($property, $assertion->getRule()), $assertion->getDescription());
    }

    /**
     * @param mixed[] $parameters
     */
    private function getDescription(string $name, array $parameters): null|string|Throwable
    {
        $description = array_shift($parameters) ?? null;
        if (is_null($description) || is_string($description) || $description instanceof Throwable) {
            return $description;
        }

        throw new CannotCreateAssertionException(sprintf('"%s" assertion has an invalid error description', $name));
    }
}
