<?php

$usuario = $_POST['usuario'];

$contrausuario = 'teste';

if($usuario == $contrausuario){

	 "Usuário OK<br>";
}

else{
	echo "Usuário inválido<br>";
}


$senha = $_POST['senha'];

$contrasenha = 'teste1234';

if($senha == $contrasenha){

	 "Senha correta<br>";
}

else{
	echo "Senha inválida<br>";
}

if(($usuario == $contrausuario)and($senha == $contrasenha)){
  require_once("criptomoedas.html");
}

?>
