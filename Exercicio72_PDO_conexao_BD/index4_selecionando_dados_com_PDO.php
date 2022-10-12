<?php

$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "10205618";


$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

//Querys
$id = 5;


$stmt = $conn->prepare("SELECT * FROM itens WHERE id > :id");


$stmt->bindParam(":id", $id);

$stmt->execute();

$data = $stmt->fetch(PDO::FETCH_ASSOC); //Exibe um item

print_r($data);
echo "<br><br>";

$itens = $stmt->fetchAll(PDO::FETCH_ASSOC); //Exibe vários itens.

print_r($itens);

?>
