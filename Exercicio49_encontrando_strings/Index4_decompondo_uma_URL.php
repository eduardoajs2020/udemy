<?php
// função parse_url: decompoe uma url e retorna um array com: protocolo, host, parametros.

$url = "https://www.google.com";
$arrayUrl = parse_url($url);

print_r($arrayUrl);
echo "<br>";

echo $arrayUrl["host"];
echo "<br>";

echo $arrayUrl["scheme"];
echo "<br>";


$url2 = "http://www.horadecodar.com.br/?busca=php";
$arrayUrl2 = parse_url($url2);

print_r($arrayUrl2);
echo "<br>";


$url3 = "http://www.horadecodar.com.br/usuarios/matheusbatisti?id=12&nome=Matheus";
$arrayUrl3 = parse_url($url3);

print_r($arrayUrl3);
echo "<br>";


$url4 = "https://www.otempo.com.br/cidades/vila-barraginha-pm-que-matou-homem-tem-passagens-por-corrupcao-e-lesao-1.2704460";
$arrayUrl4 = parse_url($url4);

print_r($arrayUrl4);
echo "<br>";

?>
