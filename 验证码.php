<?php
	//生成随机字符串
	$dawn_ver_str = array("a","","","","","");
	$dawn_ver_element = array(
		0=>array("0","1","2","3","4","5","6","7","8","9"),
		1=>array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z")
		);
	for ($dawn_num_ai=0;$dawn_num_ai<6;$dawn_num_ai++)
	{
		$dawn_num_an = rand(0,1);
		if($dawn_num_an==1)
		{
			$dawn_ver_strget = $dawn_ver_element[$dawn_num_an][rand(0,25)];
			if(rand(0,1)==1)
				$dawn_ver_strget = strtoupper($dawn_ver_strget);
		}
		else
		{
			$dawn_ver_strget = $dawn_ver_element[$dawn_num_an][rand(0,9)];
		}
		$dawn_ver_str[$dawn_num_ai] = $dawn_ver_strget;
	}

	//初始化
	header("Content-type:image/png");					//输出一个PNG图片文件
	$im = imagecreatetruecolor(200, 60);				//初始化矩形区域，矩形框大小
	$black = imagecolorallocate($im, 0, 0, 0);			//定义黑色
	$white = imagecolorallocate($im, 255, 255, 255);	//定义白色
	$gray = imagecolorallocate($im, 144, 144, 144);		//定义灰色
	$yellow = imagecolorallocate($im, 255, 255, 0);		//定义黄色
	$blue = imagecolorallocate($im, 0, 0, 255);			//定义蓝色
	$red = imagecolorallocate($im, 255, 0, 0);			//定义红色
	$zi = imagecolorallocate($im, 255, 0, 255);			//定义紫色
	$font = "courbd.ttf";								//定义字体文件


	//绘图
	$img_color = array("","","","","","");				//颜色存入数组中
	$img_color[0] = $zi;
	$img_color[1] = $yellow;
	$img_color[2] = $red;
	$img_color[3] = $white;
	$img_color[4] = $blue;
	$img_color[5] = $black;
	imagefilledrectangle($im, 2, 2, 198, 58, $gray);		//用灰色画一个矩形，灰色距黑色框边缘距离

	for($i=0;$i<6;$i++)				//用循环画字符
	{
		imagettftext($im, 20, 0, 30+$i*25, 40, $img_color[$i], $font, $dawn_ver_str[$i]);	//画出随机字符串
		//20字体大小  30+$i*25字体距矩形框左右宽度  40字体距矩形框上下宽度
	}
	imagepng($im);			//创建图形
	imagedestroy($im);		//关闭图形
?>