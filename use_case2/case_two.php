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

    public function applyDiscount($discountPercentage)
    {
        $discountedPrice = $this->price * (1 - $discountPercentage / 100);
        return new Product($this->name, $discountedPrice, $this->quantity);
    }
}

$banana = new Product("Banana", 1.0, 6);
$apple = new Product("Apple", 1.5, 3);
$wine = new Product("Bottle of Wine" , 10.0, 2);

//apply 50% discount
$discountedBanana = $banana->applyDiscount(50);
$discountedApple = $apple->applyDiscount(50);

$products = [$discountedBanana, $discountedApple, $wine];

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
