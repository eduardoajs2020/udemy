<?php

$arr =[
  'Matheus' => 29,
  'Pedro' => 18,
  'Joaquim' => 14,
  'Maria' => 12
];

asort($arr);

Print_r($arr);
echo"<br>";


$arr2 =[
  'Matheus' => 12,
  'Pedro' => 44,
  'Joaquim' => 14,
  'Maria' => 32
];

arsort($arr2);

Print_r($arr2);
echo"<br>";

ksort($arr2);

Print_r($arr2);
echo"<br>";



?>
