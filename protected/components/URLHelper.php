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
   
  public static function getURLAdminUser($action){
       return  Yii::app()->baseUrl . "/adminUser/".$action;
   }
   public static function getURLRAKindergartenManagePhotos(){
       return  Yii::app()->baseUrl . "/kindergartenManager/photos";
   }
   public static function getURLRAKindergartenManageNews(){
       return  Yii::app()->baseUrl . "/kindergartenManager/news";
   }
   public static function getURLRAKindergartenManageBooks(){
       return  Yii::app()->baseUrl . "/kindergartenManager/books";
   }
   
    public static function getURLRADashboard($manager){
       return  Yii::app()->baseUrl . "/".$manager."/index";
   }
   
   public static function getURLRAParentManageBooks(){
       return  Yii::app()->baseUrl . "/parentManager/books";
   }
   public static function getURLRAProfile(){
       return  Yii::app()->baseUrl . "/user/profile";
   }
   public static function getURLRAChangePassword(){
       return  Yii::app()->baseUrl . "/user/changePassword";
   }
   
   
   public static function getURLRegisterIntro(){
       return  Yii::app()->baseUrl . "/site/register";
   }
   
   
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
    public static function getURLLogout(){
       return  Yii::app()->baseUrl . "/user/logout";
   }
   
   public static function getURLGetProvincesForKindergarten($addBaseUrl=true){
       if($addBaseUrl)
           return  Yii::app()->baseUrl . "/user/getProvincesForKindergarten";
       
       return   "/user/getProvincesForKindergarten";
       
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
   
   public static function getURLGetCitiesForKindergarten($addBaseUrl=true){
        if($addBaseUrl)
           return  Yii::app()->baseUrl . "/user/getCitiesForKindergarten";
       
       return   "/user/getCitiesForKindergarten";
       
       

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
   public static function getURLResetPassword($addBaseUrl=true,$addHost=false){
       if($addBaseUrl){
           if($addHost){
               return  Yii::app()->getBaseUrl(true) . "/user/resetPassword";
           } 
           return  Yii::app()->baseUrl . "/user/resetPassword";
       }
       
       return  "user/resetPassword";
       
   }
}
