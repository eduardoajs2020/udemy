<?php
#Array associativo
#PHP não tem limites no tipo de dado informado no array

$pessoa=['nome'=> 'Eduardo',
        'idade'=> 43,
        'altura'=> 1.70,
        'cor'=> 'pardo',];

echo $pessoa['nome'];
echo"<br>";

echo $pessoa['idade'];
echo"<br>";

echo $pessoa['altura'];
echo"<br>";

echo $pessoa['cor'];
echo"<br>";

if($pessoa['idade'] >=18){
  echo "Maior de idade ";
  echo"<br>";
}
else{
  echo "Menor de idade";
  echo"<br>";
}

print_r($pessoa);
echo"<br>";
?>
