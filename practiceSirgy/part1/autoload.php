<?php

function autoloader($classname): void
{
    $classname = str_replace('\\', DIRECTORY_SEPARATOR, $classname);
    require __DIR__ . '/' . $classname . '.php';
}


spl_autoload_register('autoloader');
