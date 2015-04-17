<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminNews
 *
 * @author francesco
 */
class AdminNewsController extends Controller {
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
//			'postOnly + delete', // we only allow deletion via POST request
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
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','delete','manage'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
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
            
            $newsFolder = $this->getNewsFolder();
            
            
            if($newsFolder==""){
                echo "cant create dir ";
                exit;
            }
            $uploadPrefix = date("YmdHi")."_";
            $this->layout='//backoffice/masterpages/internal';
		$model=new News;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['News']))
		{
                    

                        $_POST['News']["createdAt"]=date("Y-m-d H-i");
                        $_POST['News']["lastModifiedAt"]=date("Y-m-d H-i");

                    
                     
			$model->attributes=$_POST['News'];
                        
                        $picture    = CUploadedFile::getInstance($model,'picture');
                        $attachment = CUploadedFile::getInstance($model,'attachment');
                        if($picture){
                            
                               $model->picture    = $uploadPrefix.$picture->name;
                         }
                         if($attachment){
                               $model->attachment   = $uploadPrefix.$attachment->name;
                         }
			if($model->save()){
                            if($picture){
                               $picture->saveAs($newsFolder.$picture->name);
                            }
                            if($attachment){
                               $attachment->saveAs($newsFolder.$attachment->name);
                            }
                             
                             $this->redirect(Yii::app()->baseUrl. '/adminNews/manage');
                        }
				
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
            $newsFolder = $this->getNewsFolder();
            $this->layout='//backoffice/masterpages/internal';
            $model=$this->loadModel($id);
            $uploadPrefix = date("YmdHi")."_";

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

            
		if(isset($_POST['News']))
		{
                    
                        $_POST['News']["lastModifiedAt"]=date("Y-m-d H-i");
                        
                        $attachment_delete = isset($_POST["attachment_delete"]) ? $_POST["attachment_delete"] : "";
                        $picture_delete = isset($_POST["picture_delete"]) ? $_POST["picture_delete"] : "";
                        
                        
			$model->attributes=$_POST['News'];
                        if($attachment_delete!=""){
                        
                            $fileToDelete = $newsFolder.$model->attachment;
                            if(file_exists($fileToDelete)){
                                unlink($fileToDelete);
                            }
                            $model->attachment="";
                            
                                
                        }
                        
                        if($picture_delete!=""){
                        
                            $fileToDelete = $newsFolder.$model->picture;
                            if(file_exists($fileToDelete)){
                                unlink($fileToDelete);
                            }
                            $model->picture="";
                            
                                
                        }
                        
                        $picture    = CUploadedFile::getInstance($model,'picture');
                        $attachment = CUploadedFile::getInstance($model,'attachment');
                        if($picture){
                            
                               $model->picture    = $uploadPrefix.$picture->name;
                         }
                         if($attachment){
                               $model->attachment   = $uploadPrefix.$attachment->name;
                         }
			if($model->save()){
                            if($picture){
                               $picture->saveAs($newsFolder.$uploadPrefix.$picture->name);
                          
                            }
                            if($attachment){
                               $attachment->saveAs($newsFolder.$uploadPrefix.$attachment->name);
                          
                            }
                            
                            
                             

                            $this->redirect(Yii::app()->baseUrl. '/adminNews/manage');
                        }
				
		}

		$this->render('update',array(
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
            $this->layout='//backoffice/masterpages/internal';
            
            $newsFolder = $this->getNewsFolder();
            
            $model = $this->loadModel($id);
            if($model->attachment && $model->attachment!=""){
                if(file_exists($newsFolder."".$model->attachment)){
                    unlink($newsFolder."".$model->attachment);
                }
                
            }
            if($model->picture && $model->picture!=""){
                if(file_exists($newsFolder."".$model->picture)){
                    unlink($newsFolder."".$model->picture);
                }
                
            }
            
            $model->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(Yii::app()->baseUrl. '/adminNews/manage');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('News');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
        public function actionManage()
	{
             $this->layout='//backoffice/masterpages/internal';
             $model =new News('search');
             
             $params =array(
		'model'=>$model,
            );
             
            $this->render('manage', $params);
                
	}
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new News('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['News']))
			$model->attributes=$_GET['News'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return News the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=News::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param News $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='news-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        
        private function getNewsFolder(){
            
            //return  Yii::app()->basePath."/uploads/adminNews/";
            $ret = Yii::getPathOfAlias('webroot').'/upload';
            if(!file_exists($ret)){
                
                mkdir($ret,0777);
                
            }
            if(!file_exists($ret)){
                
                return "";
                
            }
            
            $ret .= '/news';
            if(!file_exists($ret)){
                
                mkdir($ret,0777);
                
            }
            if(!file_exists($ret)){
                
                return "";
                
            }
            $ret .= '/';
            return  $ret;
            
        }
}
