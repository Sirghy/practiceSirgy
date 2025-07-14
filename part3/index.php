<?php

declare(strict_types=1);

use TraitsTest\MyHelloWorld;
use TraitsTest\TheWorldIsNotEnough;

ini_set('display errors', 'on');
error_reporting(E_ALL);

require __DIR__ . '/autoload.php';

$world = new MyHelloWorld();
echo $world->sayHello();
echo '<br>---------------------------------------------------------------------------------';
echo "<pre>";
$uni = new TheWorldIsNotEnough();
$uni->sayHello();
