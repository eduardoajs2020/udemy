<!DOCTYPE>
<html>
<head>
  <meta charset="UTF-8"/>
  <title>Valida Senha</title>
      <meta name="author" content="">
        <meta name="description" content="">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
  <div>
    <form action="lendo_senhas.php" method="POST">
      <div>
        Usuário: <input type="text" name="usuario" value="usuario"><br><br>
      </div>
      <div>
        Senha: <input type="password" name="senha" value="senha" ><br><br>
      </div>
    <input type="submit" value="Login" method="POST">
  <?= require_once("lendo_senhas.php")?>
</form>
  </div>
</body>
</html>
