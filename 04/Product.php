<?php

class Product
{
    public ?string $title = "Some product";
    public int $price;

    public function sayHello(): string
    {
        return "Hello from " . __CLASS__ . PHP_EOL;
    }

}