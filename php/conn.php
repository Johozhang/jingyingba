<?php 
header("Content-Type:text/html;charset=utf8");
$url = "localhost:3306";       //链接数据库的三要素
$root = "root";					//链接数据库的三要素
$pwd ="root";					//链接数据库的三要素
$conn = @mysql_connect($url,$root,$pwd); //链接数据库
if(!$conn){
	echo "数据库链接失败";
}
mysql_select_db("teacher");      //选择数据条
mysql_query("set names utf8");

 ?>