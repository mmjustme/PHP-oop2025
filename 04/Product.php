<?php

#[\AllowDynamicProperties]
// дозволяє ств динамічні параметри без видавання помилки
class Product
{
    public ?string $title = "Some product";
    // ? = null тобто значення стрінги або null
    // "Some product" - значення за замовчуванням
    public int|float $price;

}