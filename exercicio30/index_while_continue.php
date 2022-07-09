<?php
 $a = 10;

 while ($a > 0){


 if($a == 5 || $a == 7){
   echo "Pulou o Loop $a <br>";
    $a--;
   continue;
 }
 if($a ==2){
   echo "Terminando o LOOP Break $a <br>";
   break;
 }
  echo "Executando o Loop $a <br>";
   $a--;
 }





?>
