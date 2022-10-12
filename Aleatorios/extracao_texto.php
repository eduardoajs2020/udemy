<!DOCTYPE html>
<html>
  <head>
    <meta charset=UTF-8>
    <title>Script para testes de extração de arquivo</title>
  </head>
  <body>
    <?php

    $arquivo = fopen("C:\PROJETOS DEV\UTILITARIOS\Primeiro texto.txt", "r");
    if($arquivo == false) die("não foi possível abrir o arquivo.");
    while(true){
      $linha = fgets($arquivo);
      if($linha == null) break;
      echo $linha;
    }
    fclose($arquivo);
    //fgets("C:\PROJETOS DEV\UTILITARIOS\Primeiro texto.txt");
    echo "<br>";
      echo "<br>";
        echo "<br>";

    $a = file_get_contents("C:\PROJETOS DEV\UTILITARIOS\problemas_a_resolver.txt"); //Abre e guarda arquivo em uma variável

    print_r($a);


    $gerado = fopen("C:\PROJETOS DEV\UTILITARIOS/teste_scr.txt", "w");//Cria arquivo vazio no local expecificado
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
