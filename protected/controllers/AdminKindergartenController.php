<?php

class AdminKindergartenController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	
        public $layout='//backoffice/masterpages/internal';

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
        
        
        private function getKindergartenFolder(){
            
            //return  Yii::app()->basePath."/uploads/adminNews/";
            $ret = Yii::getPathOfAlias('webroot').'/upload';
            if(!file_exists($ret)){
                
                mkdir($ret,0777);
                
            }
            if(!file_exists($ret)){
                
                return "";
                
            }
            
            $ret .= '/kindergarten';
            if(!file_exists($ret)){
                
                mkdir($ret,0777);
                
            }
            if(!file_exists($ret)){
                
                return "";
                
            }
            $ret .= '/';
            return  $ret;
            
        }
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Kindergarten;
            

		if(isset($_POST['Kindergarten']))
		{
			
                    
                    $this->createOrUpdate($model);
				
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
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Kindergarten']))
		{
			
                    
                    $this->createOrUpdate($model);
				
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

        
        /**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	private function createOrUpdate($model)
	{
		
            $kindergartenFolder = $this->getKindergartenFolder();
            
            
            if($kindergartenFolder==""){
                echo "cant create dir ";
                exit;
            }
            $uploadPrefix = date("YmdHi")."_";
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		
			$model->attributes=$_POST['Kindergarten'];
                        
                          
                        $logo    = CUploadedFile::getInstance($model,'logo');
                        
                        if($logo){
                            
                               $model->logo    = $uploadPrefix.$logo->name;
                         }
                         
                         
			if($model->save()){
                             if($logo){
                               $logo->saveAs($kindergartenFolder.$model->logo);
                            }
                           $this->redirect(Yii::app()->baseUrl. '/adminKindergarten/manage');
                        }
				
		

		
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
            $this->layout='//backoffice/masterpages/internal';
            
            $newsFolder = $this->getKindergartenFolder();
            
            $model = $this->loadModel($id);
            if($model->logo && $model->logo!=""){
                if(file_exists($newsFolder."".$model->logo)){
                    unlink($newsFolder."".$model->logo);
                }
                
            }
            
            
            $model->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(Yii::app()->baseUrl. '/adminKindergarten/manage');
	}


	 public function actionManage()
	{
             $this->layout='//backoffice/masterpages/internal';
             $model =new Kindergarten('search');
             
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
		$model=new Kindergarten('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Kindergarten']))
			$model->attributes=$_GET['Kindergarten'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Kindergarten the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Kindergarten::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Kindergarten $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='kindergarten-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
