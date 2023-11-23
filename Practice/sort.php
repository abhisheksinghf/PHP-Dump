<?php
$fruits = array(0=>"Mango",1=>"Apple",2=>"Orange",3=>"Pinapple",4=>"Guava");
sort($fruits);

while(list($key,$value) = each($fruits))
{
    echo $key."  ".$value."<br/>";
}
?>