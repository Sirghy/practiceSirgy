<?php

declare(strict_types=1);

namespace TraitsTest;

trait SayWord
{
    public function sayHello(): string
    {
        parent::sayHello();
        return "World";
    }
}
