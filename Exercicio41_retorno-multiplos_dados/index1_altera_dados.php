<?php


function altera_dados($nome, $idade){
  $nome = "Sr. $nome";
  $idade = "$idade anos";

  return [$nome, $idade];
}
$dados = altera_dados("Matheus", 29);

print_r($dados);

echo "<br>";

echo "Olá $dados[0], você tem $dados[1]";


?>
