<?php
	session_start();
	if(!$_SESSION['name']){
		echo "未登录!";
		exit(-1);
	}
?>
欢迎nin,
<?php echo $_SESSION['name']; ?>

<?php

	$id = $_GET['id'];
	$str = "SELECT * FROM `new` WHERE `id`='$id'";
?>