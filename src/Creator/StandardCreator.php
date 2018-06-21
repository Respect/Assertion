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
use function array_pop;
use function array_slice;
use function count;
use function sprintf;
use function ucfirst;

/**
 * Default factory of assertors.
 *
 * @author Henrique Moody <henriquemoody@gmail.com>
 */
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
            null === $constructor ? 0 : count($constructor->getParameters())
        );

        return new Standard(
            $reflection->newInstanceArgs($constructorParameters),
            $this->description($parameters, $constructorParameters)
        );
    }

    private function ruleReflection($name): ReflectionClass
    {
        $class = sprintf('Respect\\Validation\\Rules\\%s', ucfirst($name) ?: 'Equals');
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

    private function description(array $parameters, array $constructorParameters)
    {
        if ($constructorParameters === $parameters) {
            return null;
        }

        return array_pop($parameters);
    }
}
