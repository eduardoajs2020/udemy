<?php

$x = 4;

while ($x < 30){
  echo "O contador é $x <br>";

  if($x === 24){
    break;
  }

  $x += 2;
}
echo " Acabou o Loop";

?>
