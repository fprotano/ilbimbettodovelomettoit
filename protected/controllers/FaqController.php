<?php

class FaqController extends BaseFrontController
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/fullPage';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations

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
				'actions'=>array('index'),
				'users'=>array('*'),
			),

		);
	}

	


	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
                
		$dataProvider=new CActiveDataProvider('Faq' 
                        ,array('pagination'=>false));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
        
        
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Faq the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Faq::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	
}
