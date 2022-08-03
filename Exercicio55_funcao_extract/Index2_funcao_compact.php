<?php
//Podemos criar um array a partir de variáveis, pasando os seus nomes como strings

$marca = "BMW";
$motor = "3.0";
$tetoSolar = true;
$portas = 4;

$carro = compact("marca","motor","tetoSolar", "portas");

print_r($carro);



?>
