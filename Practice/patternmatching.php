<?php
if(preg_match("/Abhisheksingh/","Abhisheksingh_Fulae"))
echo "Found";
else
echo "Not found";
$a = "Abhishek : Anish : Arun : Arjun";
$names = preg_split("/:/",$a);
echo $names[0];
echo $names[1];
mysqli_oc
echo $names[2];
echo $names[3];
?>