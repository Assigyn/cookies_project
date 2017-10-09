<?php session_start();

session_destroy();
setcookie ("product", time() - 3600); // set the expiration date to one hour ago
header('location: index.php');

?>