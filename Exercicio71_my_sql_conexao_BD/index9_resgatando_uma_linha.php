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

$id=10;


$stmt =$conn->prepare("SELECT * FROM itens WHERE id = ?");

$stmt->bind_param("i", $id); //s=string, i=integer, d=double

$stmt-> execute();

$result= $stmt->get_result();

$item = $result->fetch_row();

print_r($item);

$conn->close();
