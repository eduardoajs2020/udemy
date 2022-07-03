<?php

$a = 10;
$b = 20;

$c = "casa";
$d = "vaso";

$x = $a*2;

if (is_int($a))
{
  if($x)
  {
    if($x > 100)
    {
    echo $x." É maior que 100";
    }
    else
    {
      echo $x. " É menor que 100";
    }
  }
}
else
{
  echo " não é número";
}


?>
