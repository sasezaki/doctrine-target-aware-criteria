<?php

namespace Otobank\Doctrine\Collections;

use FakeApp\BarCriteria;
use FakeApp\FooCriteria;

\PHPStan\Testing\assertType('class-string<FakeApp\Foo>', FooCriteria::getTargetClass());
\PHPStan\Testing\assertType('class-string<FakeApp\Bar>', BarCriteria::getTargetClass());
