<?php

$dia = date("d", time());
$mes = date("m", time());
$ano = date("Y", time());
$hora = date("H", time());

echo "Hoje são: ".$dia. "/". $mes. "/". $ano."<br>". "  Agora estamos por volta das:".$hora. " horas.";

?>
