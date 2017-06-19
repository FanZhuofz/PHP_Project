<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="./css/bootstrap.min.css" />
		<link rel="stylesheet" href="./css/style.css" media="screen" />
		<script type="text/javascript" src="./js/jquery-1.11.0.min.js" ></script>
		<script type="text/javascript" src="./js/bootstrap.min.js" ></script>
		<title>汽车班次查询</title>
	</head>
	<!--
    	作者：fanzh0211@126.com
    	时间：2017-05-09
    	描述：汽车班次查询表
    -->
		<div class="container">
			<div class="panel panel-primary">
				<div class="panel-heading" align="center" style="height:110px;margin-top: -10px;">
					<h2>汽车班次查询表</h2>
					<div align="right">
						<input type="submit" value="谭家寨 —— 西安" /> &nbsp; 
						<input type="submit" value="西安 —— 谭家寨" />
					</div>
				</div>
				
					<div class="panel-body">
						<table class="table table-hover">
							<tbody>
								<tr class="bg-info">
										<th>运营方向</th>
										<th>车 号</th>
										<th>1班次时间</th>
										<th>2班次时间</th>
								</tr>
								<?php
									$conn = new mysqli("123.206.33.224","root","0211","db_bus");
										if(!$conn){
											echo "false to link sql server!";
											exit(-1);
										}
										$str = "select * from `busmsg`";
										$result =  $conn->query($str);
										
										while($row = $result->fetch_array()){
											echo "<tr class='bg-success'>";
											echo "<th>";
											echo $row['caption'];
											echo "</th>";
											echo "<td>";
											echo $row['busnum'];
											echo "</td>";
											echo "<td>";
											echo $row['data1'];
											echo "&nbsp;";
											echo $row['time1'];
											echo "</td>";
											echo "<td>";
											echo $row['data2'];
											echo "&nbsp;";
											echo $row['time2'];
											echo "</td>";
											echo "</tr>";
										}
											
								?>
							</tbody>
						</table>
					</div>
					
					<div class="panel-footer" align="center">
						技术支持：Dawn &nbsp; | &nbsp; Email:fans@e-team.cn &nbsp; | &nbsp; Tel:15891300969
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
