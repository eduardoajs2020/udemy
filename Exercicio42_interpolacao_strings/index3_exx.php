<?php

$arr = ["casa"=>5,"carro"=>10, "sofa" =>20, "cafeteira" =>30];

function recebe($arr){
   $arr_itens_caros = [];

   foreach($arr as $item => $preco){
     if($preco > 10){
       array_push($arr_itens_caros, $item);
     }
   }
return $arr_itens_caros;
}
$novo_arr= recebe($arr);

print_r($novo_arr);


?>
