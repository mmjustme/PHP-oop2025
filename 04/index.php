<?php

error_reporting(-1);

require_once __DIR__ . "/Product.php";

$book = new Product();
$book->title = "Book";
$book->price = 20.1;
var_dump($book);
var_dump($book->price);


echo "<br>";

$phone = new Product();
$phone->title = "Phone";
$phone->price = 39;

// Динамічний параметр
//помилкове значення читається як новий параметр
// і відповідно буде стоврений як новий параметр
$phone->tite = "Phone";
var_dump($phone);
var_dump($phone->title);
