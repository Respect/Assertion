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

namespace Respect\Test\Unit\Assertion\Double;

use Exception;
use Respect\Assertion\Assertion;
use Respect\Assertion\Creator;
use Respect\Validation\Rules\AlwaysValid;
use Respect\Validation\Validatable;
use Throwable;

final class FakeCreator implements Creator
{
    private Assertion $lastCreatedAssertion;

    private Validatable $lastCreatedRule;

    private Throwable $lastCreatedDescription;

    private string $lastCalledName;

    /**
     * @var array<mixed>
     */
    private array $lastCalledParameters;

    /**
     * @param mixed[] $parameters
     */
    public function create(string $name, array $parameters): Assertion
    {
        $this->lastCreatedRule = new AlwaysValid();
        $this->lastCreatedDescription = new Exception('Something went wrong');
        $this->lastCreatedAssertion = new Assertion($this->lastCreatedRule, $this->lastCreatedDescription);
        $this->lastCalledName = $name;
        $this->lastCalledParameters = $parameters;

        return $this->lastCreatedAssertion;
    }

    public function getLastCreatedAssertion(): Assertion
    {
        return $this->lastCreatedAssertion;
    }

    public function getLastCreatedRule(): Validatable
    {
        return $this->lastCreatedRule;
    }

    public function getLastCreatedDescription(): Throwable
    {
        return $this->lastCreatedDescription;
    }

    public function getLastCalledName(): string
    {
        return $this->lastCalledName;
    }

    /**
     * @return mixed[]
     */
    public function getLastCalledParameters(): array
    {
        return $this->lastCalledParameters;
    }
}
