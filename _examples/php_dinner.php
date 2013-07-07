
<?


$dinner=$_GET["entree"];
$entree_price = 0;

$steak_price = 23.00; //These four variables store the price of the entrees as integers. We'll need them to be integers so we can add them up later.
$salmon_price= 15.00;
$pork_price= 16.00;
$chicken_price= 13.00;

$spritzer_price = 5.00; //These four variables store the prices of the drinks as integers
$whiskey_price = 8.00;
$gin_price = 9.00;
$wine_price = 10.00;

function select_beverage($dinner) {

if ($dinner =="Steak Nubs") { // This "If" statement sets the value of the variables $entree_price to the price of the entree.

   $drink = "Spritzer";

}

else if ($dinner =="Salmon Frizzle") { // This "else if" statement sets the value of the variables $entree_price to the price of the entree.
   $drink = "Whiskey Assault Blaster";

}

else if ($dinner =="Barbecue Pork") { // This "else if" statement sets the value of the variables $entree_price to the price of the entree.
   $drink = "Gin Befouler";

}

else if ($dinner =="Chicken Roaster") { // This "else if" statement sets the value of the variables $entree_price to the price of the entree.
   $drink= "Hard Wine";

}

return $drink;
}

function drink_price($bev) { // I wrote another function to handle the output of the beverage price since I had to think of how to re-do that aspect of the code as it didn't make sense to put another set of if/if else statements in with the entree-price setting set. I used $bev to avoid confusing it with the $drink variable that operates outside the function.

$spritzer_price = 5.00; //These four variables store the prices of the drinks as integers. I placed them within the function so that they would be available to the function.
$whiskey_price = 8.00;
$gin_price = 9.00;
$wine_price = 10.00; // I wrote another function to handle the output of the beverage price since I had to think of how to re-do that aspect of the code as it didn't make sense to put another set of if/if else statements in with the entree-price setting set.

  if ($bev == "Spritzer") { //This sets the value of $drink_price to the value of the price of the particular beverage choice.
   $drink_price = $spritzer_price;
   }

else if ($bev == "Whiskey Assault Blaster") { //This sets the value of $drink_price to the value of the price of the particular beverage choice.
   $drink_price = $whiskey_price;
   }

else if ($bev == "Gin Befouler") {  //This sets the value of $drink_price to the value of the price of the particular beverage choice.
   $drink_price = $gin_price;
}

else if ($bev == "Hard Wine") { //This sets the value of $drink_price to the value of the price of the particular beverage choice.
   $drink_price = $wine_price;
   }

   return $drink_price;
}



$drink = select_beverage($dinner);

$d_price = drink_price($drink);



if ($dinner=="Steak Nubs") { // This "If" statement sets the value of the variable $entree_price to the price of the entree.
   $entree_price = $steak_price;
}

else if ($dinner=="Salmon Frizzle") { // This "else if" statement sets the value of the variable $entree_price to the price of the entree.
   $entree_price = $salmon_price;
}

else if ($dinner=="Barbecue Pork") { // This "else if" statement sets the value of the variable $entree_price to the price of the entree.
   $entree_price = $pork_price;
}

else if ($dinner=="Chicken Roaster") { // This "else if" statement sets the value of the variables $entree_price to the price of the entree.
   $entree_price = $chicken_price;

}

$subtotal = $entree_price + $d_price; //This line adds the drink and entree prices together to calculate the subtotal from which the tax and tip amounts will be derived.

$tip = .15; //This and the next variable, $tax, store the floating point numbers that correspond to the percentages of the subtotal price of the meal.
$tax = .08;

$tip_price = $subtotal * $tip;       //This stores the value of the tip amount in $tip_price
$tax_price =  $subtotal * $tax; //This stores the value of the tax in $tax_price
$total = $subtotal  + $tip_price + $tax_price; //This  adds up and stores the value of the total, the sum of the subtotal, tax, and tip amounts in "$total".

echo "<h3>Thank you for dining with us!</h3>".
     "<h2>Your receipt:</h2>".
     "<ul>".
         "<li>Entree: ".$dinner." -- $".sprintf("%01.2f", $entree_price)."</li>". //These lines display the user's entree and drink choices and their prices as well as the tip, tax, subtotal, and total  amounts.
         "<li>Drink: ".$drink." -- $".sprintf("%01.2f", $d_price)."</li>".
         "<br/>".
         "<li>Subtotal: $".sprintf("%01.2f", $subtotal)."</li>".
         "<br/>".
         "<li>Tax: $".sprintf("%01.2f", $tax_price)."</li>".
         "<li>Tip: $".sprintf("%01.2f", $tip_price)."</li>".
         "<br/>".
         "<li>GRAND TOTAL: $".sprintf("%01.2f", $total)."</li>".
     "</ul>"

?>
</ul>