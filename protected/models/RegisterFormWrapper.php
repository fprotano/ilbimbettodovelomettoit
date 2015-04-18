<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RegisterFormWrapper
 *
 * @author francesco
 */
class RegisterFormWrapper extends CFormModel {
   public $passwordRepeat;
   /**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('passwordRepeat', 'required'),
			
		);
	}
   /**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'passwordRepeat'=>Yii::t('app','models.registerformwrapper.passwordRepeat'),
		);
	}
        

}
