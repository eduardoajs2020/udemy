<?php
include 'formulas.php';

//$empresa = ' XXX TESTE DE FOLHA LTDA  CNPJ: 00.000.000/0001-00';
$empresa = $_POST['empresa'];
$cnpj = $_POST['cnpj'];
$empregado = $_POST['funcionario'];
$salario = $_POST['salario'];
$comissao = 0;
$horas_trabalhadas = [];
$format_number1 = round($salario, 2);

//$inss = 0.0;
//$inss = calcula_inss();

$inss = $salario*9/100;
$v_transporte = $salario*6/100;
$vlr_liquido = ($salario - $inss)-$v_transporte;
$fgts = $salario*8/100;

$format_inss = round($inss, 2);
$format_number3 = round($vls_liquido, 2);
$format_number4 = round($v_transporte, 2);

$proventos = [$salario, $comissao];
$descontos = [$inss, $v_transporte];



echo "_______________________________DEMONSTRATIVO DE PAGAMENTO MENSAL _______________________________________________<br>";
echo "==========================================================================================================<br>";
echo "* EMPRESA: ".$empresa." CNPJ: ".$cnpj."<br>";
echo "*<br>";
echo "* EMPREGADO: ".$empregado." <br>";
echo "==========================================================================================================<br>";
echo "==========================================================================================================<br>";
echo "* SALARIO ...........................................".$salario. ",00<br>";
echo "*<br>";
echo "* INSS ....................................................................................................................................................................................................".$inss.",00<br>";
echo "*<br>";
echo "* VALE TRANSPORTE ........................................................................................................................................................................".$v_transporte.",00<br>";
echo "*<br>";
echo "*<br>";
echo "*<br>";
echo "*<br>";
echo "*<br>";
echo "*<br>";
echo "*<br>";
echo "*<br>";
echo "*<br>";
echo "*<br>";
echo "*<br>";
echo "*<br>";
echo "*<br>";
echo "*<br>";
echo "*<br>";
echo "==========================================================================================================<br>";
echo "*<br>";
echo "*>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>LIQUIDO: ".$vlr_liquido.",00 <<<<<<<<<br>";
echo "*<br>";
echo "==========================================================================================================<br>";
echo "*FGTS A RECOLHER:".$fgts.",00<br>";



?>
