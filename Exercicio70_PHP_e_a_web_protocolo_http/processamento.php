<?php
if(isset($_GET['nome'])){
$nome= $_GET['nome'];
$idade= $_GET['idade'];
}
else{
  $nome = "Padrão";
  $idade = "Padrão";
}
?>
<h1>O seu nome é <?=$nome?> e sua idade é <?=$idade?> anos! <h1/>
