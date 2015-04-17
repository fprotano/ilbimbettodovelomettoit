<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property integer $profileId
 * @property string $email
 * @property string $password
 * @property string $enabled
 * @property string $name
 * @property string $surname
 * @property string $alternativeEmail
 * @property integer $questionId
 * @property string $answer
 * @property integer $regionId
 * @property string $provinceCode
 * @property integer $cityId
 * @property string $address
 * @property string $site
 * @property string $activationCode
 * @property string $registeredFromWeb
 */
class User extends CActiveRecord
{
    
     //private $activationCode;

//     public function getNewProperty(){
//         return $this->_newProperty;
//     }
//
//     public function setNewProperty($newProperty){
//         $this->_newProperty = $newProperty;
//     }
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
            
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('profileId,email, password, enabled, createdAt, lastModifiedAt, name, surname, alternativeEmail, questionId, regionId, provinceCode, cityId', 'required'),
			array('questionId, regionId, cityId', 'numerical', 'integerOnly'=>true),
			array('email, password, alternativeEmail', 'length', 'max'=>70),
			array('enabled', 'length', 'max'=>1),
			array('name', 'length', 'max'=>20),
			array('surname', 'length', 'max'=>30),
			array('answer', 'length', 'max'=>255),
			array('provinceCode', 'length', 'max'=>2),
			array('address, site', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, email, password, enabled, name, surname, alternativeEmail, questionId, answer, regionId, provinceCode, cityId, address, site', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'email' => Yii::t('app','models.user.email'),
			'password' =>  Yii::t('app','models.user.password'),
			'enabled' =>  Yii::t('app','models.user.enabled'),
			'name' =>  Yii::t('app','models.user.name'),
			'surname' =>  Yii::t('app','models.user.surname'),
			'alternativeEmail' =>  Yii::t('app','models.user.alternativeEmail'),
			'questionId' => Yii::t('app','models.user.questionId'),
			'answer' =>  Yii::t('app','models.user.answer'),
			'regionId' =>  Yii::t('app','models.user.regionId'),
			'provinceCode' =>  Yii::t('app','models.user.provinceCode'),
			'cityId' =>  Yii::t('app','models.user.cityId'),
			'address' =>  Yii::t('app','models.user.address'),
			'site' =>  Yii::t('app','models.user.site'),
                        'activationCode' =>  Yii::t('app','models.user.activationCode'),
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('enabled',$this->enabled,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('surname',$this->surname,true);
		$criteria->compare('alternativeEmail',$this->alternativeEmail,true);
                $criteria->compare('activationCode',$this->activationCode,true);
		$criteria->compare('questionId',$this->questionId);
		$criteria->compare('answer',$this->answer,true);
		$criteria->compare('regionId',$this->regionId);
		$criteria->compare('provinceCode',$this->provinceCode,true);
		$criteria->compare('cityId',$this->cityId);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('site',$this->site,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
