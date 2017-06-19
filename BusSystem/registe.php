<!DOCTYPE HTML5>
<html>
<head>
<meta charset="utf-8" />
<title>用户注册</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./css/style.css"  media="screen" >
<script type="text/javascript" src="./js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="./js/easyform.js"></script>

</head>
<body>

<div class="form-div">
	<h1 align="center">汽 车 班 次 查 询 系 统 用 户 注 册</h1>
	<br>
    <form id="reg-form" action="#" method="post">
        <table>
            <tr>
                <td>用户名:</td>
                <td><input name="uid" type="text" id="uid" easyform="length:4-16;char-normal;real-time;" message="用户名必须为4—16位的英文字母或数字" easytip="disappear:lost-focus;theme:blue;" ajax-message="用户名已存在!">
                </td>
            </tr>
            <tr>
                <td>密码:</td>
                <td><input name="psw1" type="password" id="psw1" easyform="length:6-16;" message="密码必须为6—16位" easytip="disappear:lost-focus;theme:blue;"></td>
            </tr>
            <tr>
                <td>确认密码:</td>
                <td><input name="psw2" type="password" id="psw2" easyform="length:6-16;equal:#psw1;" message="两次密码输入要一致" easytip="disappear:lost-focus;theme:blue;"></td>
            </tr>
            <tr>
                <td>email:</td>
                <td><input name="email" type="text" id="email" easyform="email;real-time;" message="Email格式要正确" easytip="disappear:lost-focus;theme:blue;" ajax-message="这个Email地址已经被注册过，请换一个吧!"></td>
            </tr>
            <tr>
                <td>昵称:</td>
                <td><input name="nickname" type="text" id="nickname" easyform="length:2-16" message="昵称必须为2—16位" easytip="disappear:lost-focus;theme:blue;"></td>
            </tr>            
        </table>

		<div class="buttons">
			<input value="注册" type="submit" style="margin-right:100px; margin-top:20px;">
			<a href="login.php">
				<input value="我有账号,我要登录" type="button" style="margin-right:100px; margin-top:20px;">
			</a>
        </div>
		
        <br class="clear">
    </form>
</div>

<script type="text/javascript">
$(document).ready(function(){
	$('#reg-form').easyform();
});
</script>
<div style="text-align:center;clear:both;">
<script src="/gg_bd_ad_720x90.js" type="text/javascript"></script>
<script src="/follow.js" type="text/javascript"></script>
</div>
</body>
</html>
