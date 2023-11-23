<?php
$var1;
$var2=1;
$var3=1;

echo "Printing Using For Loop <br>";

for($var1=1;$var1<10;$var1++)
{
    echo "Repeating using For Loop = ".$var1."<br>";
}
echo "<br>";
echo "Printing Using While Loop <br>";
while($var2<10)
{
    echo "Repeating using While Loop = ".$var2."<br>";
    $var2++;
}
echo "<br>";
echo "Printing Using Do-While Loop <br>";
do{
    echo "Repeatig Using Do-While Loop = ".$var3."<br>";
    $var3++;
}while($var3<10);
?>