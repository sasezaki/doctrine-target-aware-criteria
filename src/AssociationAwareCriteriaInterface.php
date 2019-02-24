<?php

namespace Otobank\Doctrine\Collections;

interface AssociationAwareCriteriaInterface
{
    /**
     * Return the association map `[alias => field]` used for criteria.
     */
    public static function getAssociationMap() : array;
}
