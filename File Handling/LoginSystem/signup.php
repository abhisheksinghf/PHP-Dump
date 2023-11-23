<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $showAlert=true;
    $showError=false;
    include 'dbconnect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $exists = false;
    
    if(($password == $cpassword) && $exists==false){
        $sql = "INSERT INTO `users` (`sno`, `username`, `password`, `dt`) 
        VALUES ('$username', '$password', '$cpassword', current_timestamp())";
        $result = mysqli_query($conn,$sql);
        if($result)
        {
            $showAlert = true;
        }
    }
    else
    {
        $showError = "Passwords Dont Match!!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
</head>
<style>
    nav ul a{
        text-decoration:none;
        display:flex;
        flex-direction:column;
        list-style:none;
    }
</style>
<body>
    <?php
    if(isset($showAlert))
    {
        echo "Sucess";
    } 
    if(isset($showError))
    {
        echo "Fail";
    }
    ?>
    <nav>
        <ul>
            <a href="login.php"><li>login</li></a>
            <a href="signup.php"><li>signup</li></a>
            <a href="welcome.php"><li>welcome</li></a>
            <a href="logout.php"><li>logout</li></a>
        </ul>
    </nav>
    <form action="signup.php" method="post">
    <div class="container">
        <h3 style="text-align:center;">Sign Up to our Website</h3>
        Username: <input type="text" name="username" id="uname"><br><br>
        Password: <input type="password" name="password" id="pwd"><br><br>
        Confirm Password: <input type="password" name="cpassword" id="cpwd"><br>
        <input type="submit" value="Sign Up">
        <input type="reset" value="Reset">
    </div>
    </form>
</body>
</html>