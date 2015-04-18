<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserDAO
 *
 * @author francesco
 */
class UserDAO {
    public static function emailExists($email,$id=""){
       return  self::emailExistsFor("email",$email,$id);
        
    }
    public static function alternativeEmailExists($email,$id=""){
       return  self::emailExistsFor("alternativeEmail",$email,$id);
        
    }
    private static function emailExistsFor($emailField,$email,$id=""){
       if($id=="")
            $c= User::model()->count($emailField."=:email", array("email"=>$email));
       else
            $c= User::model()->count($emailField."=:email and id<>:id", array("email"=>$email,"id"=>$id));
       
       
       return  ($c>0);
        
    }
}
