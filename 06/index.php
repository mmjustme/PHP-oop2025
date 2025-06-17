<?php

require_once __DIR__ . "/Product.php";

//$phone = new Product("Samsung",1000);
//var_dump($phone->price);
//var_dump($phone);

// передача лише одного параметра з 2
//$book = new Product(price:20);
//var_dump($book);

$book = new Product("Book", 200);
var_dump($book);