<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>DocWeb</title>
		<link href="<? echo Yii::app()->baseURL; ?>/xhtml/html/docWeb.css" rel="stylesheet" type="text/css" />
	</head>
	<body id="feature">
		<div class="placeholder"></div>
	<div id="head">
		<div class="header clearfix">
			<img src="<? echo Yii::app()->baseURL; ?>/xhtml/html/images/xiaohui.jpg" width="60" height="60px" />
		<ul class="left clearfix">
			<li><a href="docWeb.html" id="featureLink">主页</a></li>
			<li><a href="download.html" id="downloadLink">资料下载</a></li>
			<li><a href="information.html" id="informationLink">学院新闻</a></li>
			<li><a href="about_us.html" id="about_usLink">关于我们</a></li>
		</ul>
		<ul class="right clearfix">
			<li><a class="denglu" href="">登录</a></li>
			<li><a class="zuce" href="">注册</a></li>
		</ul>
	</div>
</div>
<div class="hey">

<?php echo $content; ?>

</div>
<div id="foot">
	<p class="lianjie">友情链接: <a href="http://www.uestc.edu.cn/">电子科大</a> <a href="http://bbs.stuhome.net/">清水河畔</a></p>
	<p class="copyright">Copyright 201工作室</p>
	<p class="copyright">地址： 电子科大清水河校区本科24栋201</p>
</div>
</body>
</html>

