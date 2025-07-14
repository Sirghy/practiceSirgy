<?php

declare(strict_types=1);

namespace Models;

use Interfaces\ProductInterface;

class ProductModel implements ProductInterface
{
    protected int $id;
    protected string $title;
    protected string $description;

    public function __construct(int $id, string $title, string $description)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
    }

    public function getId(): int
    {
        return $this->id;
    }
}
