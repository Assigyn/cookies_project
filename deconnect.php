<?php session_start();

session_destroy();
unset($_COOKIE['cart']);
setcookie ("cart", null, -1);
header('location: index.php');