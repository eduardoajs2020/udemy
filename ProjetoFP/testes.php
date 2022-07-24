<?php

if ($salario < 1000.00){
  return $inss = $salario * 7.65/100;
}
else if ($salario < 2000.00){
  return $inss = $salario * 9/100;
}




?>
