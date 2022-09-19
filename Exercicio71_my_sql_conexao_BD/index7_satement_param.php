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

$nome="Suporte de microfone";
$descricao= "O suporte é novo e foi fabricado na China";


$stmt =$conn->prepare("INSERT INTO itens(nome, descricao) VALUES(?,?)");

$stmt->bind_param("ss", $nome, $descricao); //s=string, i=integer, d=double

$stmt-> execute();

$conn->close();
