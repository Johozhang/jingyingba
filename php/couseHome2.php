<?php 
	// header("Content-Type:text/html;charset=utf8");
	include_once("conn1.php");
	$sql = "select * from classDetail order by `id` ";
	$result = mysql_query($sql);
	$arr = array();
	if(mysql_affected_rows() > 0) {
		while($row = mysql_fetch_assoc($result)) {
			$arr[] = $row;
		}
	}
	
	echo '{"data":'.json_encode($arr).'}';

?>