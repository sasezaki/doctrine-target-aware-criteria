<?php

namespace Otobank\Doctrine\Collections;

interface AssociationAwareCriteriaInterface
{
    /**
     * Return the association map `[alias => field]` used for criteria.
     *
     * @return array<non-empty-string, non-empty-string>
     */
    public static function getAssociationMap() : array;
}
