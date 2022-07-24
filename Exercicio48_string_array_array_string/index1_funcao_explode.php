<?php
//string para array: função explode

$frase = "Testando o explode";

$frase_array = explode(" ", $frase);

print_r($frase_array);
echo "<br>";

$frase_array2 = explode(",", $frase);

print_r($frase_array2);
echo "<br>";

$frase_B = "Carro, Avião, Barco, Navio";

$frase_B_array = explode(",", $frase_B);

print_r($frase_B_array);
echo "<br>";

for($i =0; $i < count($frase_B_array); $i++){
  echo "$frase_B_array[$i] <br>";
}
?>
