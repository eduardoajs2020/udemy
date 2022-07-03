<?php

$a = "5"*12;

echo $a;
echo "<br>";

 /*if(is_float ($a))
 {
   echo "É float";
 }
else
{
  echo "Pode ser string";
}*/

echo gettype($a);
echo "<br>";
echo gettype([]);
echo "<br>";
echo gettype(1.2);
echo "<br>";
echo gettype("casa");


?>
