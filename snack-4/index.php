<?php
/*
Creare un array con 15 numeri casuali, tenendo conto che l’array non
dovrà contenere lo stesso numero più di una volta
*/

$randomNumbers = [];

$i = 1;
while ($i <= 15) {
    $newNum = rand(1,100);
    if (!in_array($newNum, $randomNumbers)) {
        array_push($randomNumbers, $newNum);
        $i++;
    }
}

foreach($randomNumbers as $numbers) {
    echo $numbers . "<br>";
}
?>