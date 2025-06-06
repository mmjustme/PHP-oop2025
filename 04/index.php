<?php

require_once __DIR__ . "/Product.php";

$phone = new Product();
//echo $phone->sayHello();

$phone->price = 1000;
var_dump($phone);
$price = $phone->getRealPrice();
var_dump($price);