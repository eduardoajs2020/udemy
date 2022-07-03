<?php
$peso1 = 95.0;
$peso2 = 70.0;

$msg1 = "Você está pesado demais <br>";
$msg2 = "você está dentro do peso <br>";

if($peso1 > 80){
  echo $msg1;
}
else{
  echo $msg2;
}

if($peso2 > 80){
  echo $msg1;
}
else{
  echo $msg2;
}


?>
