<?php
// Percorrendo uma string com for e strlen

$str = "esta é uma string muito grande, ela tem vários caracteres";

for($i=0; $i < strlen($str); $i++){

  echo "$str[$i] <br>";
}

?>
