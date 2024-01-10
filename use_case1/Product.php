<?php

class Product
{
    public $name;
    public $price;
    public $quantity;

    public function __construct($name, $price, $quantity)
    {
        $this->name= $name;
        $this->price= $price;
        $this->quantity = $quantity;
    }

    public function calculateTotal()
    {
        return $this->price * $this->quantity;
    }
}

$banana = new Product("Banana", 1.0, 6);
$apple = new Product("Apple", 1.5, 3);
$wine = new Product("Bottle of Wine" , 10.0, 2);

$products = [$banana, $apple, $wine];

$totalPrice = 0;
$totalTax = 0;
fruitTax = 0.06;