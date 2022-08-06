<?php

Class Humano{
  public $nome;
  public $idade=10;
  public $cor= "Rosa<br>";

  public function nomear(){
    echo "O nome é $nome<br>";
  }
  private function idealizar(){
    echo $this -> idade."<br>";
  }
  public function abrirIdealizar(){
     $this -> idealizar();
  }
  protected function colorir(){
    echo $this -> cor."<br>";
  }
  public function abrirColorir(){
     $this -> colorir();
  }
}

Class Professor extends Humano{

}

$mario = new Humano;

echo $mario-> nome = "Mario<br>";
$mario-> abrirIdealizar();
$mario-> abrirColorir();

$jose = new Professor;

echo $jose-> nome = "Jose<br>";
$jose-> abrirIdealizar();
$jose-> abrirColorir();


?>
