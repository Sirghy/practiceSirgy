<?php

declare(strict_types=1);

namespace Products;

class BookProduct extends Product
{
    public function __construct(int $id, string $title, string $description)
    {
        parent::__construct($id, $title, $description);
    }
    public function getTitle(): string
    {
        return $this->title;
    }
}
