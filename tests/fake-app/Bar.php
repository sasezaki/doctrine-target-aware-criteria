<?php

namespace FakeApp;

class Bar
{
    /** @var Baz */
    public $baz;

    public function __construct()
    {
        $this->baz = new Baz();
    }
}
