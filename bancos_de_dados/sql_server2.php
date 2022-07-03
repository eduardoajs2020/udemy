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


$conninfo = array("Database" => $db, "UID" => $user, "PWD" => $password);
$conn = sqlsrv_connect($dbhost, $conninfo);

$instrucaoSQL = "SELECT $campo1, $campo2 FROM $tabela ORDER BY $campo1";

$params = array();
$options = array("Scrollable" => SQLSVR_CURSOR_KEYSET);
$consulta = sql_srv_query($conn, $instrucaoSQL, $params, $options);
$numRegistros = sqlsrv_num_rows($consulta);

echo "Esta tabela contém $numRegistros registros!\n<hr>\n";

if($numRegistros !=0){
      while ($cadaLinha = sqlsrv_fetch_array($consulta, SQLSRV_FETCH_ASSOC)){
              echo "$cadaLinha[$campo1] - $cadaLinha[$campo2]\n<br>\n";
      }
}



?>
