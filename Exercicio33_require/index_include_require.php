<?php

require "teste.php";

?>

<p>Arquivo de include</p>

<?php
require "arquivos/funcao.php"; // caso o arquivo não for encontrado, retorna um alerta.

include __DIR__. "/../Exercicio32_include/index.php"; // caso o arquivo não for encontrado, retorna um erro.
?>
