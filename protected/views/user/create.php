    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=Utf-8">
    <title>新建分会</title>
    <style type="text/css">
        label{
            font-size: 15px;
        }
    </style>
    <link href="<? echo Yii::app()->baseURL; ?>/xhtml/html/download.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<? echo Yii::app()->baseURL; ?>/xhtml/html/login.css">
    </head>
    <div class="holder"></div>
    <center>
    	<?php $this->renderPartial('_form', array('model'=>$model)); ?>
    </center>