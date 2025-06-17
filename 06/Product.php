<?php

class Product
{
//    public ?string $title;
//    public int $price;
//
//    public function __construct(
//
//// якщо потрібно, щоб користувач обовязково передав дані
//// забираємо значення за замовчуванням
////  string $title = "Some Product",
////  int $price = 0
//        string $title,
//        int    $price
//    )
//    {
//        $this->title = $title;
//        $this->price = $price;
//    }

//спрощений запис одразу ініціалізація і привоєння
    public function __construct(
        public string $title = "Some Product",
        public int    $price,
    )
    {
//        тіло методу не потребує шаблонного коду
//        $this->title = $title;
    }

    public function getRealPrice($currency = "$"): string
    {
        return "{$currency}" . $this->price / 100;
    }
}