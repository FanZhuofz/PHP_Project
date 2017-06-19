<!DOCTYPE HTML5>
<html>
<head>
<meta charset="utf-8" />
<title>用户登陆</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0"><!--适应手机-->
<link rel="stylesheet" href="./css/style.css"  media="screen" ><!--外部引用css-->
<!--引用js文件-->
<script type="text/javascript" src="./js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="./js/easyform.js"></script>

</head>
<body>
	<br>
	<div class="form-div">
		<h1 align="center">汽车班次查询系统用户登陆</h1>
		<br>
	    <form id="reg-form" action="index.php" method="post">
	        <table>
	            <tr>
	                <td>用户名:</td>
	                <td><input name="uid" type="text" id="uid" easyform="length:4-16;char-normal;real-time;" message="用户名必须为4—16位的英文字母或数字" easytip="disappear:lost-focus;theme:blue;" ajax-message="用户名已存在!">
	                </td>
	            </tr>
	            <tr>
	                <td>密  &nbsp; 码:</td>
	                <td><input name="psw1" type="password" id="psw1" easyform="length:6-16;" message="密码必须为6—16位" easytip="disappear:lost-focus;theme:blue;"></td>
	            </tr>
	        </table>
			<div class="buttons">
				<input value="登录" type="button" style="margin-right:100px; margin-top:20px;">
	        </div>
			
	        <br class="clear">
	    </form>
	    <br>
	    <p align="center">技术支持：Dawn &nbsp; | &nbsp; Email：fans@e-team.cn</p>
	</div>
	
	<!--js-->
	<script type="text/javascript">
		$(document).ready(function(){
			$('#reg-form').easyform();
		});
	</script>
</body>
</html>
