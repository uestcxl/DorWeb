<head>
        <title>上传文件</title>
        <link href="<? echo Yii::app()->baseURL; ?>/xhtml/html/back.css" rel="stylesheet" type="text/css" />
</head>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'files-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
    'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'file_name'); ?>
        <?php echo $form->fileField($model,'file_name'); ?>     
        <?php echo $form->error($model,'file_name'); ?>
    </div>
<br>
    <div class="row buttons">
        <?php echo CHtml::submitButton(' 确认上传 '); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->