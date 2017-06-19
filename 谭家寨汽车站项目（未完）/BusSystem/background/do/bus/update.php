<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
		$id = $_POST['id'];
		$caption = $_POST['caption'];
		$busnum = $_POST['busnum'];
		$data1 = $_POST['data1'];
		$time1 = $_POST['time1'];
		$data2 = $_POST['data2'];
		$time2 = $_POST['time2'];
		
		$conn = new mysqli('123.206.33.224','root','0211','db_bus');
		if(!$conn){
			echo "false";
			exit();
		}
		
		$obj = "UPDATE `busmsg` SET `caption`='$caption',`busnum`='$busnum',`data1`='$data1',`time1`='$time1', `data2`='$data2',`time2`='$time2'WHERE(`id`='$id')";
		$conn->query($obj);
		echo "<script>alert('修改成功，返回列表！');window.location.href='list.php';</script>";
	?>
</body>
</html>