<?php

declare(strict_types=1);

namespace Products;

class Product
{
    private int $id;
    protected string $title;
    private string $description;

    public function __construct(int $id, string $title, string $description)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
    }

    public function  getDescription(): string
    {
        return $this->description;
    }
}
