<?php
$a = "casa";
$b = 10;
$c = 12.2;
$d = True;

$msg1 = " É inteiro <br>";
$msg2 = " Não é inteiro <br>";

if(is_int($a)){
  echo $msg1;
}
else{
  echo $msg2;
}

if(is_int($b)){
  echo $msg1;
}
else{
  echo $msg2;
}

if(is_int($c)){
  echo $msg1;
}
else{
  echo $msg2;
}

if(is_int($d)){
  echo $msg1;
}
else{
  echo $msg2;
}


?>
