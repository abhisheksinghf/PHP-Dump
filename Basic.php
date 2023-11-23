<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <div class="container">
        This is My First PHP website 
        <?php
            echo "Hello World!! Printed using PHP\n";
            //single line comment
            
            /*
            multi line
            comment
            */
        $var1 = 22;
        $var2 = 40;
        echo $var1;
        echo $var2;

        echo $var1 + $var2;

        // Operators in PHP

        // Aritmetic
        echo "The value of var1 + var2 is ";
        echo $var1 + $var2;
        echo "<br>"; //new line 

        echo "The value of var1 - var2 is ";
        echo $var1 - $var2;
        echo "<br>"; //new line 

        echo "The value of var1 * var2 is ";
        echo $var1 * $var2;
        echo "<br>"; //new line 

        echo "The svalueof var1 / var2 is ";
        echo $var1 / $var2;
        echo "<br>"; //new line 

        echo "The value of var1 % var2 is ";
        echo $var1 % $var2;
        echo "<br>"; //new line 
        
        // Assignment operator
        $newVar = $var1;
        echo "Value of new var ";
        echo $newVar;
        $newVar += 1;
        echo "<br>"; //new line 
        echo "Value of new var += 1 :-> ";
        echo $newVar;

        // comparision
        echo "<br>"; //new line 
        echo "The Value of 1==4 is : ";
        
        echo var_dump(1==4);
        echo "<br>"; //new line 
        
        echo "The Value of 1>=4 is : ";
        echo var_dump(1>=4);
        echo "<br>"; //new line 
        
        echo "The Value of 1<=4 is : ";
        echo var_dump(1<=4);
        echo "<br>"; //new line 
        
        echo "The Value of 1!=4 is : ";
        echo var_dump(1!=4);
        
        // in/dec op
        echo "<br>"; //new line 
        echo $var1++;
        echo "<br>"; //new line 
        echo $var1--;
        echo "<br>"; //new line 
        echo --$var1;
        echo "<br>"; //new line 
        echo ++$var1;
        echo "<br>"; //new line 

        // logical op
        
        // and (&&)
        echo "<br>"; //new line 
        $myVar = true && true;
        echo var_dump($myVar);

        echo "<br>"; //new line 
        $myVar = false && true;
        echo var_dump($myVar);

        echo "<br>"; //new line 
        $myVar = false && false;
        echo var_dump($myVar);
        // or (||)
        echo "<br>"; //new line 
        echo "<br>"; //new line 
        $myVar = true || true;
        echo var_dump($myVar);

        echo "<br>"; //new line 
        $myVar = false || true;
        echo var_dump($myVar);

        echo "<br>"; //new line 
        $myVar = false || false;
        echo var_dump($myVar);
        // xor (xor)
        // not (!)
        ?>

        <?php
        define('PI', '3.14');
        
        //Data types in php
        // 1.string
        echo "<br>"; //new line 
        echo "Data Types";
        echo "<br>"; //new line 
        $var = "This is a string !";
        echo var_dump($var);
        // 2.integer

        echo "<br>"; //new line 
        $var3 = 56;
        echo var_dump($var3);

        // 3.float
        echo "<br>"; //new line 
        $var3 = 90.432;
        echo var_dump($var3);
        // 4.boolean
        // 5.array
        // 6.object
        echo "<br>"; //new line 
        echo PI; 
        ?>

    </div>
</body>
</html>