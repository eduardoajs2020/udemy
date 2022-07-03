<?php

$meu_array = ['carro', 'casa', 'cachorro', 'gato', 'televisão', 100, 200.1, 400, 1200,True, False, 128.10];

$x = count($meu_array);
$y = 0;

while ($y <= $x)
{
  if(is_string($meu_array[$y]))
  {
    echo $meu_array[$y]. "<br>";
  }
    $y++;
}

?>
