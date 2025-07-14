<?php

declare(strict_types=1);

use Interfaces\ProductInterface;
use Models\BookProductModel;
use Repository\ShopCartRepository;

ini_set('display errors', 'on');
error_reporting(E_ALL);

require __DIR__ . '/autoload.php';

$shoppingCart = new ShopCartRepository();
$bookProduct = new BookProductModel(10, "1984", "a famous George Orwell book");


$shoppingCart->add($bookProduct, 3);
var_export($shoppingCart->getItems());
