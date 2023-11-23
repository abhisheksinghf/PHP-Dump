<?php
$fptr = fopen("data2.txt","w");
$data = "My name is Abhisheksingh !! And i am a Computer science student !! I love
to do coding and programming!";
fwrite($fptr,$data);
echo "<br>";
echo "<br>";
$fptr2 = fopen("data2.txt","r");
$a = fread($fptr2,filesize("data2.txt"));
echo $a;
fclose($fptr2);
fclose($fptr);
$fptr = fopen("data3.txt","a");
fwrite($fptr,"Hello i am abhi   ");
fwrite($fptr,"Hello i am programmer");

fclose($fptr);//close after use
?>
