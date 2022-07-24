<?php
// adicionando valores

$arr = [];
print_r($arr);
echo "<br>";

$arr[0] = 10;
print_r($arr);
echo "<br>";

$arr[1] = "Teste";
print_r($arr);
echo "<br>";

$arr[2] = "Master";
print_r($arr);
echo "<br>";

$arr[25] = "Saltado na memoria";
print_r($arr);
echo "<br>";

// modificando valores

$arr[0] += 35;
print_r($arr);
echo "<br>";

$arr[25] = "Sem memória";
print_r($arr);
echo "<br>";

//Array associativo

$arrAssoc = [];
print_r($arrAssoc);
echo "<br>";

$arrAssoc["Carro"] = "BMW";
print_r($arrAssoc);
echo "<br>";

$arrAssoc["Avião"] = "Boeing";
print_r($arrAssoc);
echo "<br>";

$arrAssoc["Carro"] = "Ferrari";
print_r($arrAssoc);
echo "<br>";
?>
