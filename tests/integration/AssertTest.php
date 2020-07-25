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
    /**
     * @return mixed[][]
     */
    public function validProvider(): array
    {
        return [
            ['equals', [42, 42]],
            ['intVal', [42]],
            ['even', [42]],
            ['not', [42, 43]],
            ['notOdd', [42]],
            ['notFloatType', [42]],
            ['all', [[1, 1, 1], 1]],
            ['allOdd', [[3, 5, 7]]],
            ['length', ['something', 9]],
            ['lengthBetween', ['something', 1, 9]],
            ['lengthNot', ['something', 2]],
            ['max', [[1, 2, 3], 3]],
            ['maxPositive', [[1, 2, 3]]],
            ['maxNot', [[1, 2, 3], 1]],
            ['min', [[1, 2, 3], 1]],
            ['minPositive', [[1, 2, 3]]],
            ['minNot', [[1, 2, 3], 3]],
        ];
    }

    /**
     * @test
     *
     * @dataProvider validProvider
     *
     * @doesNotPerformAssertions
     *
     * @param mixed[] $parameters
     *
     * @throws Exception
     */
    public function itShouldNotThrowExceptionWhenValid(string $name, array $parameters): void
    {
        Assert::__callStatic($name, $parameters);
    }

    /**
     * @return mixed[][]
     */
    public function invalidProvider(): array
    {
        return [
            ['equals', [42, 43]],
            ['intVal', [42.9]],
            ['even', [43]],
            ['not', [42, 42]],
            ['notEven', [42]],
            ['notIntVal', [42]],
            ['all', [[1, 2, 3], 1]],
            ['allEven', [[2, 4, 5]]],
            ['length', ['something', 2]],
            ['lengthNotPositive', ['something']],
            ['max', [[1, 2, 3], 2]],
            ['maxPositive', [[-1, -2, -3]]],
            ['maxNotPositive', [[1, 2, 3]]],
            ['min', [[1, 2, 3], 3]],
            ['minPositive', [[-1, -2, -3]]],
            ['minNot', [[1, 2, 3], 1]],
        ];
    }

    /**
     * @test
     *
     * @dataProvider invalidProvider
     *
     * @param mixed[] $parameters
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
     * @param mixed[] $parameters
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
     * @param mixed[] $parameters
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
