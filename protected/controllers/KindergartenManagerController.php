<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of KindergartenManagerController
 *
 * @author francesco
 */
class KindergartenManagerController extends BaseFrontController
{
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
            
                $allowed = YII::app()->session["userEmail"];
                
                if($allowed==""){
                    
                        return array(

                            array('deny',  // deny all users
                                    'users'=>array('*'),
                            ),

                    );
                    
                }
                    
               
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','photos','news','books'),
				'users'=>array($allowed),
			),
	
		);
	}

        
    public function actionIndex()
       {
            $this->layout="private";
            $this->render('index');
	}
        
        public function actionPhotos()
       {
            $this->layout="private";
            $this->render('photos');
	}
        
        public function actionNews()
       {
            $this->layout="private";
            $this->render('news');
	}
        
       public function actionBooks()
       {
            $this->layout="private";
            $this->render('books');
	}
}
