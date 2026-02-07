<?php

namespace Otobank\Doctrine\Collections;

use FakeApp\Foo;
use FakeApp\FooCriteria;
use PHPUnit\Framework\TestCase;

class TargetAwareCriteriaTest extends TestCase
{
    public function testConcreteClass() : void
    {
        $this->assertSame(Foo::class, FooCriteria::getTargetClass());

        $c = new FooCriteria();

        $this->assertSame(Foo::class, $c->getTargetClass());
        $this->assertSame('ASC', $c::ASC);
        $this->assertSame('DESC', $c::DESC);
    }
}
