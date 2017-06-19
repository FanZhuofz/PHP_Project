<!DOCTYPE HTML5>
<html>
	<head>
		<meta charset="utf-8" />
		<title>谭家寨汽车站</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="./css/style.css" media="screen" />
		<link rel="stylesheet" href="./css/bootstrap.min.css" media="screen" />
		<script type="text/javascript" src="./js/jquery.min.js" ></script>
		<script type="text/javascript" src="./js/bootstrap.min.js" ></script>
		<!--[if lt IE 9]>
      		<script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      		<script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
   		<![endif]-->
   		<style>
	   		body{
	   			margin:0px;
				font-size:16px;
	   			background-color:#FFFFFF;
	   		}
   		</style>
	</head>
	<!--
    	作者：fanzh0211@126.com
    	时间：2017-05-09
    	描述：网站首页
    -->
	<body>
		<nav class="nav navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header" >
					<div class="navbar-brand navbar-right" style="height:50px;width:250px;color:#FFFFFF;">
						<a href=" "><img src="image/bus_logo.png"></a> &nbsp; 
					</div>
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
					
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="" >首页</a></li>
						<li ><a href="#">车站风貌</a></li>
						<li ><a href="select.php">班次查询</a></li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">联系管理员<span class="caret"></span></a>
							<ul class="dropdown-menu dropdown-menu-left">
								<li><a href="#">管理员信息</a></li>
								<li><a href="#">发邮件</a></li>
							</ul>
						</li>
						<li ><a href="#">关于我们</a></li>
					</ul>
					<ul class="nav navbar-nav pull-right">
						<li><a href="registe.php">注册</a></li>
						<li class="divider-vertical"></li>
						<li><a href="login.php">登陆</a></li>
					</ul>
				</div>
			</div>
		</nav>
		
		<div id="myCarousel" class="carousel slide">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active">&nbsp;
				<li data-target="#myCarousel" data-slide-to="1">&nbsp;
				<li data-target="#myCarousel" data-slide-to="2">&nbsp;
				<li data-target="#myCarousel" data-slide-to="3">&nbsp;
			</ol>
			<div class="carousel-inner">
				<div class="item active" style="background-color:blue;" >
					<img  src="./image/flash/1.jpg" alt="First slide" style="width:100%;height:60%;" >
					<div class="carousel-caption">
						<h4>标题一</h4>
						<p>这是第一张，内容</p>
					</div>
				</div>
				<div class="item">
					<img   src="./image/flash/2.jpg" alt="Second slide" style="width:100%;height:60%;">
					<div class="carousel-caption">
						<h4>标题二</h4>
						<p>这是第二张，内容</p>
					</div>
				</div>
				<div class="item">
					<img  src="./image/flash/3.jpg" alt="Third slide" style="width:100%;height:60%;">
					<div class="carousel-caption">
						<h4>标题三</h4>
						<p>这是第三张，内容</p>
					</div>
				</div>
				<div class="item">
					<img src="./image/flash/4.jpg" alt="Fourths slide" style="width:100%;height:60%;">
					<div class="carousel-caption">
						<h4>标题四</h4>
						<p>这是第四张，内容</p>
					</div>
				</div>
			</div>
			<a href="#myCarousel"  data-slide="prev" class="left carousel-control">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a href="#myCarousel"  data-slide="next" class="right carousel-control">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
		<script type="text/javascript">
			$('.carousel').carousel()
		</script>
		<div class="text-center text-lishu">
			<div class="bg-white">
				<div class="container">
					<h2>车站信息</h2><hr>
					<div class="row">
						<div id="demo"> 
							<div id="indemo"> 
								<div id="demo1"> 
									<div class="span3 sta_cap">
										<p>
											<a href="#">
											<img src="image/caption/1.jpg"><br>
											<p>内容1</p>
											</a>
										</p>
									</div>
									<div class="span3 sta_cap">
										<p>
											<a href="#">
											<img src="image/caption/2.jpg"><br>
											<p>内容2</p>
											</a>
										</p>
									</div>
									<div class="span3 sta_cap">
										<p>
											<a href="#">
											<img src="image/caption/3.jpg"><br>
											<p>内容3</p>
											</a>
										</p>
									</div>
									<div class="span3 sta_cap">
										<p>
											<a href="#">
											<img src="image/caption/4.jpg"><br>
											<p>内容4</p>
											</a>
										</p>
									</div>
									<div class="span3 sta_cap">
										<p>
											<a href="#">
											<img src="image/caption/5.jpg"><br>
											<p>内容5</p>
											</a>
										</p>
									</div>
								</div> 
								<div id="demo2"></div> 
							</div> 
						</div>

						<script> 
							var speed=10; 
							var tab=document.getElementById("demo"); 
							var tab1=document.getElementById("demo1"); 
							var tab2=document.getElementById("demo2"); 
							tab2.innerHTML=tab1.innerHTML; 
							function Marquee(){ 
									if(tab2.offsetWidth-tab.scrollLeft<=0) 
									tab.scrollLeft-=tab1.offsetWidth 
									else{ 
									tab.scrollLeft++; 
								} 
							} 
							var MyMar=setInterval(Marquee,speed); 
							tab.onmouseover=function() {clearInterval(MyMar)}; 
							tab.onmouseout=function() {MyMar=setInterval(Marquee,speed)}; 
						</script>
					</div>
				</div>
			</div>
		</div>		
				
		<div class="bg-black-bj">
			<div class="container">
				<div class="col-md-12">
					<div class="row">
		                <div class="col-md-4 bg-black">
		                	免责声明
		            		<br>
		            		<hr>
		            		<p style="text-align:left;">
								 &nbsp;&nbsp;此项目仅供学习和交流使用，勿用于商业途径，违法必究。网站项目及内容纯属个人制作，若侵犯了您的权益，请及时联系管理员删除！谢谢支持！
		            		</p>
		                </div> 
		                
		                <div class="col-md-4 bg-black">
		                	友情链接
		                	<br>
		            		<hr>
		                	<p>
		                		<a href="https://www.baidu.com">百度一下</a> &nbsp;
		                		<a href="https://www.baidu.com">百度一下</a> &nbsp;
		                		<a href="https://www.baidu.com">百度一下</a> &nbsp;
		                	</p>
		                	<p>
		                		<a href="https://www.baidu.com">百度一下</a> &nbsp;
		                		<a href="https://www.baidu.com">百度一下</a> &nbsp;
		                		<a href="https://www.baidu.com">百度一下</a> &nbsp;
		                	</p>
		                	<p>
		                		<a href="https://www.baidu.com">百度一下</a> &nbsp;
		                		<a href="https://www.baidu.com">百度一下</a> &nbsp;
		                		<a href="https://www.baidu.com">百度一下</a> &nbsp;
		                	</p>
		                	<p>
		                		<a href="https://www.baidu.com">百度一下</a> &nbsp;
		                		<a href="https://www.baidu.com">百度一下</a> &nbsp;
		                		<a href="https://www.baidu.com">百度一下</a> &nbsp;
		                	</p>
		                	<p>
		                		<a href="https://www.baidu.com">百度一下</a> &nbsp;
		                		<a href="https://www.baidu.com">百度一下</a> &nbsp;
		                		<a href="https://www.baidu.com">百度一下</a> &nbsp;
		                	</p>
		                	
		                </div>
		                
		                <div class="col-md-4 bg-black">
		                	关于我们
		                	<br>
		            		<hr>
		                	<p style="text-align:left;">
							    &nbsp; &nbsp; 谭家寨客运站汽车时刻查询网本着“精确、认真、求实、守信，服务于长途客运事业，服务于社会网民”的理念，以发展成为“用户的查询知己、行业的纽带、政府的窗口”为奋斗目标，努力搭建起旅客与长途客运系统沟通的桥梁。
		            		</p>
		                </div>
					</div>
				</div>
			</div>
			
		</div>
		<div class="foot"><br>
			<span>
				<p>版权所有：Dawn &nbsp;|&nbsp; 技术支持：E-Team</p>
				<p>Copyright 2017-2018 &nbsp;|&nbsp; Email：fans@e-team.cn &nbsp;|&nbsp; 
				<a href="tencent://message/?uin=994825661&Site">QQ交谈</a>  &nbsp;|&nbsp;  
				<a href="mailto:fans@e-team.cn">发邮件</a>
				</p>
			</span>
		</div>
	</body>
</html>
