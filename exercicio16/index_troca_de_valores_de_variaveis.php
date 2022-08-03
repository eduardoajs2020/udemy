<?php

$x=10;

$y= &$x;

echo $x;
echo "<br>";
echo $y;
echo "<br>";

$y=20;

echo $x;
echo "<br>";
echo $y;
echo "<br>";

$y="joinha";

echo $x;
echo "<br>";
echo $y;
echo "<br>";


?>
