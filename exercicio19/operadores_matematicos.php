<?php

$adicao = 5+2;

$subtracao = 5-2;

$multiplicacao = 5*2;

$divisao = 5/2;

echo "A adição: 5+2 é: ", $adicao;
echo "<br>";

echo "A subtração: 5-2 é: ", $subtracao;
echo "<br>";

echo "A multiplicação: 5*2 é: ", $multiplicacao;
echo "<br>";

echo "A divisão: 5/2 é: ", $divisao;
echo "<br>";
echo "<br>";

$resultado = 1 + $adicao - $subtracao * $multiplicacao / $divisao;

echo "O resultado final + 1 é: ", $resultado;
echo "<br>";
echo "<br>";
echo "<br>";


$modulo1 = 10%2;
$modulo2 = 10%3;

echo "O modulo de 10 por 2 é: ", $modulo1;
echo "<br>";
echo "<br>";

echo "O modulo de 10 por 3 é: ", $modulo2;
echo "<br>";
echo "<br>";

$potencia = 5**2;

echo "O expoente 5 elevado a 2 é: ", $potencia;
echo "<br>";
echo "<br>";

echo "Exemplo de concatenação: ".$resultado.$modulo1.$modulo2.$potencia;
?>
