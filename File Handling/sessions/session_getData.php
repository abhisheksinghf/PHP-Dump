<?php
session_start();
echo "Welcome ".$_SESSION['username'];
echo "<br>";
echo "Your Favoriate category is ".$_SESSION['fav_cat'];
echo "<br>";
?>