<?php
$uname = $_POST['n'];
$phone = $_POST['num'];

$check = preg_match("/[0-9]{3}-[0-9]{3}-[0-9]{4}$/",$phone);

if($check)
echo "Phone number Correct!";

else
echo "Phone number Incorrect!";
?>