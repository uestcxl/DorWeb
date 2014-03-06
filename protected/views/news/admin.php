<head>
	<title>新闻管理</title>
	<link href="<?php echo Yii::app()->baseURL; ?>/xhtml/html/back.css" rel="stylesheet" type="text/css" />
</head>
	<?php foreach($model as $news){ ?>
		<p>【新闻】<?php echo MyFunction::cutStr($news->title); ?><span class="shanchu"><a href="<?php echo $this->createUrl('news/delNews',array('id'=>$news->news_id)); ?>"><img src="<? echo Yii::app()->baseURL; ?>/xhtml/html/images/shanchu.jpg" width="20" height="20" /></a></span><span class="bianji"><a href="<?php echo $this->createUrl('news/update',array('id'=>$news->news_id)); ?>"><img src="<? echo Yii::app()->baseURL; ?>/xhtml/html/images/bianji1.jpg" width="20" height="20"></a></span><span class="date"><?php echo $news->time; ?></span></p>
	<?php }?>