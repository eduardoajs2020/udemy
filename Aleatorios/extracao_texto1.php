<!DOCTYPE html>
<html>
  <head>
    <meta charset=UTF-8>
    <title>Script para testes de extração de arquivo</title>
  </head>
  <body>
    <?php

    $a = file_get_contents("C:\PROJETOS DEV\UTILITARIOS\problemas_a_resolver.txt"); //Abre e guarda arquivo em uma variável $a

    print_r($a);


    $gerado = fopen("C:\PROJETOS DEV\UTILITARIOS/teste2_scr.txt", "w");//Cria arquivo vazio no local expecificado
    if($gerado == false)die('Não foi possível criar o arquivo.');
     fwrite($gerado, $a); // escreve o conteúdo da variavel $a no arquivo $gerado.
     fclose($gerado);

    echo "<br>";
      echo "<br>";
        echo "<br>";
        //print_r($gerado);

    ?>
  </body>
</html>
