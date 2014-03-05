<?php
/* @var $this StuUnionController */
/* @var $model StuUnion */

$this->breadcrumbs=array(
	'Stu Unions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StuUnion', 'url'=>array('index')),
	array('label'=>'Manage StuUnion', 'url'=>array('admin')),
);
?>

<h1>Create StuUnion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>