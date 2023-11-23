<?php

$con = mysqli_connect("localhost","root","");
if($con)
{
    echo "Connection Success";
}
$user = $_POST['uname'];
$pass = $_POST['pwd'];

mysqli_select_db($con,"user_login");

$query = "SELECT * from login_details where username='$user' and password='$pass'";

$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count==1)
{
    echo "success";
}
else{
    echo "Incorrect Username or Password! <a href='index.html'>Try Again</a>";
}


?>