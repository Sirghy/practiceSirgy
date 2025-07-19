<?php

declare(strict_types=1);
ini_set("display_errors", 1);
error_reporting(E_ALL);

require __DIR__ . '/autoload.php';
require __DIR__ . '/dump.php';

use Products\Product;
use Products\BookProduct;

$product = new Product(1, 'cap', 'very warm');
echo '<pre>';
var_dump($product->getDescription());

$bookproduct = new BookProduct(2, '1984', 'Famous Gerge Oruels novell');

echo '<pre>';
var_dump($bookproduct->getDescription());

echo '<pre>';
var_dump($bookproduct->getTitle());
echo '<br>--------------------------------------------------------------------------------------------------------';
echo '<br> The equal code with function "dump"';

dump($bookproduct, label: 'our product');
