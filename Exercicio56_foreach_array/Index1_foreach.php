<?php
// foreach com arrays: utilizando a notação chave => valor
//(foreach($itens as $key =>value){})

$matheus = [
  'nome' => 'Matheus',
  'idade' => 29,
  'profissao' => 'Programador'
];

$alexia = [
  'nome' => 'Alexia',
  'idade' => 25,
  'profissao' => 'Eng. Civil'
];

foreach($matheus as $carac => $value){
  echo "$carac => $value <br>";
}

foreach($alexia as $carac => $value){
  echo "$carac => $value <br>";
}
?>
