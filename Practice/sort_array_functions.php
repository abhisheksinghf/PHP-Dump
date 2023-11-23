<?php
// $names = array(0=>"Abhi",1=>"Anish",2=>"Ladoo",3=>"Omkar",4=>"Rahul",5=>"Angel");
// $k = array_keys($names);
// foreach ($names as $key) {
//     echo "=>".$key."<br>";
// }
$pantry= 
array(0=>"tomatoes",3=>"oranges",2=>"bananas",4=>"potatoes",1=>"bread",5=>"apples"); 
sort($pantry); 
// while(list($key,$value)=each($pantry)) 
//  echo $key." ".$value."<br/>"; 
function traverse($pantry)
{
    foreach($pantry as $p)
    {
        echo $p."  ";
    }
}
traverse($pantry);
rsort($pantry);
echo "<br>";
traverse($pantry);
asort($pantry);
echo "<br>";
traverse($pantry);
arsort($pantry);
echo "<br>";
traverse($pantry);
ksort($pantry);
echo "<br>";
traverse($pantry);
krsort($pantry);
echo "<br>";
traverse($pantry);

?>