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

namespace Respect\Test\Integration\Assertion;

use DomainException;
use Exception;
use PHPUnit\Framework\TestCase;
use Respect\Assertion\Assert;
use Respect\Validation\Exceptions\ValidationException;
use function array_merge;

/**
 * @author Henrique Moody <henriquemoody@gmail.com>
 */
final class AssertTest extends TestCase
{
    public function validProvider(): array
    {
        return [
            ['equals', [42, 42]],
            ['intVal', [42]],
            ['even', [42]],
            ['not', [42, 43]],
            ['notOdd', [42]],
            ['notFloatType', [42]],
        ];
    }

    /**
     * @test
     *
     * @dataProvider validProvider
     *
     * @doesNotPerformAssertions
     *
     * @param string $name
     * @param array $parameters
     *
     * @throws Exception
     */
    public function itShouldNotThrowExceptionWhenValid(string $name, array $parameters): void
    {
        Assert::__callStatic($name, $parameters);
    }

    public function invalidProvider(): array
    {
        return [
            ['equals', [42, 43]],
            ['intVal', [42.9]],
            ['even', [43]],
            ['not', [42, 42]],
            ['notEven', [42]],
            ['notIntVal', [42]],
        ];
    }

    /**
     * @test
     *
     * @dataProvider invalidProvider
     *
     * @param string $name
     * @param array $parameters
     *
     * @throws Exception
     */
    public function itShouldThrowExceptionWhenInvalid(string $name, array $parameters): void
    {
        $this->expectException(ValidationException::class);

        Assert::__callStatic($name, $parameters);
    }

    /**
     * @test
     *
     * @dataProvider invalidProvider
     *
     * @param string $name
     * @param array $parameters
     *
     * @throws Exception
     */
    public function itShouldThrowCustomExceptionWhenInvalid(string $name, array $parameters): void
    {
        $description = new DomainException();

        $this->expectExceptionObject($description);

        Assert::__callStatic($name, array_merge($parameters, [$description]));
    }

    /**
     * @test
     *
     * @dataProvider invalidProvider
     *
     * @param string $name
     * @param array $parameters
     *
     * @throws Exception
     */
    public function itShouldThrowCustomExceptionMessageWhenInvalid(string $name, array $parameters): void
    {
        $description = 'This should be something specific';

        $this->expectExceptionMessage($description);

        Assert::__callStatic($name, array_merge($parameters, [$description]));
    }
}
