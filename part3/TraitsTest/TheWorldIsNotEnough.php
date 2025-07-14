<?php

declare(strict_types=1);

namespace TraitsTest;

class TheWorldIsNotEnough
{
    use HelloWorld;
    public function sayHello()
    {
        echo "Hello Universe!";
    }
}
