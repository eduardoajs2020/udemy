<?php

//Função array_key_exists
$arr = [
  'nome' => 'Matheus',
  'idade' => 29
];

if(array_key_exists("nome", $arr)){
  echo "A chave existe<br>";
}
else{
  echo "A chave não existe<br>";
}

if(array_key_exists("profissao", $arr)){
  echo "A chave existe<br>";
}
else{
  echo "A chave não existe<br>";
}

// Função isset

if(isset($arr['nome'])){
echo "A chave existe ISSET<br>";
}
else{
echo "A chave não existe ISSET<br>";
}


if(isset($arr['teste'])){
echo "A chave existe ISSET<br>";
}
else{
echo "A chave não existe ISSET<br>";
}

// isset para variavel
if(isset($x)){
echo "A chave existe ISSET VAR<br>";
}
else{
echo "A chave não existe ISSET VAR<br>";
}
?>
