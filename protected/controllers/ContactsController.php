<?php

class ContactsController extends Controller
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
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}
        
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
        /*
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
                $this->layout="internal"; 
		$this->render('contacts');
	}
        */


        public function actionIndex()
	{            
            $this->layout="internal";
            $model = new ContacsForm; /*ContactsForm; */
		if(isset($_POST['ContacsForm']))
		{
			$model->attributes=$_POST['ContacsForm'];
			if($model->validate())
			{
				
                                $name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";                
				//mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				
                                /*
                                Yii::import('ext.yii-mail.YiiMailMessage');
                                $message = new YiiMailMessage;
                                $message->setBody($headers, 'text');
                                $message->subject = $subject;
                                $message->addTo('rec.mau66@gmail.com');
                                $message->from = Yii::app()->params['adminEmail'];
                                Yii::app()->mail->send($message);
                                */                                
                                
                                MailHelper::sendContact($headers, $subject, "rec.mau66@gmail.com");                           
                                Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
                                
                                $this->refresh();
                                
                             
			}
		}
                // $this->renderPartial('contacts');
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
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Faq the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=ContactsForm::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}


}