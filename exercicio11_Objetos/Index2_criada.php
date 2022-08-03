<?php

class Empregado{

  function calcula_folha(){
    $multiplicacao = 500 * 0.10;
    printf("Receberá R$ %.2f",$multiplicacao);
  }
}
$funcionario = new Empregado();

$funcionario -> nome = "Eduardo dos Anjos Souza";

echo $funcionario -> nome;

echo "<br>";

$funcionario -> calcula_folha();

?>
