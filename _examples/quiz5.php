<B>Checkout</B><br>
Below is a summary of the products you wish to purchase, along with totals:
<?php

function sub_tally($price, $shipping){ //this function adds
    $tax = 0.08;
$total_price += $price;
$total_tax += $tax * $price;
$total_shipping += $shipping * $price;
$grand_total = ($total_price + $total_tax + $total_shipping);
return $grand_total;
}
#tax rate is constant
$tax = 0.08;
$total_price = 0;
$total_tax = 0;
$total_shipping = 0;
$grand_total = 0;
?><ul><?

$product = "Candle Holder";
$price = 11.95;
$shipping = 0; //free shipping
echo "<li>".$product.": $".$price;

sub_tally($price, $shipping);
echo $grand_total;
//tally totals
$total_price += $price;
$total_tax += $tax * $price;
$total_shipping += $shipping * $price;
$grand_total = ($total_price + $total_tax + $total_shipping);

$product = "Coffee Table";
$price = 99.50;
$shipping = 0.10; //shipping as a percentage of price
echo "<li>".$product.": $".$price;

//tally totals
$total_price += $price;
$total_tax += $tax * $price;
$total_shipping += $shipping * $price;
$grand_total = ($total_price + $total_tax + $total_shipping);

$product = "Floor Lamp";
$price = 44.99;
$shipping = 0.10; //shipping as a percentage of price
echo "<li>".$product.": $".$price;

//tally totals
$total_price += $price;
$total_tax += $tax * $price;
$total_shipping += $shipping * $price;
$grand_total = ($total_price + $total_tax + $total_shipping);

?>
</ul>
<hr>
<br>
<B>Total (including tax and shipping): $<? echo number_format($grand_total, 2); ?></B>
