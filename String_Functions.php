<?php
$str1 = "My Name is Abhisheksingh";
$str2 = strlen($str1);
$bordersize = "4";
echo "$str2";
$str2 = strtoupper($str1);
echo "$str2";
$str2 = strtolower($str1);
printf("<br> Hii %d",$str2);
echo "<br>";
echo "<br>";
echo "<br>";
switch ($bordersize) {
    case "0": echo "<table>";
    break;
    case "1": echo "<table border = '1'>";
    break;
    case "4": echo "<table border = '4'>";
    break;
    case "8": echo "<table border = '8'>";
    break;
    default: echo "Error-invalid value: $bordersize <br />";
   }
?>