<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of URLHelper
 *
 * @author francesco
 */
class URLHelper {
   
   public static function getURLRegisterKindergarten(){
       return  Yii::app()->baseUrl . "/user/registerKindergarten";
   }
   public static function getURLRegisterParent(){
       return  Yii::app()->baseUrl . "/user/registerParent";
   }
   public static function getURLRegisterBabysitter(){
       return  Yii::app()->baseUrl . "/user/registerBabysitter";
   }
   
   public static function getURLLogin(){
       return  Yii::app()->baseUrl . "/user/login";
   }
   
   public static function getURLGetProvinces($addBaseUrl=true){
       if($addBaseUrl)
           return  Yii::app()->baseUrl . "/user/getProvinces";
       
       return   "/user/getProvinces";
       
   }
   public static function getURLGetCities($addBaseUrl=true){
        if($addBaseUrl)
           return  Yii::app()->baseUrl . "/user/getCities";
       
       return   "/user/getCities";
       
       

   }
   
   public static function getURLActivation($addBaseUrl=true,$addHost=false){
       if($addBaseUrl){
           if($addHost){
               return  Yii::app()->getBaseUrl(true) . "/user/activation";
           } 
           return  Yii::app()->baseUrl . "/user/activation";
       }
       
       return  "user/activation";
       
   }
   public static function getURLAutomaticActivation($addBaseUrl=true,$addHost=false){
       
       if($addBaseUrl){
           if($addHost){
               return  Yii::app()->getBaseUrl(true) . "/user/automaticActivation";
           } 
           return  Yii::app()->baseUrl . "/user/automaticActivation";
       }
       
       return  "user/automaticActivation";
       
       
       
   }
}
