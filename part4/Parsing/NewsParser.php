<?php

declare(strict_types=1);

namespace Parsing;

class NewsParser extends Parser
{
    public const CONST_NAME = "const name";
    public static array $staticProperty = [
        'title' => 'static $staticProperty'
    ];
    public array $attributes = [];
    public function __construct()
    {
        dump(__METHOD__);
    }

    public function __get(string $name)
    {
        return $this->attributes[$name] ?? null;
    }
    public function __set(string $name, $value): void
    {
        $this->attributes[$name] = $value;
    }
    public static function callStatic(string $name, array $arguments)
    {
        dump('__callStatic: $name: ' . $name);
        dump('__callStatic: $arguments: ' . var_export($arguments, true));
    }
    public static function callStaticMethod()
    {
        dump(__METHOD__);
    }
    public static function parse2()
    {
        self::parse3();
    }
    public static function parse3()
    {
        dump(__METHOD__);
    }
    public function __invoke(array $arguments): bool
    {
        dump($arguments);
        return false;
    }
}
