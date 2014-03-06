<head>
	<title>管理分会</title>
	<link href="<? echo Yii::app()->baseURL; ?>/xhtml/html/back.css" rel="stylesheet" type="text/css" />
</head>
	<?php foreach($model as $user){ ?>
		<p>【分会】<?php echo $user->name; ?>::<span class="links"><a href="<?php echo $user->links;?>" target="_blank">分会主页</a></span><span class="shanchu"><a href="<?php echo $this->createUrl('stuUnion/DeleteStu',array('id'=>$user->id)); ?>"><img src="<? echo Yii::app()->baseURL; ?>/xhtml/html/images/shanchu.jpg" width="20" height="20" /></a></span></p>
	<?php }?>