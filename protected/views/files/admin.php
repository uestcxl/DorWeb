<head>
        <title>文件管理</title>
        <link href="<?php echo Yii::app()->baseURL; ?>/xhtml/html/back.css" rel="stylesheet" type="text/css" />
 </head>  
        <?php foreach($model as $file){ ?>
            <p>【文件】<?php echo MyFunction::cutStr($file->file_name,50); ?><span class="shanchu"><a href="<?php echo $this->createUrl('files/delFile',array('id'=>$file->files_id)); ?>"><img src="<? echo Yii::app()->baseURL; ?>/xhtml/html/images/shanchu.jpg" width="20" height="20" /></a></span><span class="date"><?php echo $file->time; ?></span></p>
        <?php }?>

