<?php
$nomes= ["Eduardo", "Leonardo", "Maria", "Carlos", "Dina"];

$contador =0;
while($contador < 10){
  echo implode(",<br><br> ",$nomes);

  $contador++ ;
}
echo "<br>=================divisão=================<br>";



 $contador1=0;
 do
{
  print_r ($nomes);
  echo "<br>";
  $contador1 ++;
}while($contador1 <10);
?>
