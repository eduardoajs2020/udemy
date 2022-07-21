<?php
//strtoupper: deixa a string em caixa alta
//strtolower: deixa a string em caixa baixa
//ucfirst: deixa a primeira letra da string maiúscula
//ucfirst: deixa a primeira letra da string minúscula

$str = "esta string esta em caixa baixa<br>";

echo strtoupper($str);

$str2 = "ESTA STRING ESTA EM CAIXA ALTA<br>";

echo strtolower($str2);

$str = "testando o case de uma palavra <br>";

echo ucfirst($str);

$str = "testando o case de uma palavra <br>";

echo ucwords($str);


?>
