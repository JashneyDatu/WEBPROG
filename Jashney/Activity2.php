<?php
// Jashney Kurt Datu 2E
$Item = "Ballpen";
$Quantity = 10;
$Price = 20;
$Discount = 0.10;
$Amount = 300; 
// Calculation
$Total = $Quantity * $Price;
$Discount = $Discount * $Total ;
$Total2 = $Total - $Discount;
$Change = $Amount - $Total2;
//This is the output
echo "Purchase Summary";
echo "<br>----------------";
echo "<br>Item: $Item";
echo "<br>Quantity: $Quantity";
echo "<br>Price per item: P $Price";
echo "<br>Total before discount: P $Total";
echo "<br>Discount(10%): P $Discount";
echo "<br>Total after discount: P $Total2";
echo "<br>Amount paid: P $Amount";
echo "<br>Change: P $Change";

?>
