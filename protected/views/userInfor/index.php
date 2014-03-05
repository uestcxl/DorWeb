<?php
/* @var $this UserInforController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Infors',
);

$this->menu=array(
	array('label'=>'Create UserInfor', 'url'=>array('create')),
	array('label'=>'Manage UserInfor', 'url'=>array('admin')),
);
?>

<h1>User Infors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
