<?php
$uname = $_POST['n'];
$payment = $_POST['pay'];
$b = $_POST['b'];

$total = 0;
$tax = 0;
foreach($b as $v)
{
    $total = $total+$v+$v*0.135;
}
echo "<h2>Bill Details</h2>";
echo "Username : ".$uname."<br>";
echo "Total Bill : ".$total."<br>";
echo "Payment : ".$payment."<br>";
?>