<?php

namespace Otobank\Doctrine\Collections;

use FakeApp\Bar;
use FakeApp\BarCriteria;
use PHPUnit\Framework\TestCase;

class AssociationAwareCriteriaTest extends TestCase
{
    public function testConcreteClass() : void
    {
        $this->assertSame(Bar::class, BarCriteria::getTargetClass());
        $this->assertSame('ASC', BarCriteria::ASC);
        $this->assertSame('DESC', BarCriteria::DESC);
        $this->assertSame(['b' => 'baz'], BarCriteria::getAssociationMap());

        $c = new BarCriteria();

        $this->assertSame(Bar::class, $c->getTargetClass());
        $this->assertSame('ASC', $c::ASC);
        $this->assertSame('DESC', $c::DESC);
        $this->assertSame(['b' => 'baz'], $c->getAssociationMap());
    }
}
