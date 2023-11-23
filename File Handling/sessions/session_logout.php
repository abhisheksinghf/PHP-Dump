<?php
session_start();
if(isset($_SESSION['username'])){
session_unset();
session_destroy();
echo "<br>You Have Been Logged Out!!";
}
else{
    echo "<br>Please Login to Continue";
}
?>