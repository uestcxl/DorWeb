<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();


	/**
	 *  移动上传文件
	 */
	public function moveFile($fileName)
	{
			$dir = Yii::app()->basePath."/Files/".$fileName;
			$this->file->saveAs($dir);
			chmod($dir, 0776);
	}

	/**
	 * 删除文件
	 * $file 文件名
	 * $dir 文件所在路径名
	 */
	public function delFile($file,$dir='')
	{
		if($dir == '')
			$dir = Yii::app()->basePath."/../Files/".$file;
		else 
			$dir = $dir.$file;
		
		if(file_exists($dir)){
			unlink($dir);
		}
	}
}