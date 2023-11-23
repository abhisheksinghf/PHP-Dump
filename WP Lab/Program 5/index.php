<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count the Visiters</title>
</head>
<body>
    <?php
        $data = file_get_contents("data.txt");
        $exp = explode("=",$data);
        $count = $exp[1] + 1;
        $fp = fopen("data.txt","w+");
        fwrite($fp,"count = ".$count);
        echo "You are Visiter number ".$count;
        fclose($fp);
    ?>
    <a href="greeting.php"><br>Click Here for Greeting!!</a>
</body>
</html>