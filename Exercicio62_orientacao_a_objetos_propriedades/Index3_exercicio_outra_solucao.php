<?php
class Pessoa{
  public $nome;
  public $idade;

  function andar($m){
    echo "A pessoa andou $m metros <br>";
  }
}

$matheus = new Pessoa;

$matheus ->nome ="Matheus";
$matheus ->idade=29;

echo "O nome dele é $matheus->nome e a sua idade é $matheus->idade.<br>";

$matheus->andar(20);


$eduardo = new Pessoa;

$eduardo ->nome ="Eduardo";
$eduardo ->idade=43;

echo "O nome dele é $eduardo->nome e a sua idade é $eduardo->idade.<br>";

$eduardo->andar(100);

?>
