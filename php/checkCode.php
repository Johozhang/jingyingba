<?php 
session_start();                          // 要放在开头
$code = $_SESSION['check_code_number'];  //获取生成的验证码  该值是以session的形式传递过来的。
$frontCode = $_GET["code"];              //获取输入的验证码  获取的方式是GET。由ajax规定。

if($code == $frontCode){
	echo '{"msg":"pass"}';                //该数据将会传到ajax。
}
else{
	echo '{"msg":"unpass"}';
}
?>