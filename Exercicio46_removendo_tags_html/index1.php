<?php

$texto_html = "<p>Testando parágrafo.</p><div>Uma div</div><p>Outro parágrafo</p>";

echo $texto_html;

$salvar_texto_banco = strip_tags($texto_html);

echo $salvar_texto_banco;

?>
