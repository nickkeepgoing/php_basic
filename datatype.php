<?php
//simple datatype
$price = 60;
$score = 67.5;

$name = "Nick Kitsanon";
$isvalid = false;

echo $name."<br>";
echo "price = ".$price."<br>";
echo "score = ".$score."<br>";
$newprice = $price + 100;
echo "new price = ".$newprice;


echo "<hr>";
// gettype and 
echo gettype($name)."<br>";
echo gettype($isvalid)."<br>";

echo "before = ".gettype($score)."<br>";

echo "<hr>";

settype($score, "integer");

echo "after = ".$score."<br>";



?>