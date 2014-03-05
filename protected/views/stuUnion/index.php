<?php
/* @var $this StuUnionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Stu Unions',
);

$this->menu=array(
	array('label'=>'Create StuUnion', 'url'=>array('create')),
	array('label'=>'Manage StuUnion', 'url'=>array('admin')),
);
?>

<h1>Stu Unions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
