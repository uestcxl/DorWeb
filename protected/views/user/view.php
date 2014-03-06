

<head>
	<title>管理用户</title>
	<link href="<?php echo Yii::app()->baseURL; ?>/xhtml/html/back.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
		p {
			margin-left: 200px; 
		}
	</style>
</head>
	<p>用户名  :<?php echo $model->user_name;?></p>
	<p>姓名  :<?php echo $model->name;?></p>
	<p>学校  :<?php echo $model->school;?></p>
	<p>ACMID  :<?php echo $model->acmid;?></p>
	<p>Email  :<?php echo $model->email;?></p>
	<p>电话  :<?php echo $model->phone;?></p>