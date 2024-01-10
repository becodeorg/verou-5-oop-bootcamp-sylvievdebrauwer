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
$fruitTax = 0.06;
$wineTax = 0.21;

foreach ($products as $product) {
    $totalPrice += $product->calculateTotal();

    if($product->name === "Bottle of Wine") {
        $totalTax += $product->calculateTotal() * $wineTax;
    } else {
        $totalTax += $product->calculateTotal() * $fruitTax;
    }
}

echo "Total Price: €" . number_format($totalPrice, 2);
echo "<br>";
echo "Total Tax: €" . number_format($totalTax, 2);

