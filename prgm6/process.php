<?php 
$u = $_POST["un"];
$pmt = $_POST["pay"];
$b = $_POST["b"];

echo "<h3>Username : $u</h3><br>";
$total = 0;
foreach ($b as $v ) {
    $total = $total+$v+$v*0.135;
}
for($i=0;$i<4;$i++)
{
    if($b)
    
}
echo "<h3>Total Cost : $total</h3><br>";
echo "<h3>Payment Mode : $pmt</h3>";
?> 