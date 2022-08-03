<?php

$tipo = 'tenis';
$marca = 'nike';
$marca2 = 'adidas';
$tamanho = 40;

$calcado = compact("tipo", "marca", "marca2", "tamanho");

print_r($calcado);
echo "<br>";

foreach($calcado as $caracteristica => $value){
  echo "$caracteristica: $value<br>";

}


?>
