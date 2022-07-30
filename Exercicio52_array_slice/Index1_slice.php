<?php
// Pega partes de um array, através dos índices informados


$arr = [2, 4, 6, 8, 10, 12, 14, 16, 18];

$slice1 = array_slice($arr, 1, 3); # de 4 até 8

print_r($slice1);
echo "<br>";

$slice2 = array_slice($arr, 4, 4); # de 10 até 16

print_r($slice2);
echo "<br>";

$slice3 = array_slice($arr, 4); # de 10 até o último número

print_r($slice3);
echo "<br>";


$slice4 = array_slice($arr, 4, -3); #10 e 12 (-3 em ordem decrescente)

print_r($slice4);
echo "<br>";


?>
