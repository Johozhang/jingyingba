<?php 
include_once("conn.php"); //链接数据库
$username = $_POST["username"]; //获取html文件表单内的用户名
$sql = "select `name` from user where `name` = '$username'";//查验用户名是否在数据库
mysql_query($sql);
if(mysql_affected_rows() > 0){
	echo '{"msg":"success"}';
}
else{
	echo '{"msg":"fail"}';
}

 ?>