<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MailHelper
 *
 * @author francesco
 */
class MailHelper {
    
    public static $defaultFrom='francesco.protano@gmail.com';
    public static  function sendAfterRegisterSuccess($bean,$to)
    {   
        $message            = new YiiMailMessage;
           
        $message->view = "after_register_success";
        
        $params              = array('bean'=>$bean);
        $message->subject    = Yii::t('app','mail.subject.after_registered');
        
        $message->setBody($params, 'text/html');                
        $message->addTo($to);
        $message->from = self::$defaultFrom; 
        
//       
//       // To send HTML mail, the Content-type header must be set
//        $headers  = 'MIME-Version: 1.0' . "\r\n";
//        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//
//        $headers .= "To: $to <$to>\n";
//        $headers .= "From: ". self::$defaultFrom. " <". self::$defaultFrom. ">\n";
//   
//        mail($to, $message->subject, $message->message->getBody(),$headers);

        self::send($to,$message->subject,$message->message->getBody());

    }
    
    
    public static  function sendAfterResetPassword($bean,$to)
    {   
        $message            = new YiiMailMessage;
           
        $message->view = "after_reset_password";
        
        $params              = array('bean'=>$bean);
        $message->subject    = Yii::t('app','mail.subject.after_reset_password');
        $message->setBody($params, 'text/html');                
        $message->addTo($to);
    
        self::send($to,$message->subject,$message->message->getBody());

    }
    
    public static  function sendContact($headers, $subject, $to)
    {       
        $message = new YiiMailMessage;
        $message->setBody($headers, 'text/html');
        $message->subject = $subject;
        $message->addTo($to);
        $message->from = self::$defaultFrom;  
        
        self::send($to,$message->subject,$message->message->getBody());
    }
    
    public static  function send($to,$subject,$body)
    {   
        
       // To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= "To: $to <$to>\n";
        $headers .= "From: ". self::$defaultFrom. " <". self::$defaultFrom. ">\n";
        mail($to, $subject, $body,$headers);      

    }
}
