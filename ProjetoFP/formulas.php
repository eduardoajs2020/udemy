<?php

setlocale(LC_ALL, 'pt_BR');
//Informa Meses do ano


  //Calcula Imposto de Renda

if ($salario < 1903.98)
{
  $imposto_renda = 0;
}
else if ($salario < 2826.65)
{
  $imposto_renda = $salario * 7.5/100 -142.80;
}
else if ($salario < 3751.05)
{
  $imposto_renda = $salario * 15/100 -354.80;
}
else if ($salario < 4664.68)
{
  $imposto_renda = $salario * 22.5/100 -636.13;
}
else{
  $imposto_renda = $salario * 27.5/100 -869.36;
}

//Calcula inss

if ($salario < 1212.00)
{
  $inss = $salario * 7.5/100;
}
else if ($salario < 2089.60)
{
  $inss = $salario * 9/100;
}
else if ($salario < 3134.40)
{
  $inss = $salario * 12/100;
}
else if ($salario < 6104.06)
{
  $inss = $salario * 14/100;
}
else{
  $inss = $salario * 14.5/100;
}

//Calcula vale Transporte

$v_transporte = $salario * 6/100;

//Calcula FGTS

$fgts = $salario * 8/100;


//Calcula valor líquido (insira o parâmetro para provento(+) ou para desconto(-))

$proventos = $salario + $comissao;
$descontos = $inss + $v_transporte + $imposto_renda;

$vlr_liquido = $proventos - $descontos;
