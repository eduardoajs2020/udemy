<?php

// array associativo

$funcionario =[

  'id' => $matricula,
  'foto' => $foto,
   'nome do empregado' => $nome,
   'nome da mae' => $filiacao_mae,
   'nome do pai' => $filiacao_pai,
   'data de nascimento' => $nascimento,
   'naturalidade' => $naturalidade,
   'nacionalidade' => $nacionalidade,
   'sexo' => $sexo,
   'estado civil' => $estado_civil,
   'escolaridade' => $escolaridade,
   'data da admissão' => $admissao,
   'Data da demissão' => $demissao,
   'Cargo' => $cargo,
   'Funcao' => $funcao,
   'cbo'=> $cbo,
   'categoria' => $categoria,
   'horario de trabalho' => $horario,
   'salario' => $salario,
   'rg' => $rg,
   'pis' => $pis,
   'cpf' => $cpf,
   'Ctps' => $ctps,
   'serie' => $serie,
   'titulo de eleitor' => $titulo_eleitor,
   'Endereço' => $endereco,
   'complemento' => $complemento,
   'Bairro' => $bairro,
   'Cidade' => $cidade,
   'Estado' => $estado,
   'cep' => $cep,
   'Telefone' => $telefone,
   'Celular' => $celular,
   'Email' => $email,
   'banco' => $banco,
   'agencia' => $conta_agencia,
   'conta' => $conta_conta,
   'pcd' => $pcd

];


$chaves = array_keys($funcionario);

print_r($chaves);
echo "<br>";

$valores = array_values($funcionario);

print_r($valores);
echo "<br>";

//Podemos converter também os dados do array em list, passando variável por variável.
/*$query = sprintf("insert into table (id_empresa, empresa, id_filial, filial, data, hora) values (%d, '%s', %d, '%s', '%s', '%s', $arr_dados[0], $arr_dados[1], $arr_dados[2], $arr_dados[3], $arr_dados[4], $arr_dados[5]");
mysqli_query($conn, $query);*/

?>
