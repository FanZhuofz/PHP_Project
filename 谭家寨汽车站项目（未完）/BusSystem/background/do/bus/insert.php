<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>insert</title>
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
<body>
	<?php
		if(@$_GET['action']=='check'){
		//获取提交信息
		$caption = $_POST['caption'];
		$busnum = $_POST['busnum'];
		$data1 = $_POST['data1'];
		$time1 = $_POST['time1'];
		$data2 = $_POST['data2'];
		$time2 = $_POST['time2'];
	
		//数据库添加
		$ser = new mysqli("123.206.33.224","root","0211","db_bus");
			if(!$ser){
					echo "false to link sql server!";
					exit(-1);
				}
					
			if($caption!=null && $busnum!=null && $data1!=null && $time1!=null && $data2!=null && $time2!=null){
				
				$str = "insert into `busmsg`(`caption`,`busnum`,`data1`,`time1`,`data2`,`time2`) VALUES('$caption','$busnum','$data1','$time1','$data2','$time2')";
					
				$resualt = $ser->query($str);
				echo "<script>alert('添加成功，返回列表！');window.location.href='list.php'</script>";
			}else{
				echo "<script>alert('添加失败，所填写信息中不能有空白项！');window.history.back(-1)</script>";
			}
		
		}
	?>
	<form method="post" action="insert.php?action=check">
		<h1>增加车辆信息</h1>
		<p>&nbsp; 运营方向：<input type="text" name="caption" /> <span style="color: red;"> 例：“谭家寨-西安” 或 “西安-谭家寨”</span></p>
		<p>&nbsp; 运营车号：<input type="text" name="busnum" /> <span style="color: red;"> 例：陕A9300001</span></p>
		<p>1班次日期：<input type="text" name="data1" /> <span style="color: red;"> 例：2017/1/1</span></p>
		<p>1班次时间：<input type="text" name="time1" /> <span style="color: red;"> 例：12:00</span></p>
		<p>2班次日期：<input type="text" name="data2" /> <span style="color: red;"> 例：2017/1/1</span></p>
		<p>2班次时间：<input type="text" name="time2" /> <span style="color: red;"> 例：12:00</span></p>
		<p><input type="submit" value="提 交" class="btn"></p>
	</form>


</body>
</html>