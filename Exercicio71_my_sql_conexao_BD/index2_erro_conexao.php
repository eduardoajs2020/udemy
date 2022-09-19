<?php

$host = "localhost";
$user = "root";
$pass = "10205618";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn-> connect_errno){
  echo "Erro na conexão!<br>";
  echo "Erro: ".$conn->connect_error();
}

?>
