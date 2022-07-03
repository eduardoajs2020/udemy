<?php

$teste = "asd";

echo"$teste Global 1<br>";

if (5>2)
{
  $teste = "dsa";

  echo"$teste if <br>";
}
echo"$teste Global 2<br>";

function funcao()
{
  $teste = "xxxxx";

  echo"$teste Global 2<br>";
}
funcao();

function testandoGlobal()
{
  global $teste;

  $teste = 2;

  echo "$teste Global função <br>";
}

testandoGlobal();

  echo "$teste Global 3 <br>";
?>
