<?php
// echo "Welcome to Sessions!!";
//used to manage information across differnt pages
// if i login to insta and i go to instagram.com/abhisheksingh_r_f it should not ask login
session_start();
$_SESSION['username'] = "Abhi";
$_SESSION['fav_cat'] = "Books";
echo "We have saved your session";
?>