<!DOCTYPE html>
<html>
<head>
    <title>Count the Visiters</title>
</head>
<body>
<?php
$count = file_get_contents("count.txt");
$cnt = explode("=",$count);
$cnt1 = $cnt[1] + 1;
$fp = fopen("count.txt","w+");
fwrite($fp,"count=".$cnt1);
echo "Total Visiters : ".$cnt1;
?>
</body>
<a href = "greeting.php">Click here for greeting</a>
</html>