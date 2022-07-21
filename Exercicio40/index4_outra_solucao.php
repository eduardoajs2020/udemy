<?php

$lista=["leite", "queijo", "manteiga, ovo, arroz, feijão"];

function lista_string($arr){
  $str = "Você levou:";

  for($i =0; $i < count($arr); $i++){

    if($i + 1  == count($arr)){
      $str = "$arr[$i].";
    }
      else{
        $str = "$arr[$i], ";
      }
    }
    return $str;
  }
 print_r (lista_string($lista));



?>
