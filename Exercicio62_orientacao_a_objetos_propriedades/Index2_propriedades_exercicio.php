<?php

class Pessoa{
  public $nome;
  public $idade;

  function andar($metros){
    echo "Andou $metros metros!<br>";
  }
}

 $cliente = new Pessoa;

 echo $cliente -> nome = "Eduardo<br>";

 echo $cliente -> idade= 43,"<br>";

$cliente -> andar(100);


$curioso = new Pessoa;

echo $curioso -> nome = "Carlos<br>";

echo $curioso -> idade= 25,"<br>";

$curioso -> andar(30);

?>
