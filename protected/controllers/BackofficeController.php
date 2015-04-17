<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BackofficeController
 *
 * @author Sogei
 */
class BackofficeController extends Controller {
    
    public $layout='//backoffice/masterpages/internal';
    private $backofficeBaseUrl='backoffice/';
    private $_identity;
    
    public function actionLogin(){
        
        
        $model=new Admin();
        if(isset($_POST['Admin']))
        {
            
            $model->attributes=$_POST['Admin'];
            $logged = $model->login();
            if($logged){
                //autenticato
                $model = AdminDAO::findByEmailAndPassword($model->email, $model->password);
                
                $identity = new UserIdentity($model->email, $model->password);
                $identity->accountInformations=$model;
                $duration= 3600*24*30; // 30 days
                
		$u = Yii::app()->user->login(new UserIdentity($model->email, $model->password),$duration);
                
                $this->redirect(Yii::app()->user->returnUrl.$this->backofficeBaseUrl.'dashboard');
        
              
                
                
                
            } else{
                //non autenticato
            }
			
        }
                
        $this->layout='//backoffice/masterpages/login';
        $this->render('login',array('model'=>$model,
		));
    }
    
    public function actionLogout(){
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->user->returnUrl.$this->backofficeBaseUrl.'login');
    }
    
     public function actionDashboard(){
         $this->layout='//backoffice/masterpages/internal';
        $this->render('dashboard');
                
    }
    
    public function loadModel($id){
		$model=News::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
                
    }
    
    
    
    
}
