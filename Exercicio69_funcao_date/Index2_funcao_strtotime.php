<?php
/*strtotime recebe uma string como parametro.
ex: echo date ('d/m/y',strtotime('+2 years')); => 2 anos a mais*/


$cincodias = strtotime("5 days");
echo $cincodias."<br>";
echo "<br>";

$dezdias = strtotime("10 days");
echo $dezdias."<br>";
echo "<br>";


$dataAtualMais5 = date('d/m/Y', $cincodias);
echo $dataAtualMais5."<br>";
echo "<br>";

$dataAtualMais10 = date('d/m/Y', $dezdias);
echo $dataAtualMais10."<br>";
echo "<br>";

$doismeses = strtotime("2 months");
echo $doismeses."<br>";
echo "<br>";

$dataAtualMais2Meses = date('d/m/Y', $doismeses);
echo $dataAtualMais2Meses."<br>";
echo "<br>";


$dozeanos = strtotime("12 years");
echo $dozeanos."<br>";
echo "<br>";

$dataAtualMais12Anos = date('d/m/Y', $dozeanos);
echo $dataAtualMais12Anos."<br>";
echo "<br>";

echo date('d/m/Y', $dozeanos)."<br>";

?>
