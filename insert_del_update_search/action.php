<?php
	$id = $_GET['id'];
	$user = "";
	$pass = "";
	$conn = new mysqli('127.0.0.1','root','0211','bx');
	if(!$conn){
		echo "false";
		exit();
	}
	
	$obj = "SELECT * FROM `user` WHERE `id`='$id'";
	$res = $conn->query($obj);
	$row = $res->fetch_array();
	if($row){
		 $user = $row['name'];
		 $pass = $row['pass'];
	}
?>
<form action="edi.php" method="post">
	<input type="hidden" name="id" value="<?php echo $id; ?>"/>
	<input type="input" name="name" value="<?php echo $user; ?>"/>
	<input type="input" name="pass" value="<?php echo $pass; ?>"/>
	<input type="submit" name="提交"/>
</form>