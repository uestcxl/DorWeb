<head>
	<title>管理用户</title>
	<link href="<?php echo Yii::app()->baseURL; ?>/xhtml/html/back.css" rel="stylesheet" type="text/css" />
</head>
	<?php foreach($model as $user){ if($user->name!='admin'){?>
		<p>【用户】<?php echo $user->school; ?>--<span class="name"><a href="<?php echo $this->createUrl('user/view',array('id'=>$user->user_id))?>"><?php echo $user->name;?></a></span><span class="shanchu"><a href="<?php echo $this->createUrl('user/DeleteUser',array('id'=>$user->user_id)); ?>"><img src="<? echo Yii::app()->baseURL; ?>/xhtml/html/images/shanchu.jpg" width="20" height="20" /></a></span></p>
	<?php }}?>