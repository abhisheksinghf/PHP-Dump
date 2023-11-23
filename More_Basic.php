<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More Basics</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        /* box-sizing: border-box; */
    }
    .container{
        max-width: 80%;
        margin: auto;
        padding: 23px;
        align-items: center;
        background-color: lime;
        color: red;

    }
</style>
<body>
    <div class="container">
        <h1 style="color: blue; text-align:center; background-color:orange">Lets Learn About PHP</h1>
        This is a container
        <p>your party status is here : </p>
        <?php
            $age = 7;
            if($age>18)
            echo "You can Vote for Elections !!";
            elseif ($age==7) {
                echo "You are 7 yrs old !!";
            }
            else
            echo "You cannot Vote !!";
        ?>
        <?php
        $languages = array("Python","C","Java","PHP","JavaScript");
        echo "<br>";
        echo count($languages);
        echo "<br>";
        echo $languages[0];

        //loops
        $a = 0;
        while ($a <= 10) {
            echo "<br>";
            echo "Value of a is : ";
            echo $a;
            $a++;
        }
        $a = 0;
        while ($a < count($languages)) {
            echo "<br> Value of array : ";
            $a++;
        }
        foreach ($languages as $value ) {
            echo "<br> Value of array : ";
            // echo $languages[$a];
            $a++;
        }
        function printHello(){
            echo "<br>HELLO";
        }
        printHello();
        function print_Num($number){
            echo "<br>YOUR NUMBER IS :";
            echo $number;
        }
        print_Num(20);
        ?>
    </div>
</body>
</html>