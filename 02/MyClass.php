<?php

class MyClass
{

}

$object = new MyClass();
$secondObject = new MyClass();

var_dump($object);
var_dump($secondObject);
var_dump(new (MyClass::class));