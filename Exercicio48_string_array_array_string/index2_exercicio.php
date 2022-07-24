<?php

$minha_string = "carro, navio, helicoptero, barco, jangada";

$meu_array = explode(",",$minha_string);

  print_r($meu_array);
  echo "<br>";
  
for ($i = 0; $i < count($meu_array); $i++){
  echo "Item: $meu_array[$i] <br>";
}

?>
