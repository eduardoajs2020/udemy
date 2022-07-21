<?php
//trim = limpa espaços antes e depois das strings
//ltrim = limpa espaços na parte inicial da string
//rtrim = limpa espacos na parte final da string.
//utilizáveis para salvar no Banco de dados


$str1 = "  Matheus   ";
echo "Essa é a string 1: $str1.<br>";

$str_limpa = trim($str1);
echo "Essa é a string 1: $str_limpa.<br>";

$str_limpa2 = rtrim($str1);
echo "Essa é a string 1: $str_limpa2.<br>";

?>
