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
            ['notEquals', [42, 43]],
            ['notOdd', [42]],
            ['notFloatType', [42]],
            ['allEquals', [[1, 1, 1], 1]],
            ['allOdd', [[3, 5, 7]]],
            ['lengthEquals', ['something', 9]],
            ['lengthBetween', ['something', 1, 9]],
            ['lengthNotEquals', ['something', 2]],
            ['maxEquals', [[1, 2, 3], 3]],
            ['maxPositive', [[1, 2, 3]]],
            ['maxNotEquals', [[1, 2, 3], 1]],
            ['minEquals', [[1, 2, 3], 1]],
            ['minPositive', [[1, 2, 3]]],
            ['minNotEquals', [[1, 2, 3], 3]],
            ['keyEquals', [['foo' => 1], 'foo', 1]],
            ['keyPresent', [['foo' => 1], 'foo']],
            ['keyNotPresent', [['foo' => 1], 'baz']],
            ['nullOrEquals', [1, 1]],
            ['nullOrEquals', [null, 1]],
            ['nullOrNotEquals', [1, 2]],
            ['nullOrNotEquals', [null, 2]],
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
            ['notEquals', [42, 42]],
            ['notEven', [42]],
            ['notIntVal', [42]],
            ['allEquals', [[1, 2, 3], 1]],
            ['allEven', [[2, 4, 5]]],
            ['lengthEquals', ['something', 2]],
            ['lengthNotPositive', ['something']],
            ['maxEquals', [[1, 2, 3], 2]],
            ['maxPositive', [[-1, -2, -3]]],
            ['maxNotPositive', [[1, 2, 3]]],
            ['minEquals', [[1, 2, 3], 3]],
            ['minPositive', [[-1, -2, -3]]],
            ['minNotEquals', [[1, 2, 3], 1]],
            ['keyEquals', [['foo' => 1], 'foo', 2]],
            ['keyPresent', [['foo' => 1], 'baz']],
            ['keyNotPresent', [['foo' => 1], 'foo']],
            ['propertyEquals', [(object) ['foo' => 1], 'foo', 2]],
            ['propertyPresent', [(object) ['foo' => 1], 'baz']],
            ['propertyNotPresent', [(object) ['foo' => 1], 'foo']],
            ['nullOrEquals', [1, 2]],
            ['nullOrNotEquals', [2, 2]],
            ['nullOrPositive', [-1]],
            ['nullOrNotPositive', [1]],
        ];
    }
}
