<?php

namespace FakeApp;

use Otobank\Doctrine\Collections\AssociationAwareCriteria;

/**
 * @template-extends AssociationAwareCriteria<Bar>
 */
class BarCriteria extends AssociationAwareCriteria
{
    public static function getTargetClass() : string
    {
        return Bar::class;
    }

    public static function getAssociationMap() : array
    {
        return [
            'b' => 'baz',
        ];
    }
}
