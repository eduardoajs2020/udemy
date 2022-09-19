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

//Query SQL
$q = "SELECT * FROM itens";

$result = $conn->query($q);

$conn->close();

//Exibe um resultado
$item = $result->fetch_assoc();

print_r($item);
echo "<br>";
//Exibe vários resultados

$itens = $result->fetch_all();

print_r($itens);
