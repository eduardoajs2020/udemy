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


$stmt =$conn->prepare("UPDATE itens SET nome =?, descricao=? WHERE id = ?");

$nome="Sofá";
$descricao="Sofá semi novo, com madeira de demolição";

$stmt->bind_param("ssi", $nome, $descricao, $id); //s=string, i=integer, d=double

$stmt-> execute();

if($stmt->error){
  echo "Erro: ".$stmt->error;
}

$conn->close();
