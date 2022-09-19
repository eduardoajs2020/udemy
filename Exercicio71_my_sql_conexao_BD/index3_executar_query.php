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
$sql = "SELECT * FROM itens";

$result = $conn->query($sql);

print_r($result);

$conn->close();
