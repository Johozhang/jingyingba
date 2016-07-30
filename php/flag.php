<?php 

session_start();
header("Access-Control-Allow-Origin:*");
$_SESSION['user_name']  = $_GET["code"];    
$_SESSION['flag']  = 1;      

?>