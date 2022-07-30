<?php
//Chaves e valores(array associativo, chave => valor)

$carro = [
  'Marca' => 'BMW',
  'Motor' => '2.4',
  'Teto_solar'=> true,
  'Cambio'=> 'Manual',
  'Portas' => 4
];

$chaves = array_keys($carro);

print_r($chaves);
echo "<br>";

$valores = array_values($carro);

print_r($valores);
echo "<br>";
?>
