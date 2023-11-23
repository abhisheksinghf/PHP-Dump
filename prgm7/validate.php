<?php
    $phone = $_POST["pno"];
    $val = preg_match("/[0-9]{3}-[0-9]{3}-[0-9]{4}$/",$phone);
    if($val)
    echo "Phone Number is Correct";
    
    else
    echo "Phone Number Incorrect";
?>