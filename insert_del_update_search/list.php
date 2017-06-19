<a href="form.php">添加信息</a><br>
<?php
	$conn = new mysqli('127.0.0.1','root','0211','bx');
	if(!$conn){
		echo "false";
		exit();
	}
	
	$obj = "SELECT * FROM `user`";
	$res = $conn->query($obj);
	while($row = $res->fetch_array()){
		echo $row['id']." ";
		echo $row['name']." ";
		echo $row['pass']." ";
		echo "&nbsp;<a href='action.php?id=".$row['id']."'>修改</a>";
		echo "&nbsp;<a href='del.php?id=".$row['id']."'>删除</a>";
		echo "<br>";
	}
?>