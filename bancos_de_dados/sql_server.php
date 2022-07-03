<?php
//Dados do banco

$dbhost   = "hostbanco";    #Nome do host
$db       = "nomebanco";    #Nome do nosso banco de dados
$user     = "nomeusuario";  #Nome do usuário
$password = "senhabase";    #Senha do usuário


// Dados da tabela
$tabela   = "nometabela";   #Nome da tabela
$campo1   = "campo1tabela"; #Nome do primeiro campo da tabela
$campo2   = "campo2tabela"; #Nome do proximo campo da tabela


@mssql_connect($dbhost,$user,$password) or die("Não foi possível estabelecer uma conexão com o servidor!");
@mssql_select_db("$db") or die("O banco de dados não foi selecionado!");

$instrucaoSQL = "SELECT $campo1, $campo2 FROM $tabela ORDER BY $campo1";
$consulta = mssql_query($istrucaoSQL);
$numRegistros = mssql_num_rows($consulta);

echo "esta tabela contem $numRegistros registros!\n<br>\n";

if ($numRegistro !=0){
  while ($cadaLinha = mssql_fetch_array($consulta)){
          echo "$cadaLinha[$campo1] - $cadaLinha[Scampo2]\n<br>\n";
  }
}






?>
