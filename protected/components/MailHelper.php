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
        $message->subject    = 'Registrazione avvenuta con successo';
        $message->setBody($params, 'text/html');                
        $message->addTo($to);
        $message->from = self::$defaultFrom;   
        
        
       // Yii::app()->mail->send($message);  
       
       // To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        $headers .= "To: $to <$to>\n";
        $headers .= "From: ". self::$defaultFrom. " <". self::$defaultFrom. ">\n";
        //$header .= "X-Mailer: Php\n\n";

        mail($to, $message->subject, $message->message->getBody(),$headers);
       

    }
}
