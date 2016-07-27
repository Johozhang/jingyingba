<?php
	session_start();
    include_once("conn.php");//链接数据库
	header("Content-Type:text/html;charset=utf8"); 
	$username = $_POST["phone1"];      //手机号
	$password = $_POST["password1"];   //第一次输入密码

	function back() {
		echo <<< EOD
		<script type="text/javascript">
		
				location.href = "../login.html";
				
			
		</script>
EOD;
		echo "3s后返回登录界面";
	}

	// if(empty($username)) {
	// 	echo "用户名不能为空";
	// 	back();
	// 	exit();
	// }else if(empty($password)) {
	// 	echo "密码不能为空";
	// 	back();
	// 	exit();
	// }
	

	echo $username;
	echo $password;
	//连接数据库

	$sql = "insert into `user`( `name`, `pwd`) values ($username ,md5($password))";
	// echo $sql;
	$result = mysql_query($sql);
	echo $result;
	// echo mysql_num_rows($result);
	// if(mysql_num_rows($result) > 0) {
	// 	echo "注册成功";
	// }else {
	// 	echo "注册失败";
		back();
	// }
?>










