<?php

function autoloader($className): void
{
    $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    require __DIR__ . '/' . $className . '.php';
}

spl_autoload_register('autoloader');
