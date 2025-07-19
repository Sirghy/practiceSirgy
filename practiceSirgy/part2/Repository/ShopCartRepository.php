<?php

declare(strict_types=1);

namespace Repository;

use Interfaces\ProductInterface;
use Interfaces\ShoppingCartInterface;

class ShopCartRepository implements ShoppingCartInterface
{
    private $items = [];
    public function add(ProductInterface $product, int $quantity = 1)
    {
        $this->items[$product->getId()] = $quantity;
    }
    public function remove(int $id)
    {
        unset($this->items[$id]);
    }
    public function edit(int $id, int $quantity)
    {
        $this->items[$id] = $quantity;
    }
    public function getItems(): array
    {
        return $this->items;
    }
}
