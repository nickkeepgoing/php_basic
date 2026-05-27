<?php

$price = 100.18;
$delivery = 50.99;

$total = $price + $delivery;
echo $total."<br>";

echo "before = ".gettype($total)."<br>";
echo "total ".$total."<br>";

// type casting
$total = (integer)$total;

echo "after = ".gettype($total)."<br>";
echo "total ".$total."<br>";

//double = ทศนิยม


//string to double
echo "<hr>";
$sum = "400.89";
echo "before = ".gettype($sum)."<br>";
echo $sum."<br>";
$sum= (double)$sum;

echo "after = ".gettype($sum)."<br>";
echo $sum."<br>";

//double to integer

echo "<hr>";
$a= (integer)10.9;
$b=20.5;
$c= $a+$b;

echo $c."<br>";
echo gettype($c)."<br>";


?>