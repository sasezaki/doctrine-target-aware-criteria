<?php

namespace Otobank\Doctrine\Collections;

interface TargetAwareCriteriaInterface
{
    /**
     * Return the class name to apply criteria.
     */
    public static function getTargetClass() : string;
}
