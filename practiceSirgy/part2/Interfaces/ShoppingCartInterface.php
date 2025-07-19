<?php

namespace Interfaces;

interface ShoppingCartInterface
{
    public function add(ProductInterface $product, int $quantity = 1);
    public function remove(int $id);
    public function edit(int $id, int $quantity);
}
