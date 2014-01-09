<head>
	<title>新闻 - <?php echo $model->title; ?></title>
	<link href="<? echo Yii::app()->baseURL; ?>/xhtml/html/information.css" rel="stylesheet" type="text/css" />
</head>
<div class="holder"></div>
<!--****************************************************************************mainContent-********************************************************************************-->
<div class="mainContent clearfix">
<div class="leftpart">
<h4><?php echo $model->title; ?></h4>
<p class="info">发布时间 : <?php echo $model->time; ?></p>
	<?php echo $model->content; ?>
 </div>
<div class="rightpart">
	<ul>　
		<?php 
			$i = 0;
			$newsList = $this->listNews();
			foreach($newsList as $news){
		?>
			<li><a href="<?php echo $this->createUrl('news/view',array('id'=>$news->news_id)); ?>">【新闻】<?php echo MyFunction::cutStr($news->title,30); ?></a></li>
		<?php 
				$i++; 
			}
			if($i>=6){
		?>
			<li><a href="<?php echo $this->createUrl('news/index',array('id'=>$news->news_id)); ?>" color='blue'><i>更多</i></a></li>
		<?php	}?>
		
	</ul>
</div>
</div>