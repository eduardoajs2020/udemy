<?php

$a = 10;
$b = 22;
$c = 12;
$d = 5;


$e = $a - $b / $c * $d;

echo $e;
echo "<br>";
if (is_float($e))
{
  echo "É Float";
}
else
{
  echo "Não é Float";
}


?>
