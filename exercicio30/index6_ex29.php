<?php

$arr = [10,20, 30, 40, 50, 60, 70, 80, 90, 100];

$i=0;

while ($i < count($arr))
{
  $numeroatual = $arr[$i];

if ($numeroatual == 30 || $numeroatual == 40)
{
      $i++;
        continue;
}
  echo "Elemento: $numeroatual <br>";
      $i ++ ;
}

?>
