<?php

$arr =['batata', 'maçã', 'pera','feijão', 'arroz'];

$removidos = array_splice($arr, 2, -1);

print_r($arr);
echo "<br>";

print_r($removidos);
echo "<br>";



?>
