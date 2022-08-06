<?php
// public: A propriedade ou método pode ser acessada de qualquer forma
//protected: pode ser acessada apenas pela classe de de origem ou as que recebem a mesma de herança.
//private: A propriedade ou metodo pode ser acessada apenas pela classe que foi criada.

Class Car{

  public $rodas=4;
  private $vidro="sem película";
  protected $portas=4;

  public function getVidro(){
    return $this->vidro;
  }
  public function getPortas(){
    return $this->portas;
  }
}


 Class Mecanico{

   public function alterar_rodas($carro){
     $carro-> rodas=10;
   }
   public function colocar_pelicula($carro, $pelicula){
     $carro-> vidro = $pelicula;
   }
 }
$carro = new Car;
echo $carro-> rodas."<br>";



$matheus = new Mecanico;
$matheus-> alterar_rodas($carro);


echo $carro->rodas."<br>";
//Não pode alterar porque é privado
//$matheus->colocar_pelicula($carro, "G20");
echo $carro-> getVidro()."<br>";

//$carro->vidro= "teste";
echo $carro-> getPortas()."<br>";

?>
