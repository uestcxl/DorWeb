<?php
/* @var $this UserInforController */
/* @var $model UserInfor */

$this->breadcrumbs=array(
	'User Infors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserInfor', 'url'=>array('index')),
	array('label'=>'Manage UserInfor', 'url'=>array('admin')),
);
?>

<h1>Create UserInfor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>