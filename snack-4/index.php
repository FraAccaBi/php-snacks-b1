<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php 

$randomArray = [];

while(count($randomArray) < 15) {
    $number = rand(1,20);

    if (!in_array($number, $randomArray) ) {
        $randomArray[] = $number;
    }
}

var_dump($randomArray);