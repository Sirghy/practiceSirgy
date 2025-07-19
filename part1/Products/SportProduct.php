<?php

declare(strict_types=1);

namespace Products;

class SportProduct extends Product
{
    public function __construct(int $id, string $title, string $description)
    {
        parent::__construct($id, $title, $description);
    }
}
