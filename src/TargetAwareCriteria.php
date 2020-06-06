<?php

namespace Otobank\Doctrine\Collections;

use Doctrine\Common\Collections\Criteria;

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
        return new static();
    }
}
