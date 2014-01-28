<?php
/* @var $this NewsController */
/* @var $model News */
/* @var $form CActiveForm */
?>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl.'/ueditor/ueditor.config.js'; ?>"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl.'/ueditor/ueditor.all.js'; ?>"></script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'news-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>80,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>
<br>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('id'=>'myEditor')); ?>
			<script type="text/javascript">
		    		var editor = new UE.ui.Editor({initialFrameHeight:500});
		    		editor.render("myEditor");
			</script>
		<?php echo $form->error($model,'content'); ?>
	</div>
<br>
	<div class="row buttons">
		<?php echo CHtml::submitButton(' 确认发表 '); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->