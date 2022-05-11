<?php

namespace Otobank\Doctrine\Collections;

/**
 * @template T
 */
interface TargetAwareCriteriaInterface
{
    /**
     * Return the class name to apply criteria.
     *
     * @return class-string<T>
     */
    public static function getTargetClass() : string;
}
