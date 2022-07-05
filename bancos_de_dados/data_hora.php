<?php

$dia = date("d", time());
$mes = date("M", time());
$ano = date("Y", time());
$hora = date("H", time());

echo "******** Hoje é: ".$dia. "/". $mes. "/". $ano." ********<br>".
"=============================<br>". "  Agora estamos por volta das:".$hora. " horas.<br>"."=============================<br>";

?>
