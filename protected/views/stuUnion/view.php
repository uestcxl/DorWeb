<?php
/* @var $this StuUnionController */
/* @var $model StuUnion */

$this->breadcrumbs=array(
	'Stu Unions'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List StuUnion', 'url'=>array('index')),
	array('label'=>'Create StuUnion', 'url'=>array('create')),
	array('label'=>'Update StuUnion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete StuUnion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StuUnion', 'url'=>array('admin')),
);
?>

<h1>View StuUnion #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'links',
		'name',
	),
)); ?>
