<?php

class SiteController extends Controller
{
    
    public $bodyTitle="";
    public $bodyImage="";
    function getBodyTitle() {
        return $this->bodyTitle;
    }

    function getBodyImage() {
        return $this->bodyImage;
    }

    function setBodyTitle($bodyTitle) {
        $this->bodyTitle = $bodyTitle;
    }

    function setBodyImage($bodyImage) {
        $this->bodyImage = $bodyImage;
    }

        
	/**
	 * Declares class-based actions.
	 */
//	public function actions()
//	{
//		return array(
//			// captcha action renders the CAPTCHA image displayed on the contact page
//			'captcha'=>array(
//				'class'=>'CCaptchaAction',
//				'backColor'=>0xFFFFFF,
//			),
//			// page action renders "static" pages stored under 'protected/views/site/pages'
//			// They can be accessed via: index.php?r=site/page&view=FileName
//			'page'=>array(
//				'class'=>'CViewAction',
//			),
//		);
//	}
        
        public function actionSetLanguage()
	{
            
           $lang = $_GET["language"];
            
            Yii::app()->language=$lang;
            
           $this->redirect(Yii::app()->baseUrl);
            
            
	}
       
        public function actionFrontpage()
	{
            $this->layout="home";
            $this->render('frontpage');
	}
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
                $this->layout="home";
		$this->render('index');
	}
        public function actionAbout()
	{
            
             $this->layout="internal";
		$this->render('about');
	}
        
         public function actionRegister()
	{
            
             $this->layout="fullPage";
             $this->render('register');
	}
        
        
        public function actionTermsAndConditions()
	{
                $this->layout="internal";
		$this->render('termsAndConditions');
	}
        
        public function actionIntroKindergarten()
	{
            $this->layout="internal";
		$this->render('introKindergarten');
	}
        public function actionIntroParent()
	{
            $this->layout="internal";
		$this->render('introParent');
	}
        public function actionIntroBabysitter()
	{
            $this->layout="internal";
            $this->render('introBabysitter');
	}
        public function actionContacts()
	{            
            $this->layout="internal";
            $model = new ContactForm; /*ContactsForm; */
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				
                            
                                
                            
                               
                                MailHelper::sendContact($model);                           
                                Yii::app()->user->setFlash('contact',Yii::t('app','flash.contacts_success'));
                                
                                $this->refresh();
                                
                             
			}
		}
                
		$this->render('contacts',array('model'=>$model));
                
	}
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	

	/**
	 * Displays the login page
	 */
	public function actionUserLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

        
        public function actionLogin()
	{
            
            $this->redirect(array('user/login'));
//		$model=new LoginForm;
//                $model->username="cicco";
//		// if it is ajax validation request
//		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
//		{
//			echo CActiveForm::validate($model);
//			Yii::app()->end();
//		}
//
//		// collect user input data
//		if(isset($_POST['LoginForm']))
//		{
//			$model->attributes=$_POST['LoginForm'];
//			// validate user input and redirect to the previous page if valid
//			if($model->validate() && $model->login())
//				$this->redirect(Yii::app()->user->returnUrl);
//		}
//		// display the login form
//		$this->renderPartial('backoffice/login',array('model'=>$model));
	}
	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}