<?php
// O this se refere à instância atual do objeto, podendo alterar um valor
//sintaxe: $this->propriedade= "x"; (this = este)
class Animal{
  public $nome;

  function escolher_nome($nome){
    $this->nome=$nome;
  }
function latir(){
  return "Au au! <br>";
  }
  function latir_forte(){
    return strtoupper($this->latir());
  }
}
$frida = new Animal;

echo "o nome do animal é: $frida->nome<br>";

$frida->escolher_nome("Frida");

echo "o nome do animal é: $frida->nome<br>";

echo $frida-> latir();//return

echo $frida-> latir_forte();//return
?>
