<?php

function teste() //Não incrementa
{
  $a=0;

  $a++;

  echo "$a <br>";
}
teste();
teste();
teste();

function testeStatic()//Incrementa valores
{
  static $a=0;

  $a++;

  echo "$a <br>";
}
testeStatic();
testeStatic();
testeStatic();

?>
