<?php
$str = "Esta é minha string";

$minha = substr($str, 8, 5); // string pai, indice inicial, comprimento da palavra

echo $str. "<br>";
echo $minha. "<br>";

$str2 = "Testando esta string abc ";

$nova_string = substr($str2, 8); //Omitir comprimento = pegar até o fim

echo $nova_string. "<br>";

$nova_string2 = substr($str2, 8, -4); // comprimento negativo = remover do ultimo índice

echo $nova_string2. "<br>";


?>
