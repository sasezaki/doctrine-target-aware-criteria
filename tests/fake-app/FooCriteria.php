<?php

namespace FakeApp;

use Otobank\Doctrine\Collections\TargetAwareCriteria;

/**
 * @template-extends TargetAwareCriteria<Foo>
 */
class FooCriteria extends TargetAwareCriteria
{
    public static function getTargetClass() : string
    {
        return Foo::class;
    }
}
