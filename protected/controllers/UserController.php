<?php

class UserController extends BaseFrontController
{
	 
    public function actionGetProvincesForKindergarten()
    {
        $this->getProvincesFor('Kindergarten');
 
 
    }

   public function actionGetCitiesForKindergarten()
    {
       
        
      $this->getCitiesFor('Kindergarten');
 
    }
    
    public function actionGetProvinces()
    {
        
        
         $this->getProvincesFor('User');
//        $regionId = $_POST["User"]['regionId'];
//        $list = Province::model()->findAll('regionId = :regionId', array(':regionId'=>$regionId));
//        $list = CHtml::listData($list,'code','description');
//        echo CHtml::tag('option',array('value'=>''),'---', true);
//        foreach($list as $code => $description)
//            echo CHtml::tag('option',array('value'=>$code),CHtml::encode($description), true);
 
 
    }

   public function actionGetCities()
    {
       
        $this->getCitiesFor('User');
//        $provinceCode = $_POST["User"]['provinceCode'];
//        $list = City::model()->findAll('provinceCode = :provinceCode', array(':provinceCode'=>$provinceCode));
//        $list = CHtml::listData($list,'id','description');
//        echo CHtml::tag('option',array('value'=>''),'---', true);
//        foreach($list as $id =>$description)
//            echo CHtml::tag('option',array('value'=>$id),CHtml::encode($description), true);
 
    }
    
    
    private function getProvincesFor($var)
    {
        $regionId = $_POST[$var]['regionId'];
        $list = Province::model()->findAll('regionId = :regionId', array(':regionId'=>$regionId));
        $list = CHtml::listData($list,'code','description');
        echo CHtml::tag('option',array('value'=>''),'---', true);
        foreach($list as $code => $description)
            echo CHtml::tag('option',array('value'=>$code),CHtml::encode($description), true);
 
 
    }
    
     private function getCitiesFor($var)
    {
       
        
        $provinceCode = $_POST[$var]['provinceCode'];
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
            $this->layout="fullPage";
		 $model=new User;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
                    
                    
                    
                      $post = $_POST['User'];
                      
                    
                      
                     $activationCode = $post["activationCode"];
                     $email          = $post["email"];
                     
                     $_model  = User::model()->find('activationCode=:activationCode and email=:email'
                             ,array(":activationCode"=>$activationCode,":email"=>$email));
                     
                     
                     if($_model){
                         
                         $id = $_model->id;
                         
                         $_model->attributes = array("enabled"=>"S");
                        if($_model->save())
				$this->redirect('activationSuccess');
                     }
                      
                    
                    
		}

		$this->render('activation',array(
			'model'=>$model,
		));
                
	}
        
        
        
        public function actionAutomaticActivation($i,$a)
	{
            

		if(isset($i) && isset($a))
		{
                    
                      
                     $_model  = User::model()->find('md5(activationCode)=:activationCode and md5(id)=:id'
                             ,array(":activationCode"=>$a,":id"=>$i));
                     
                     
                     if($_model){
                         
                         
                        $_model->attributes = array("enabled"=>"S");
                        if($_model->save()){
                            $this->redirect('activationSuccess');
                        }
			
                     }
                      
                    
                    
		}

		$this->redirect('activation');
                
	}
        
        
        
        
        public function actionRegisterSuccess()
	{
            $this->layout="internal";
            $this->render('registerSuccess');
	}
        
         public function actionActivationSuccess()
	{
             $this->layout="internal";
             $this->render('activationSuccess');
	}
        
//        public function actionUpdateKindergartenSuccess()
//	{
//             $this->layout="internal";
//             $this->render('activationSuccess');
//	}
        
        public function actionRegisterKindergarten()
	{
            
             $this->registerUser(Profile::$KINDERGARTEN);
		
	}
        
        
         public function actionRegisterParent()
	{
            $this->registerUser(Profile::$PARENT);
	}
        
        
        public function actionRegisterBabysitter()
	{
            
           $this->registerUser(Profile::$BABYSITTER);
                
		
	}
        
        
        private function registerUser($profileId)
	{
            
            $this->layout="fullPage";
            
            $view = "registerKindergarten";
            if($profileId==Profile::$BABYSITTER)
                $view = "registerBabysitter";
            if($profileId==Profile::$PARENT)
                $view = "registerParent";
            
            $model=new User;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
                    
                      $post = $_POST['User'];
                    
                    $model->createdAt          = date("Y-m-d H:i:s");
                    $model->lastModifiedAt     = date("Y-m-d H:i:s");
                    $post["password"]          = md5($post["password"]);
                    $model->enabled            = "N";
                    $model->registeredFromWeb  = "S";
                    $model->profileId          = $profileId;
                    $model->activationCode     = Yii::app()->getSecurityManager()->generateRandomString(5);
                    
                    
                    
			$model->attributes=$post;
			if($model->save()){
                            
                            //Invio la mail
                          $id = md5($model->id);
                          $act = md5($model->activationCode);
                          $bean = new stdClass();
                          $bean->activationURL     = URLHelper::getURLAutomaticActivation(true,true);
                          $bean->activationURL.="?i=".$id."&a=".$act;
                          $bean->activationURLForm = URLHelper::getURLActivation(true,true);
                          $bean->activationCode = $model->activationCode;
                          MailHelper::sendAfterRegisterSuccess($bean, $model->email);
                            
                            
                          $this->redirect('registerSuccess');
                        }
			
		}

		$this->render($view,array(
			'model'=>$model,
		));
                
		
	}
        
        
        
        public function actionAddKindergarten()
	{
             $this->layout="fullPage";
           
            $model=new Kindergarten;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Kindergarten']))
		{
                    
                    $kinderGartenId = YII::app()->session["userId"];
                    
                      $post = $_POST['Kindergarten'];
                    
                    
                    $model->kinderGartendId          = $kinderGartenId;
                    
                    
                    
			$model->attributes=$post;
			if($model->save()){
                            
                            //Invio la mail
//                          $id = md5($model->id);
//                          $act = md5($model->activationCode);
//                          $bean = new stdClass();
//                          $bean->activationURL     = URLHelper::getURLAutomaticActivation(true,true);
//                          $bean->activationURL.="?i=".$id."&a=".$act;
//                          $bean->activationURLForm = URLHelper::getURLActivation(true,true);
//                          $bean->activationCode = $model->activationCode;
//                          MailHelper::sendAfterRegisterSuccess($bean, $model->email);
//                            
                            
                          $this->redirect('dashboard');
                        }
			
		}

		$this->render('addKindergarten',array(
			'model'=>$model,
		));
                
		
	}
        
        
        
        public function actionLogout()
	{
             Yii::app()->user->logout();
             unset(YII::app()->session["userId"]);
             $this->redirect('login'); 
        }
        
         
        public function actionLogin(){
            
            $this->layout="fullPage";
            
            
            $model=new User;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
                    
                      $post = $_POST['User'];
                      
                    
                      
                     $password = $post["password"];
                     $email    = $post["email"];
                     
                     $_model  = User::model()->find('password=:password and email=:email'
                             ,array(":password"=>md5($password),":email"=>$email));
                     
                     
                     if($_model){
                         
                       $id        = $_model->id;
                       $profileId = $_model->profileId;
                       $_model->lastLoggedAt          = date("Y-m-d H:i:s");  
                       
                       $nextAction = "Kindergarten/index";
                       if($profileId==Profile::$BABYSITTER)
                           $nextAction = "Babysitter/index";
                       
                       if($profileId==Profile::$PARENT)
                           $nextAction = "Parent/index";
                       
                        if($_model->save())
                        {
                            if($profileId==Profile::$KINDERGARTEN){
                            //CONTROLLO CHE     
                                 $_kinderGartenModel  = Kindergarten::model()->find('kinderGartenId=:kinderGartenId'
                             ,array(":kinderGartenId"=>$id));
                                 if(!$_kinderGartenModel){
                                     $nextAction = "User/addKindergarten";
                                     
                                 }
                     
                            }
                            
                            
                            
                            YII::app()->session["userId"]=$id;
                            $this->redirect(Yii::app()->baseUrl.'/'. $nextAction);
                        }
			
                     }
                      
		}

		$this->render('login',array(
			'model'=>$model,
		));
                
		
	}
        
}
