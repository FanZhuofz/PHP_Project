<?php
	$id = $_POST['id'];
	$user = $_POST['name'];
	$pass = $_POST['pass'];
	
	$conn = new mysqli('127.0.0.1','root','0211','bx');
	if(!$conn){
		echo "false";
		exit();
	}
	
	$obj = "UPDATE `user` SET `name`='$user',`pass`='$pass' WHERE(`id`='$id')";
	$conn->query($obj);
?>
<a href="list.php">返回列表</a>