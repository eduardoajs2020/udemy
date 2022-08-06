<?php
//Peculiaridades: Maiúscula, sem cifrão e self:: para exibir, ao invés de ->
class Humano{
  public const OLHOS = 2;
  public const BRACOS = 2;
  public const PERNAS = 2;

  function mostrar_Constante(){
    echo self::BRACOS . "<br>";
  }
}
$matheus = new Humano;

echo $matheus::OLHOS."<br>";

$matheus->mostrar_constante();


?>
