<?php

class RegisterController extends Controller
{
    
    
    public function actionGetProvinces()
    {
        $regionId = $_POST["User"]['regionId'];
        $list = Province::model()->findAll('regionId = :regionId', array(':regionId'=>$regionId));
        $list = CHtml::listData($list,'code','description');
        echo CHtml::tag('option',array('value'=>''),'---', true);
        foreach($list as $code => $description)
            echo CHtml::tag('option',array('value'=>$code),CHtml::encode($description), true);
 
 
    }

   public function actionGetCities()
    {
       
        
        $provinceCode = $_POST["User"]['provinceCode'];
        $list = City::model()->findAll('provinceCode = :provinceCode', array(':provinceCode'=>$provinceCode));
        $list = CHtml::listData($list,'id','description');
        echo CHtml::tag('option',array('value'=>''),'---', true);
        foreach($list as $id =>$description)
            echo CHtml::tag('option',array('value'=>$id),CHtml::encode($description), true);
 
    }

	public function actionIndex()
	{
		$this->render('test', array('username' => 'Alex'));
	}
        public function actionParent()
	{
            
            $model=new User;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
                    
                      $post = $_POST['User'];
                    
                    $model->createdAt          = date("Y-m-d H:i:s");
                    $model->lastModifiedAt     = date("Y-m-d H:i:s");
                    $post["password"]          = md5($post["password"]);
                    $model->enabled           = "N";
                    $model->registeredFromWeb = "S";
                    $model->activationCode    = Yii::app()->getSecurityManager()->generateRandomString(5);
                    
                    
                    
			$model->attributes=$post;
			if($model->save())
				$this->redirect('registerSuccess');
		}

		$this->render('parent',array(
			'model'=>$model,
		));
                
		
	}
        public function actionKindergarten()
	{
		$this->render('kindergarten');
	}
        public function actionBabysitter()
	{
		$this->render('babysitter');
	}
        

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
        
        
        public function actionActivation()
	{
		 $model=new User;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
                    
                      $post = $_POST['User'];
                      
                     $activationCode = $post["activationCode"];
                     $email          = $post["email"];
                     
                     $model  = User::model()->find('activationCode=:activationCode and email=:email'
                             ,array(":activationCode"=>$activationCode,":email"=>$email));
                     
                     
                     
                     if($model){
                         
                         $id = $model->id;
                         
                         $model->attributes = array("enabled"=>"S");
                        if($model->save())
				$this->redirect('activationSuccess');
                     }
                      
                    
                    
		}

		$this->render('activation',array(
			'model'=>$model,
		));
                
	}
        
        
        public function actionRegisterSuccess()
	{
		$this->render('registerSuccess');
	}
        
         public function actionActivationSuccess()
	{
		$this->render('activationSuccess.twig');
	}
}