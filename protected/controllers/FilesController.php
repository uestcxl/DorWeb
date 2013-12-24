<?php

class FilesController extends Controller
{
	public $button=1;
	public $file;   	//upload files
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('download'),
				'users'=>array('@'),
			),			
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('create','update','admin','delete'),
				'users'=>array(ADMIN),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$this->layout = '//layouts/column1';
		$model=new Files;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		/*if(isset($_POST['Files']))
			if($model->save())
				$this->redirect(array('view','id'=>$model->files_id));*/
		if(isset($_POST['Files']))
		{
			$this->file = CUploadedFile::getInstanceByName('Files[file_name]');
			$model->file_name=$this->file->name;
			if($model->save())
			{
				$this->moveFile();
				$this->redirect(array('admin'));
			}
		}


		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$file=$this->loadModel($id);
		$fileName=$file->file_name;
		$file->delete();
		$this->delFile($fileName);

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$criteria = new CDbCriteria;
		$criteria->order = 'time desc';
		$model = Files::model()->findAll($criteria);

		$this->renderPartial('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$this->layout = '//layouts/column1';
		/*$model=new Files('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Files']))
			$model->attributes=$_GET['Files'];*/
		$model=Files::model()->findAll();

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Files the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Files::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Files $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='files-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	/**
	 *  移动上传文件
	 */
	public function moveFile()
	{
		if(is_object($this->file) && get_class($this->file)==='CUploadedFile')
		{
			$dir = Yii::app()->basePath."/../Files/".$this->file->name;
			$this->file->saveAs($dir);
			chmod($dir, 0776);
		}
	}

	/**
	 * 删除文件
	 * $file 文件名
	 */
	public function delFile($file)
	{
		$dir = Yii::app()->basePath."/../Files/".$file;	
		if(file_exists($dir))
		{
			unlink($dir);
		}
	}

	public function actionDownload($id)
	{ 
   
        			$model = Files::model()->findByPk($id); 
         
        			if ($model == null) { 
           				throw new CHttpException ('500', '文件不存在'); 
        			} else { 
            				// 服务器端文件的路径 
            				$fileName = $model->file_name ; 
            				$file =  Yii::app()->basePath."/../Files/".$fileName;
            				if (file_exists($file))
                				yii::app ()->request->sendFile ($model->file_name,  file_get_contents ($file));
            			} 
        		
	} 
}
