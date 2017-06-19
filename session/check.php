<?php
	session_start();
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	
	if($user){
		$conn = new mysqli("127.0.0.1","root","0211","test");
		if(!$conn){
			echo "false";
			exit(-1);
		}
		
		$str = "SELECT * FROM `admin` WHERE `name`='$user'";
		$res = $conn->query($str);
		$row = $res->fetch_array();
		$check = $row['pass'];
		
		if($pass == $check){
			echo "密码正确";
			$_SESSION['name'] = $user;
			echo "<a href='user.php' >登陆成功，进入主页面</a>";
		}else{
			echo "密码错误";
			$_SESSION['name'] = NULL;
			echo "<a href='login.php'>返回登陆页面</a>";
		}
	}
?>