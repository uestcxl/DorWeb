<?php
/* @var $this UserInforController */
/* @var $model UserInfor */

$this->breadcrumbs=array(
	'User Infors'=>array('index'),
	$model->user_id=>array('view','id'=>$model->user_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserInfor', 'url'=>array('index')),
	array('label'=>'Create UserInfor', 'url'=>array('create')),
	array('label'=>'View UserInfor', 'url'=>array('view', 'id'=>$model->user_id)),
	array('label'=>'Manage UserInfor', 'url'=>array('admin')),
);
?>

<h1>Update UserInfor <?php echo $model->user_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>