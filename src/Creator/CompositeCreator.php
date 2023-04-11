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
use Respect\Assertion\Rule\All;
use Respect\Assertion\Rule\Length;
use Respect\Assertion\Rule\Max;
use Respect\Assertion\Rule\Min;

final class CompositeCreator implements Creator
{
    /**
     * @var Creator[] $creators
     */
    private array $creators;

    public function __construct(Creator ...$creators)
    {
        $this->creators = $creators;
    }

    public static function createDefault(): self
    {
        $creator = new self();
        $creator->creators = [
            new PrefixedCreator('all', All::class, $creator),
            new PrefixedCreator('length', Length::class, $creator),
            new PrefixedCreator('max', Max::class, $creator),
            new PrefixedCreator('min', Min::class, $creator),
            new PropertyCreator($creator),
            new KeyCreator($creator),
            new NotCreator($creator),
            new NullOrCreator($creator),
            new StandardCreator(),
        ];

        return $creator;
    }

    /**
     * {@inheritDoc}
     */
    public function create(string $name, array $parameters): Assertion
    {
        foreach ($this->creators as $creator) {
            try {
                return $creator->create($name, $parameters);
            } catch (CannotCreateAssertionException) {
                continue;
            }
        }

        throw CannotCreateAssertionException::fromAssertionName($name);
    }
}
