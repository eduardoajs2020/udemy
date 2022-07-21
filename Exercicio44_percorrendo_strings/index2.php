<?php

$str = "O rato roeu a roupa do rei de Roma";

$contador_de_as = 0; //contador começando em 0

for($i=0; $i < strlen($str); $i++){

  if ($str[$i] === "a"){

  $contador_de_as++;  // incrementa contador
  }
}
echo "O número de as na frase é $contador_de_as: <br>";



?>
