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

final class AssertTest extends TestCase
{
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

    /**
     * @return mixed[][]
     */
    public static function validProvider(): array
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
            ['key', [['foo' => 1], 'foo', 1]],
            ['keyPresent', [['foo' => 1], 'foo']],
            ['keyNotPresent', [['foo' => 1], 'baz']],
            ['nullOr', [1, 1]],
            ['nullOr', [null, 1]],
            ['nullOrNot', [1, 2]],
            ['nullOrNot', [null, 2]],
            ['nullOrPositive', [1]],
            ['nullOrPositive', [null]],
            ['nullOrNotPositive', [-1]],
            ['nullOrNotPositive', [null]],
        ];
    }

    /**
     * @return mixed[][]
     */
    public static function invalidProvider(): array
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
            ['key', [['foo' => 1], 'foo', 2]],
            ['keyPresent', [['foo' => 1], 'baz']],
            ['keyNotPresent', [['foo' => 1], 'foo']],
            ['property', [(object) ['foo' => 1], 'foo', 2]],
            ['propertyPresent', [(object) ['foo' => 1], 'baz']],
            ['propertyNotPresent', [(object) ['foo' => 1], 'foo']],
            ['nullOr', [1, 2]],
            ['nullOrNot', [2, 2]],
            ['nullOrPositive', [-1]],
            ['nullOrNotPositive', [1]],
        ];
    }
}
