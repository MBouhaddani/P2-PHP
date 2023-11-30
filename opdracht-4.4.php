<?php

$products = [
    "A" => 100,
    "B" => 200,
    "C" => 50,
    "D" => 300,
];


foreach ($products as $product => $price) {
   
    if ($price > 150) {
      
        $price += ($price * 0.19);
    }

    elseif ($price < 55) {

        $price += ($price * 0.11);
    }

    $products[$product] = $price;
}

foreach ($products as $product => $price) {
    echo $product . ": " . $price . " euro" ;
}
?>