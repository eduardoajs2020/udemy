<?php
//Foreach: trabalha com um array definido.

$nomes = ["Matheus","João","Pedro","Maria"];
$a = 10;

foreach($nomes as $nome){
  echo "O nome do índice atual é $nome <br>";
  if($nome == "Matheus <br>")
  {
    echo " Opa $a";
  }
}



?>
