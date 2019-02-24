<?php

namespace FakeApp;

class Bar
{
    public $baz;

    public function __construct()
    {
        $this->baz = new Baz();
    }
}
