<?php
// strpos: encontrar algum texto na string

$str = "Estamos testando o método srtpos, com o strpos, podemos encontrar strings";

$teste_encontrar = strpos($str, "strpos");

echo "$teste_encontrar <br>";


$teste_encontrar2 = strpos($str, "Java");

echo "$teste_encontrar2 <br>";

if($teste_encontrar2 === false){
  echo "Palavra não encontrada <br>";
}

$palavra = "com";

$teste_encontrar3 = strpos($str, $palavra);
echo "$teste_encontrar3 <br>";

$teste_encontrar3;



$palavra2 = "to";

$teste_encontrar4 = strpos($str, $palavra2);
echo "$teste_encontrar4 <br>";

$teste_encontrar4;

?>
