<!DOCTYPE html>
<html>
<head>
	<title>车辆操作</title>
	<link rel="stylesheet" href="../../../css/bootstrap.min.css" />
	<link rel="stylesheet" href="../../css/style.css" media="screen" />
	<script type="text/javascript" src="../../../js/jquery-1.11.0.min.js" ></script>
	<script type="text/javascript" src="../../../js/bootstrap.min.js" ></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading" align="center">
				<p style="font-size: 16px;font-weight: bold;font-family: '宋体'">汽车班次一览表</p>
			</div>
			<div class="panel-body">
				<table class="table table-hover">
					<tbody>
						<tr class="bg-info">
								<th>运营方向</th>
								<th>车 号</th>
								<th>1班次时间</th>
								<th>2班次时间</th>
								<th> 操 作</th>
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
									echo "<td>";
									echo "<a href='action.php?id=".$row['id']."' class='do_text'>修改</a>";
									echo "&nbsp; &nbsp;";
									echo "<a href='delete.php?id=".$row['id']."' class='do_text'>删除</a>";
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
</body>
</html>