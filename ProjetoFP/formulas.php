<?php


function calcula_inss()
{
  if ($salario <= 1212.00)
  {
    $inss = $salario*7.5/100;
  }
    if ($salario <= 2089.60)
  {
    $inss = $salario*9/100;
  }
    if ($salario <= 3134.40)
  {
    $inss = $salario*12/100;
  }
    if ($salario <= 6104.06)
  {
    $inss = $salario*14/100;
  }
    else
  {
    $inss = $salario*14.5/100;
  }
}


?>
