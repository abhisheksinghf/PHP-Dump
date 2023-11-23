<?php
$arr = array("Abhi","Anish","Kiran","Soyab","Raghu");
echo current($arr);
echo "<br>";
echo next($arr);
echo "<br>";
echo current($arr);
echo "<br>";
echo reset($arr);
echo "<br>";
echo next($arr);
echo "<br>";
echo prev($arr);
echo "<br>";
echo end($arr);
// while(list($key,$val) = each($arr))
// {
//     echo $key."=>".$val."<br>";
//     echo $val."<br>";
// }
// echo each($arr);
echo "<br>";
$fruits = array(
0=>"Mango",
3=>"Apple",
1=>"Orange",
5=>"Watermelon",
4=>"Grapes",
3=>"Guava");
function traverse($fruits){
foreach ($fruits as $v) {
    echo "$v  ";
}
}
traverse($fruits);
echo "<br>";
echo "<br>";
array_push($fruits,"Pinapple");
traverse($fruits);
array_pop($fruits);
echo "<br>";
traverse($fruits);
array_pop($fruits);
echo "<br>";
traverse($fruits);
?>