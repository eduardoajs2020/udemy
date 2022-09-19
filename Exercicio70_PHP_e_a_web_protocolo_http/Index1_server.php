<?php
print_r($_SERVER);
echo "<br>";

echo $_SERVER['MYSQL_NOME']."<br>";
if($_SERVER['SERVER_NAME']== 'localhost'){
  echo "Esta acessando o localhost";
}
?>
