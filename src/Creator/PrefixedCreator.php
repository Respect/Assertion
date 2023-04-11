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

use ReflectionClass;
use Respect\Assertion\Assertion;
use Respect\Assertion\Creator;
use Respect\Assertion\Exception\CannotCreateAssertionException;
use Respect\Validation\Validatable;

use function lcfirst;
use function str_starts_with;
use function strlen;
use function substr;

final class PrefixedCreator implements Creator
{
    /**
     * @param class-string<Validatable> $className
     */
    public function __construct(
        private readonly string $prefix,
        private readonly string $className,
        private readonly Creator $creator
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public function create(string $name, array $parameters): Assertion
    {
        if (!str_starts_with($name, $this->prefix)) {
            throw CannotCreateAssertionException::fromAssertionName($name);
        }

        $assertion = $this->creator->create(lcfirst(substr($name, strlen($this->prefix))), $parameters);
        $reflection = new ReflectionClass($this->className);

        return new Assertion($reflection->newInstance($assertion->getRule()), $assertion->getDescription());
    }
}
