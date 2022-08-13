<?php
// a classe inicializa a variável

$pessoa = new Class(){

  public $nome = "Matheus";

  public function dizerNome(){
    
    echo "Olá meu nome é $this->nome<br>";
  }
};

echo $pessoa->nome."<br>";

$pessoa->dizerNome();



?>
