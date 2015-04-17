<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminDAO
 *
 * @author Sogei
 */
class AdminDAO {
    
    public static function findByEmailAndPassword($email,$password){
        $model=Admin::model()->findByAttributes(array("email"=>$email,"password"=>md5($password)));
        return $model;
        
    }
}
