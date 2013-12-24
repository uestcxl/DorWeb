<head>
	<title>新闻管理</title>
	<link href="<? echo Yii::app()->baseURL; ?>/xhtml/html/back.css" rel="stylesheet" type="text/css" />
</head>
	<?php foreach($model as $news){ ?>
		<p>【新闻】<?php echo $news->title; ?><span class="shanchu"><a href=""><img src="<? echo Yii::app()->baseURL; ?>/xhtml/html/images/shanchu.jpg" width="20" height="20" /></a></span><span class="bianji"><a href=""><img src="<? echo Yii::app()->baseURL; ?>/xhtml/html/images/bianji1.jpg" width="20" height="20"></a></span><span class="date"><?php echo $news->time; ?></span></p>
	<?php }?>