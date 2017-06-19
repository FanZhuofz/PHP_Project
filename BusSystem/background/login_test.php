<html>
	<head>
		<meta charset="utf-8">
		<title>login</title>
	</head>
	<body>	
	<?php 
		//session_start();
		//获取用户提交的
		$user = $_POST['user'];
		$pass = $_POST['pwd'];
		
		//获取数据库记录
		
		$conn = new mysqli("123.206.33.224","root","0211","db_bus");
			if(!$conn){
				echo "false to link sql server!";
				exit(-1);
			}
			
			$str = "select * from `admin` WHERE `name`='$user'";
			
			$resualt = $conn->query($str);
			
			$row = $resualt->fetch_array();
	
			//判断验证
			if($user==null || $pass==null){
				echo "<script>alert('用户名和密码不能为空！');window.history.back(-1)</script>";
			}else{
				if($pass == $row['pass']){
					//$_SESSION['name'] = $user;
					echo "<script>window.location.href='main.php'</script>";
				}else{
					//$_SESSION['name'] = NULL;
					echo "<script>alert('用户名或密码错误！');window.history.back(-1)</script>";
				}
			}
	?>
</body>
</html>