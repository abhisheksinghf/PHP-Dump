<?php
$arr = array();
$arr[0] = "Good Morning!";
$arr[1] = "Good Night";
$arr[2] = "Good Afternoon";
$arr[3] = "Good Evening!";

$r = mt_rand(0,3);

echo "$arr[$r]";
?>