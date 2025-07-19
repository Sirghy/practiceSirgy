<?php

declare(strict_types=1);

use TraitsTest\MyHelloWorld;
use TraitsTest\Product;
use TraitsTest\TheWorldIsNotEnough;

ini_set('display errors', 'on');
error_reporting(E_ALL);

require __DIR__ . '/autoload.php';
require __DIR__ . '/dump.php';

$world = new MyHelloWorld();
echo $world->sayHello();
echo '<br>---------------------------------------------------------------------------------';
echo "<pre>";
$uni = new TheWorldIsNotEnough();
$uni->sayHello();
echo '<br>---------------------------------------------------------------------------------';
echo '<pre>';
$product = new Product();
$product->setId(21);
dump($product, label: 'Our product');
