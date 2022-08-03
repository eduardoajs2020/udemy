<?php

$a = 10;
$b = 5;
$c = 12;
$d = 12;


if($a > $b && $c == $d)
{
  echo "entrou if 1<br>";
}

if($b <= $a && $c >= $d)
{
  echo "entrou if 2<br>";
}
if($b === $a && $c > $d)
{
  echo "entrou if 3<br>";
}

if(($b <= $a && $c >=  $d) && $a > $b)
{
  echo "entrou if 4<br>";
}
