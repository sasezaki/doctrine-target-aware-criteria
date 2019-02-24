<?php

namespace Otobank\Doctrine\Collections;

use FakeApp\Foo;
use FakeApp\FooCriteria;
use PHPUnit\Framework\TestCase;

class TargetAwareCriteriaTest extends TestCase
{
    /**
     * @expectedException \Error
     * @expectedExceptionMessageRegExp /Cannot instantiate abstract class/
     */
    public function testCannotInstantiate()
    {
        $c = new TargetAwareCriteria();
    }

    public function testConcreteClass()
    {
        $this->assertSame(Foo::class, FooCriteria::getTargetClass());
        $this->assertSame('ASC', FooCriteria::ASC);
        $this->assertSame('DESC', FooCriteria::DESC);

        $c = new FooCriteria();

        $this->assertSame(Foo::class, $c->getTargetClass());
        $this->assertSame('ASC', $c::ASC);
        $this->assertSame('DESC', $c::DESC);
    }
}
