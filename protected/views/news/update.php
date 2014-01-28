<head>
    <title>编辑新闻 - <?php echo $model->title; ?></title>
    <link href="<? echo Yii::app()->baseURL; ?>/xhtml/html/back.css" rel="stylesheet" type="text/css" />
</head>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>