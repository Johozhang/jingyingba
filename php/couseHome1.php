<?php 
	// header("Content-Type:text/html;charset=utf8");
	include_once("conn1.php");
	$page = $_GET["page"]*15;
	$sql = "select * from classDetail order by `id` limit $page,15 ";
	$result = mysql_query($sql);
	$arr = array();
	if(mysql_affected_rows() > 0) {
		while($row = mysql_fetch_assoc($result)) {
			// var_dump($row);
			// echo $row["title"];
			$arr[] = $row;
		}
	}
	
	echo '{"data":'.json_encode($arr).'}';

?>