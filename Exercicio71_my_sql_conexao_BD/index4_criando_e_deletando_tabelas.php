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

//criando tabelas
//$q = "CREATE TABLE teste(nome VARCHAR(100), sobrenome VARCHAR(100))";

//deletando tabelas
$q = "DROP TABLE teste";

$conn->query($q);

$conn->close();
