<?php

$a=0;

echo "Veja abaixo algumas operações com While: <br>";
echo "===================================<br>";

while ($a < 10){
  $a++;
  echo "5 x ".$a." = ".($a*5). "<br>";
}

$b=0;

echo "==========<br>";
while ($b < 10){

  $b +=2;
  echo "5 x ".$b." = ".($b*5). "<br>";
}

echo "==========<br>";
$c=10;

while ($c > 0){

  $c --;
  echo "5 x ".$c." = ".($c*5)."<br>";
}

echo "==========<br>";
$c=10;

while ($c > 0){

  if($c %2 !=0)
  {
    echo  $c." É impar! <br>";
  }
$c--;
}
echo "==========<br>";
?>
