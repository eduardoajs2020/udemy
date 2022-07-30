<?php

$cadastro_empresa =[

  'id' => $codigo,
  'Nome empresa' => $empresa,
  'numero cnpj' => $cnpj,
  'filial' => $cnpj_filial,
  'departamento' => $departamento,
  'cnae fiscal' => $cnae,
  'endereço' => $endereco_empresa,
  'complemento' => $complemento,
  'bairro' => $bairro_empresa,
  'Cidade' => $cidade_empresa,
  'Pais' => $pais_empresa,
  'Cep' => $cep_empresa,
  'sat' => $sat
 ];

 /*for($i =0; $i < count($cadastro_empresa); $i++){
   print_r($cadastro_empresa);
   echo "<br>";
 }*/

/*<?php
$query = sprintf("insert into table (id_empresa, empresa, id_filial, filial, data, hora) values (%d, '%s', %d, '%s', '%s', '%s', $arr_dados[0], $arr_dados[1], $arr_dados[2], $arr_dados[3], $arr_dados[4], $arr_dados[5]");
mysqli_query($conn, $query);
?>*/
?>
