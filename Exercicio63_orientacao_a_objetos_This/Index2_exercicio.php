<?php
class Carro{

public $cor;
public $motor;
public $velocidade_maxima;

function setVelocidadeMaxima($vel){
  $this-> velocidade_maxima=$vel;
  }
function getVelocidadeMaxima(){
  echo "A velocidade máxima deste carro é: $this->velocidade_maxima km/h<br>";
  }
}

$bmw = new Carro;

$bmw->cor ="Branca";
$bmw->motor= 3.0;

$bmw->setVelocidadeMaxima(200);

$bmw->getVelocidadeMaxima();


$ferrari = new Carro;

$ferrari->cor ="Vermelha";
$ferrari->motor= 4.8;

$ferrari->setVelocidadeMaxima(340);

$ferrari->getVelocidadeMaxima();

?>
