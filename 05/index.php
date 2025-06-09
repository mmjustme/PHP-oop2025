<?php
error_reporting(-1);

require_once __DIR__ . "/ShopCart.php";

$shopCart = new ShopCart();
$product = ['title'=>'book','price'=> 30];
$shopCart->add(['title'=>'pen','price'=> 15]);
echo $shopCart->add(['title'=>'pen2','price'=> 15])->getTotal() . "\n";

//var_dump($shopCart->getTotal());
