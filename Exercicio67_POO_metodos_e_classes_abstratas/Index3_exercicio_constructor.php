<?php

class Cachorro{
  public $raca;
  public $cor;
  public $patas;

  function __construct($raca, $cor, $patas){
    $this->raca= $raca;
    $this->cor= $cor;
    $this->patas= $patas;
  }
  public function exibirAnimal(){
    echo "O Cachorro é da raça $this->raca e tem a cor $this->cor e $this->patas patas.<br>";
  }
}

$pingo = new Cachorro("pinsher","marrom", 4);

$pingo-> exibirAnimal();


$raca = "pastor belga";
$cor = "preto";
$patas = 4;

$rabito = new Cachorro($raca, $cor, $patas);

$rabito->exibirAnimal();

?>
