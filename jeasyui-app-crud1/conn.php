<?php

$conn = @mysql_connect('127.0.0.1','root','0211');
if (!$conn) {
	die('Could not connect: ' . mysql_error());
}
mysql_select_db('mydb', $conn);

?>