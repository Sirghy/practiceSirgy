<?php

declare(strict_types=1);

namespace Parsing;

abstract class Parser
{
    public static function parse()
    {
        return static::parse2();
    }
    abstract public static function parse2();
}
