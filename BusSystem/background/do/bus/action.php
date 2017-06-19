<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
<body>
	<?php
		$id = $_GET['id'];
		$caption = "";
		$busnum = "";
		$data1 = "";
		$time1 = "";
		$data2 = "";
		$time2 = "";
		$conn = new mysqli('123.206.33.224','root','0211','db_bus');
		if(!$conn){
			echo "false";
			exit();
		}
		
		$obj = "SELECT * FROM `busmsg` WHERE `id`='$id'";
		$res = $conn->query($obj);
		$row = $res->fetch_array();
		if($row){
			$caption = $row['caption'];
			$busnum = $row['busnum'];
			$data1 = $row['data1'];
			$time1 = $row['time1'];
			$data2 = $row['data2'];
			$time2 = $row['time2'];
		}
	?>
	<form action="update.php" method="post">
		<p><input type="hidden" name="id" value="<?php echo $id; ?>"/></p>
		<p>&nbsp; 运营方向:<input type="text" name="caption" value="<?php echo $caption ?>"/></p>
		<p>&nbsp; 运营车号:<input type="text" name="busnum" value="<?php echo $busnum ?>"/></p>
		<p>1班次日期:<input type="text" name="data1" value="<?php echo $data1 ?>"/></p>
		<p>1班次时间:<input type="text" name="time1" value="<?php echo $time1 ?>"/></p>
		<p>2班次日期:<input type="text" name="data2" value="<?php echo $data2 ?>"/></p>
		<p>2班次时间:<input type="text" name="time2" value="<?php echo $time2 ?>"/></p>
		<p><input type="submit" value="提 交" class="btn"></p>
	</form>
</body>
</html>