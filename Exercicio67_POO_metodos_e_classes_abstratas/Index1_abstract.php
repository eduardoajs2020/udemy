<?php
//Classes abstratas não podem ser isntanciadas. tem que ser chamadas com ::funcao().

abstract class Teste{

  public static function testandoClasse(){
    echo "Este método é uma classe abstrata<br>";

  }
  abstract public function testeAbs();
}

//$t = new Teste;

Teste::testandoClasse();

class Nova extends Teste{

  public function testeAbs(){
    echo "Teste método abstrato <br>";
  }
}

$n = new Nova;
$n->testeAbs();
?>
