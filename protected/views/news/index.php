<head>
    <title>全部新闻</title>
    <link href="<?php echo Yii::app()->baseURL; ?>/xhtml/html/information.css" rel="stylesheet" type="text/css" />
</head>

<div class="holder"></div>
<div class="news clearfix">
    <ul>
        <?php foreach($model as $news){ ?>　
            <li><a href="<?php echo $this->createUrl('news/view',array('id'=>$news->news_id)); ?>">【新闻】<?php echo MyFunction::cutStr($news->title,100); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="FF6600"><?php echo substr($news->time,0,10); ?></font></a></li>
        <?php } ?>
    </ul>
</div>