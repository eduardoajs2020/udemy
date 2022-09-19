<?php

$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "10205618";


$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

//Querys

$stmt = $conn->prepare("INSERT INTO itens(nome, descricao) VALUES (:nome,:descricao)");

$nome = "Suporte monitor";
$descricao= "O suporte ainda está novo e na caixa.";

$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricao);

$stmt->execute();

?>
