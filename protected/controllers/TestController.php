<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TestMailController
 *
 * @author francesco
 */
class TestController extends Controller {
    public function actionIndex(){
        $this->SendMail();
        
        $bean = new stdClass();
        $bean->SMTP=  ini_get("SMTP");
        //print_r(ini_get_all());
        $this->render('index',array('bean'=>$bean));
        
    }
    private function SendMail()
    {   
        $message            = new YiiMailMessage;
           //this points to the file test.php inside the view path
        $message->view = "test";
        //$message->view = "after_register_success";
        
        $bean = new stdClass();
        $bean->name="Francesco";
        $sid                 = 1;
        //$criteria            = new CDbCriteria();
        //$criteria->condition = "studentID=".$sid."";            
        //$studModel1          = Student::model()->findByPk($sid);        
        //$params              = array('myMail'=>$studModel1);
        $params              = array('bean'=>$bean);
        $message->subject    = 'My TestSubject';
        $message->setBody($params, 'text/html');                
        $message->addTo('fprotano@yahoo.com');
        $message->from = 'francesco.protano@gmail.com';   
        
        print_r( $message->message->getBody());
        
        
        //Yii::app()->mail->send($message);       
    }
}
