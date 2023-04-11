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
use Throwable;

use function array_slice;
use function class_exists;
use function count;
use function current;
use function is_null;
use function is_string;
use function sprintf;
use function ucfirst;

final class StandardCreator implements Creator
{
    /**
     * {@inheritdoc}
     */
    public function create(string $name, array $parameters): Assertion
    {
        $reflection = $this->ruleReflection($name);
        $constructor = $reflection->getConstructor();

        $constructorParameters = array_slice(
            $parameters,
            0,
            $constructor === null ? 0 : count($constructor->getParameters())
        );

        /** @var Validatable $rule */
        $rule = $reflection->newInstanceArgs($constructorParameters);

        return new Assertion($rule, $this->description($name, $parameters, $constructorParameters));
    }

    /**
     * @return ReflectionClass<Validatable>
     */
    private function ruleReflection(string $name): ReflectionClass
    {
        $class = sprintf('Respect\\Validation\\Rules\\%s', ucfirst($name) ?: 'Equals');

        if (!class_exists($class)) {
            throw new CannotCreateAssertionException(sprintf('"%s" is not a valid assertion', $name));
        }

        $reflection = new ReflectionClass($class);
        if (!$reflection->isInstantiable()) {
            throw new CannotCreateAssertionException(sprintf('Cannot create an instance of "%s"', $class));
        }

        if (!$reflection->isSubclassOf(Validatable::class)) {
            throw new CannotCreateAssertionException(sprintf('Cannot create an instance of "%s"', $class));
        }

        return $reflection;
    }

    /**
     * @param mixed[] $parameters
     * @param mixed[] $constructorParameters
     */
    private function description(string $name, array $parameters, array $constructorParameters): null|string|Throwable
    {
        if ($constructorParameters === $parameters) {
            return null;
        }

        $description = current(array_slice($parameters, count($constructorParameters), 1)) ?? null;
        if (is_null($description) || is_string($description) || $description instanceof Throwable) {
            return $description;
        }

        throw new CannotCreateAssertionException(sprintf('"%s" assertion has an invalid error description', $name));
    }
}
