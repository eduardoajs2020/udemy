<?php
//sintaxe: function teste(param1, param2){
// codigo  }

function velocidade_maxima($vel){
  if(is_int($vel)){
  echo "O carro atinge a velocidade maxima de $vel km/h <br>";
}else {
  echo "Por favor, passe um número inteiro<br>";
}
}

velocidade_maxima(200);
velocidade_maxima(400);
velocidade_maxima(600);

//Não pode
//velocidade_maxima();
echo "Teste continuando... <br>";
$velocidade = 125;

velocidade_maxima($velocidade);

// o php ignora o parâmetro desnecessário
velocidade_maxima(250, "teste");

velocidade_maxima("teste");


//Mais parãmetros
function descrever_animal($nome, $raca){
  echo"O $nome é da raça $raca<br>";
}

descrever_animal("Bob", "vira lata");
descrever_animal("Shark", "Pastor Alemão");
descrever_animal("Poodle", "Tita");

//poucos parâmetros
//descrever_animal("Bob");
?>
