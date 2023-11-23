<?php
$count = file_get_contents("count.txt");
$cnt = explode("=",$count);
$cnt = $cnt[1]+1;
$fp = fopen("count.txt","w+");
fwrite($fp,"count=".$cnt);
echo "The total number of visiters are $cnt";
fclose($fp);
?>
<a href="greeting.php">"Click Here for Greeting"</a>