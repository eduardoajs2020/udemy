<?php

$velocidade = 80;
$maximo = 40;

if($velocidade < $maximo){
  echo "Você está na velocidade correta";
}
elseif($velocidade == $maximo){
  echo "Cuidado com a multa";
}
else{
  echo "Você está sendo multado!";
}


?>
