
<?php
$fptr = fopen("data.txt","r");
// echo fgets($fptr);//reads one line from file
// echo fgets($fptr);//reads another/next line from file

while($a = fgetc($fptr))
{
    if($a == "."){
        break;
    }
    else
    echo $a;
}
echo "<br>";
// echo "The End of file has been reached!!";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
//

?>