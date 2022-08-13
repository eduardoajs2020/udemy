<?php
//mktime recebe os parametros: hora, minuto, segundo, mes, dia e ano.
// ex: $date = mktime(01,18,00,03,12,2000); echo date('d/m/y, $date');
$date = mktime(01,18,00,03,12,2000);
echo date('d/m/Y', $date)."<br>";
echo "<br>";

$dataNascimento = mktime(02,12,33,02,05,1991);
echo $dataNascimento."<br>";
echo"<br>";

$dataNascimentoFormatada = date('d/m/Y', $dataNascimento);
echo $dataNascimentoFormatada."<br>";
echo"<br>";
?>
