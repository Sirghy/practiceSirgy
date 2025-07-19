<?php

declare(strict_types=1);

namespace Categories;

class Books
{
    public function __construct(
        private int $id,
        private string $title
    ) {}
}
