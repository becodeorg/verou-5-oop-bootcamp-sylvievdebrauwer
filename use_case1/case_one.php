<?php
/*
Use Case #1
A basket contains the following things:

Banana's (6 pieces, costing €1 each)
Apples (3 pieces, costing €1.5 each)
Bottles of wine (2 bottles, costing €10 each)
Without using classes, do the following in your code:

Calculate the total price
Calculate how much of the total price is tax (fruit goes at 6%, wine is 21%)
*/

$bananaPrice = 1.0;
$applePrice = 1.5;
$winePrice = 10.0;

$bananasQuantity = 6;
$applesQuantity = 3;
$wineQuantity = 2;

$bananaTotal = ($bananaPrice * $bananasQuantity);
$appleTotal = ($applePrice * $applesQuantity);
$wineTotal = ($winePrice * $wineQuantity);

$totalPrice = $bananaTotal + $appleTotal + $wineTotal;
$fruitTax = 0.06;
$wineTax = 0.21;


$totalTax = (($bananaTotal + $appleTotal) * $fruitTax) + ($wineTotal * $wineTax);

echo "total Price: €" . number_format($totalPrice, 2);
echo "<br>";
echo "Total Tax: €" . number_format($totalTax, 2);

*/
/*
Basils code // FIRST, calculate total price!
<?php
declare strict types

ini_set(...)
ini_set(...)
error_reporting(...)

$totalPrice = 0;
$totalTax = 0;


$products = [
    ["name" => "Banana", "amount" => 6, "cost" => 1, "tax" => 0.06],
    ["name" => "Apple", "amount" => 3, "cost" => 1.5, "tax" => 0.06],
    ["name" => "Wine", "amount" => 2, "cost" => 10.0, "tax" => 0.21],

foreach ($products as $products) {
    $totalPrice +- $product["amount"] * $product["cost];

    if($product["type"]" === "fruit){
        $totaltax += $product["amount"] * $product["cost"] * $product["tax"]
    }
}
*/