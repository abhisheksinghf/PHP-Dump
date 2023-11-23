<?php
echo "<h3>Array Functions</h3>";
echo "<br>";
$a = array(31,41,55,42,4,1,4,51,9,12,33);
unset($a[1]);
echo $a[2];
echo "<br>";
$keys = array_keys($a);
$val =  array_values($a);
// foreach($keys as $k)
// {
//     echo $k."<br>";
// }
echo "<br>";
// foreach($val as $v)
// {
//     echo $v."<br>";
// }
echo "<br>";
echo "<br>";
if(array_key_exists(3,$a))
echo "exists";

else
echo "Not Exists!";
echo "<br>";
echo "<br>";
$b = 32;
if(is_array($a))
echo "Yes its an array!!";

else
echo "Not an Array!!";
echo "<br>";
echo "<br>";

if(in_array(33,$a))
echo "Present";
else
echo "Not Present";
echo "<br>";
echo "<br>";
echo sizeof($a);
echo "<br>";
//Explode and Implode
$str1 = "Welcome to My Youtube Channel YourCodePartner";
$strArray = explode(" ",$str1);
foreach($strArray as $s)
echo $s." ";
echo "<br>";
echo "<br>";
$str2 = array("Welcome","To","My","Youtube","Channel","Yourcodepartner");
$strImplode = implode("-",$str2);
echo "<br>";
echo $strImplode;
?>