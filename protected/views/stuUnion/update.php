<?php
/* @var $this StuUnionController */
/* @var $model StuUnion */

$this->breadcrumbs=array(
	'Stu Unions'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StuUnion', 'url'=>array('index')),
	array('label'=>'Create StuUnion', 'url'=>array('create')),
	array('label'=>'View StuUnion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage StuUnion', 'url'=>array('admin')),
);
?>

<h1>Update StuUnion <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>