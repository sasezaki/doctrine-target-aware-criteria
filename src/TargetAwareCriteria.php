<?php

namespace Otobank\Doctrine\Collections;

use Doctrine\Common\Collections\Criteria;

/**
 * @template T
 * @template-implements TargetAwareCriteriaInterface<T>
 */
abstract class TargetAwareCriteria extends Criteria implements TargetAwareCriteriaInterface
{
    /**
     * Creates an instance of the class.
     *
     * (Redefine the type hints to make them correct)
     *
     * @return static
     */
    public static function create() : self
    {
        /* @phpstan-ignore-next-line shut up "usage of new static" */
        return new static();
    }
}
