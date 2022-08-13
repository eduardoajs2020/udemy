<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>Cadastro de Funcionário</title>
        <meta name="author" content="">
          <meta name="description" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>
                  .flex{
                      border-radius:5px;
                      max-width: flex;
                      padding: 20px;
                      border: 0px solid white;
                      color: #FFF8DC;
                      display: flex;
                      background-color: #0000FF;
                      align-self:flex;
                      font-family: verdana;
                      font-width:bold;
                      }
                  .item{
                      align-self:flex;
                      max-width: flex;
                      border-radius:5px;
                      background-color: #F0F8FF;
                      display: flex;
                      font-family: verdana;
                      font-size:14;
                      font-width:bold;
                      margin:20px;
                      border: 1px solid blue;
                      color: #00008B;
                      }
                  .shape {
                      shape-outside: circle(50%) margin-box;
                      border: 1px solid blue;
                      border-radius:5px;
                      margin: 20px;
                      color: #00008B;
                      background-color: #F0F8FF;
                      display: center;
                      font-family:verdana;
                      font-style:bold;
                      font-size:12;
                      }
              </style>

  <? require_once "script.php"; ?>

</head>

<body bgcolor="#fafade">

  <h1 class= "flex">Calculo da Folha de Pagamento</h1>

<form action="script.php" method="post">

  <h3 class= "item">Nome da empresa: <input type="text" size="40" name="empresa"/></h3>
    <h3 class= "item">CNPJ: <input type="text" name="cnpj"/></h3>
      <h3 class= "item">Nome do Funcionário: <input type="text" size="40" name="funcionario"/></h3>
        <h3 class= "item">Salário: <input type="number" name="salario"/></h3>
          <h3 class= "item">Mês da folha: <input type="date" name="Mês da folha"/></h3>
            <h3 class= "item">Email: <input type="email" size="40" name="Email"/></h3>
              <h3 class= "item"><input type="Submit" size="40" class="flex" value="Calcular pagamento"/></h3>
<!-- Conteúdo -->
</body>

<footer class= "shape">

    <?php
    date_default_timezone_set('America/Sao_Paulo');

      $dia = date("d", time());
      $mes = date("M", time());
      $ano = date("Y", time());
      $hora = date("H", time());
      echo "========================================================================================<br>";
      echo "*************************************************** Hoje é: ".$dia. "/". $mes. "/". $ano." ********************************************<br>".
      "========================================================================================<br>";
    ?>

</footer>

</html>
