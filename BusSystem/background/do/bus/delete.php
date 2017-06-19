<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
		$id = $_GET['id'];
		
		$conn = new mysqli('123.206.33.224','root','0211','db_bus');
		if(!$conn){
			echo "false";
			exit();
		}
		
		$obj = "DELETE FROM `busmsg` WHERE(`id`='$id')";
		$conn->query($obj);
		echo "<script>alert('删除成功，返回列表！');window.location.href='list.php';</script>";
	?>
</body>
</html>