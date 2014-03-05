<?php
/* @var $this UserInforController */
/* @var $model UserInfor */

$this->breadcrumbs=array(
	'User Infors'=>array('index'),
	$model->user_id,
);

$this->menu=array(
	array('label'=>'List UserInfor', 'url'=>array('index')),
	array('label'=>'Create UserInfor', 'url'=>array('create')),
	array('label'=>'Update UserInfor', 'url'=>array('update', 'id'=>$model->user_id)),
	array('label'=>'Delete UserInfor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->user_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserInfor', 'url'=>array('admin')),
);
?>

<h1>View UserInfor #<?php echo $model->user_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'user_id',
		'user_name',
		'school',
		'acmid',
		'email',
		'phone',
	),
)); ?>
