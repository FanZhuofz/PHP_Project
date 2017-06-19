<?php
	$id = $_GET['id'];
	
	$conn = new mysqli('127.0.0.1','root','0211','bx');
	if(!$conn){
		echo "false";
		exit();
	}
	
	$obj = "DELETE FROM `user` WHERE(`id`='$id')";
	$conn->query($obj);
?>
<a href="list.php">返回列表</a>