<?php
//Conexão
$host = "localhost";
$user = "root";
$pass = "10205618";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

//Mensagem de erro de conexão
if ($conn-> connect_errno){
  echo "Erro na conexão!<br>";
  echo "Erro: ".$conn->connect_error();
}

//Querys

$table = "itens";
$nome = "xícara";
$descricao = "É uma xícara usada de cor rosa";

$q = "INSERT INTO $table(nome, descricao) VALUES ('$nome', '$descricao')";

$conn->query($q);

$conn->close();
