<?php
$total1 = null;
$total2 = "";
$total3 = 0;
$total = "Nick";

echo "total1 = ".is_null($total1)."<br>";
echo "total2 = ".is_null($total2)."<br>";
echo "total3 = ".is_null($total3)."<br>";
echo "total  = ".is_null($total)."<br>";

unset($total1); // ลบตัวแฟร

echo "<hr>";
echo "total1 = ".$total1."<br>";
echo "total2 = ".$total2."<br>";
echo "total3 = ".$total3."<br>";
echo "total  = ".$total."<br>";


echo "<hr>";
echo "vardump: ";
echo "<br>";
var_dump($total2);
echo "<br>";
var_dump($total3);
echo "<br>";
var_dump($total);


?>