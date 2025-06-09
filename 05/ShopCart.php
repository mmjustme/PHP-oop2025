<?php

class ShopCart
{
    public array $products = [];

    public function showProducts():void
    {
        foreach ($this->products as $index => $product) {
            echo $index . ": " .
                $product["title"] .
                " {$product["price"]}" . "$\n";
        }

    }

    public function getTotal()
    {
        $total = 0;
        foreach ($this->products as $product){
            $total +=$product["price"];
        }
        return $total;
    }

    public function add(array $item) : static
    {
        $this->products[] = $item;
        return $this;
    }

}

