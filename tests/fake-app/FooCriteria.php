<?php

namespace FakeApp;

use Otobank\Doctrine\Collections\TargetAwareCriteria;

class FooCriteria extends TargetAwareCriteria
{
    public static function getTargetClass() : string
    {
        return Foo::class;
    }
}
