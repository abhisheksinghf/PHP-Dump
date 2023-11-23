<?php

$fptr = fopen("data.txt","r");
// echo $fptr;
// echo var_dump($fptr);
if (!$fptr) {
    die("Unable to open file!!");
}
echo "<br>";
// else
    // die("Open Success");
// $content = fread($fptr,5);
$content = fread($fptr,filesize("data.txt"));
fclose($fptr);

echo $content;
// echo filesize("data.txt"); returns size of file (character count)

?>