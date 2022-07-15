<?
include "script.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>Cadastro de Funcionário</title>
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <h1>Calculo da Folha de Pagamento</h1>
<form action="script.php" method="post">

  <h2>Nome da empresa: <input type="text" name="empresa"/></h2>
  <h2>CNPJ: <input type="text" name="cnpj"/></h2>
    <h2>Nome do Funcionário: <input type="text" name="funcionario"/></h2>
    <h2>Salário: <input type="text" name="salario"/></h2>
    <!--<h2>Mês da folha: <input type="text" name="Mês da folha"/></h2> -->
      <h3><input type="Submit" value="Calcular pagamento"/></h3>
      
<!-- Conteúdo -->

  <?php

  $dia = date("d", time());
  $mes = date("M", time());
  $ano = date("Y", time());
  $hora = date("H", time());
  echo "=============================<br>";
  echo "******** Hoje é: ".$dia. "/". $mes. "/". $ano." ********<br>".
  "=============================<br>";

  ?>

</body>

</html>
