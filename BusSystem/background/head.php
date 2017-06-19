<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>head</title>
	<style type="text/css">
		body {
			background: #000;
		}

		.time {
			color: #fff;
			margin-left: 80%;
		}
		.top {
			margin-top: 10px;
			text-align: center;
			color: red;
			font-family: 华文楷体;
			font-weight: bold;
			font-size: 4.3em;
		}
	</style>
</head>
<body>
	<span id="demo" class="time">
		<script language="Javascript" type="text/Javascript">
			var day="";
			var month="";
			var ampm="";
			var ampmhour="";
			var myweekday="";
			var year="";
		    mydate=new Date();
		    myweekday=mydate.getDay();
			mymonth=mydate.getMonth()+1;
			myday= mydate.getDate();
			myyear= mydate.getYear();
			year=(myyear > 200) ? myyear : 1900 + myyear;
			if(myweekday == 0)
			weekday=" 星期日";
			else if(myweekday == 1)
			weekday=" 星期一 ";
			else if(myweekday == 2)
			weekday=" 星期二";
			else if(myweekday == 3)
			weekday=" 星期三";
			else if(myweekday == 4)
			weekday=" 星期四";
			else if(myweekday == 5)
			weekday=" 星期五";
			else if(myweekday == 6)
			weekday=" 星期六";
			document.write("今天是 "+year+"年"+mymonth+"月"+myday+"日 "+weekday);
		</script>
	</span>
	<p class="top">欢迎登陆Dawn后台内容管理</p>
</body>
</html>