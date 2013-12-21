<?php
/* @var $this FilesController */
/* @var $data Files */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('files_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->files_id), array('view', 'id'=>$data->files_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_name')); ?>:</b>
	<?php echo CHtml::encode($data->file_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time')); ?>:</b>
	<?php echo CHtml::encode($data->time); ?>
	<br />

            <?php echo CHtml::link('下载', array('download', 'id'=>$data->files_id)); ?>   

</div>