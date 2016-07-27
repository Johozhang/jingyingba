<?php 
include_once("conn.php");
$password = $_POST["password"];
$username = $_POST["username"];
$sql = "select * from user where `pwd` = MD5('$password') and `name` = '$username'";
mysql_query($sql);
if(mysql_affected_rows() > 0){
	echo '{"msg":"number"}';
}
else{
	echo '{"msg":"none"}';
}

 ?>