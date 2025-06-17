<?php

class Product
{
    public ?string $title;
    public int $price;

    public function __construct(

// якщо потрібно, щоб користувач обовязково передав дані
// забираємо значення за замовчуванням
//  string $title = "Some Product",
//  int $price = 0
        string $title,
        int    $price
    )
    {
        $this->title = $title;
        $this->price = $price;
    }

    public function getRealPrice($currency = "$"): string
    {
        return "{$currency}" . $this->price / 100;
    }
}