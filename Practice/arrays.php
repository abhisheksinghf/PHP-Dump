<?php
//1 way to create array
$arr = array();
$arr[0] = 1;
$arr[1] = 5;
$arr[2] = 2;
$arr[3] = 3;
$arr[4] = 4;
// echo "$arr[3]";
echo "<br>";
echo "<br>";
echo "<br>";

$arrayval = array(1,2,4,5,6,7,89,6);
// echo "$arrayval[5]";
foreach($arrayval as $v)
{
    echo $v."<br>";
}
echo "<br>";
echo "<br>";
//associative array
$age = array("Abhi"=>18,"Arun"=>19,"Satish"=>22,"Abdul"=>30);
// foreach($age as $v)
// {
    //     echo $v."<br>";
    // }
echo "$age[Arun]";
echo "<br>";
echo "<br>";
$num = array(3,1,21,4);
list($a,$b,$c,$d) = $num;
echo "<br>";
echo "<br>";
echo $a."<br>";
echo $b."<br>";
echo $c."<br>";
echo $d."<br>";
echo "<br>";
echo "<br>";
unset($num[2]);
// echo $num[2]."<br>";  //error cozz its unset
$key = array_keys($num);
echo "$key[2]";
$key = array_values($num);
echo "$key[1]";
?>