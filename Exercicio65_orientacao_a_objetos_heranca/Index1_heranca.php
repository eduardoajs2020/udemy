<?php
class Humano{

  public $idade = 29;

  public function falar(){
    echo "Olá mundo!<br>";
  }
  private function gritar(){
    echo "PHP É MUITO BOM!<br>"; //metodo private tem que:
  }
  public function acessarGritar(){ // colocar uma função publica com o métod $this, para ficar acessível a Outra classe
    $this-> gritar();
  }
  protected function falarBaixinho(){
    echo "lalala <br>";
  }
  public function acessaFalarBaixinho(){
    $this->falarBaixinho();
  }
}
class Programador extends Humano{

  public function acessaFalarBaixinhoProgramador(){//Protected pode ser acessada na classe filha, private, não pode!
    $this->falarBaixinho();
  }
}

$ze = new Humano;

echo $ze-> idade."<br>";
$ze-> falar();
$ze-> acessaFalarBaixinho();

$matheus = new Programador;

echo $matheus-> idade."<br>";
$matheus-> falar();
$matheus-> acessarGritar(); //objeto público $this
$matheus-> acessaFalarBaixinho(); //objeto protected/publico $this
$matheus-> acessaFalarBaixinhoProgramador();//objeto protected(publico, de dentro da classe filha)

?>
