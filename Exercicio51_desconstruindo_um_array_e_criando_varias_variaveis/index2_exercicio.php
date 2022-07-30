<?php

$carro = ["Jaguar",3.0,"Azul", 18,"Teto solar", "automático"];
print_r($carro);
echo "<br>";

list($nome, $motor, $cor, $ano_fabricacao, $acessorios, $cambio) = $carro;

echo "Modelo: $nome<br> ";
printf("Motor: %.1f", $motor);
echo "<br>";
echo "Cor: $cor <br> ";
echo "Ano: $ano_fabricacao<br> ";
echo "Acessório: $acessorios<br> ";
echo "Cambio: $cambio<br> ";

?>
