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
use ReflectionException;
use Respect\Assertion\Assertion;
use Respect\Assertion\AssertionCreator;
use Respect\Assertion\Exception\CannotCreateAssertionException;
use Respect\Assertion\Standard;
use Respect\Validation\Validatable;
use Throwable;

use function array_pop;
use function array_slice;
use function class_exists;
use function count;
use function sprintf;
use function ucfirst;

final class StandardCreator implements AssertionCreator
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

        return new Standard(
            $rule,
            $this->description($parameters, $constructorParameters)
        );
    }

    private function ruleReflection(string $name): ReflectionClass
    {
        $class = sprintf('Respect\\Validation\\Rules\\%s', ucfirst($name) ?: 'Equals');

        if (!class_exists($class)) {
            throw new CannotCreateAssertionException(sprintf('"%s" is not a valid assertion', $name));
        }

        try {
            $reflection = new ReflectionClass($class);
            if (!$reflection->isInstantiable()) {
                throw new CannotCreateAssertionException(sprintf('Cannot create an instance of "%s"', $class));
            }
        } catch (ReflectionException $exception) {
            throw new CannotCreateAssertionException(sprintf('"%s" is not a valid assertion', $name), 0, $exception);
        }

        return $reflection;
    }

    /**
     * @param mixed[] $parameters
     * @param mixed[] $constructorParameters
     */
    private function description(array $parameters, array $constructorParameters): string|Throwable|null
    {
        if ($constructorParameters === $parameters) {
            return null;
        }

        return array_pop($parameters);
    }
}
