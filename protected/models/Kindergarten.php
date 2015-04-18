<?php

/**
 * This is the model class for table "kindergarten".
 *
 * The followings are the available columns in table 'kindergarten':
 * @property integer $id
 * @property integer $kinderGartenId
 * @property string $name
 * @property integer $regionId
 * @property string $provinceCode
 * @property integer $cityId
 * @property string $shortDescription
 * @property string $longDescription
 * @property string $address
 * @property string $phone
 * @property string $mobile
 * @property integer $initialAvailability
 * @property integer $currentAvailability
 * @property integer $timer
 * @property string $logo
 * @property string $contacts
 * @property integer $joinAmount
 * @property string $joinPeriodRef
 */
class Kindergarten extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kindergarten';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, regionId, provinceCode, cityId, initialAvailability, currentAvailability', 'required'),
			array('kinderGartenId, regionId, cityId, initialAvailability, currentAvailability, timer, joinAmount', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>100),
			array('provinceCode', 'length', 'max'=>2),
			array('address', 'length', 'max'=>150),
			array('phone, mobile', 'length', 'max'=>15),
			array('logo', 'length', 'max'=>70),
			array('contacts', 'length', 'max'=>255),
			array('joinPeriodRef', 'length', 'max'=>1),
			array('shortDescription, longDescription', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, kinderGartenId, name, regionId, provinceCode, cityId, shortDescription, longDescription, address, phone, mobile, initialAvailability, currentAvailability, timer, logo, contacts, joinAmount, joinPeriodRef', 'safe', 'on'=>'search'),
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
			'kinderGartenId' =>  Yii::t('app','models.kindergarten.kinderGartenId'),
			'name' =>  Yii::t('app','models.kindergarten.name'),
			'regionId' =>  Yii::t('app','models.kindergarten.regionId'),
			'provinceCode' =>  Yii::t('app','models.kindergarten.provinceCode'),
			'cityId' =>  Yii::t('app','models.kindergarten.cityId'),
			'shortDescription' =>  Yii::t('app','models.kindergarten.shortDescription'),
			'longDescription' =>  Yii::t('app','models.kindergarten.longDescription'),
			'address' =>  Yii::t('app','models.kindergarten.address'),
			'phone' =>  Yii::t('app','models.kindergarten.phone'),
			'mobile' =>  Yii::t('app','models.kindergarten.mobile'),
			'initialAvailability' =>  Yii::t('app','models.kindergarten.initialAvailability'),
			'currentAvailability' =>  Yii::t('app','models.kindergarten.currentAvailability'),
			'timer' =>  Yii::t('app','models.kindergarten.timer'),
			'logo' =>  Yii::t('app','models.kindergarten.logo'),
			'contacts' =>  Yii::t('app','models.kindergarten.contacts'),
			'joinAmount' =>  Yii::t('app','models.kindergarten.joinAmount'),
			'joinPeriodRef' =>  Yii::t('app','models.kindergarten.joinPeriodRef'),
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
		$criteria->compare('kinderGartenId',$this->kinderGartenId);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('regionId',$this->regionId);
		$criteria->compare('provinceCode',$this->provinceCode,true);
		$criteria->compare('cityId',$this->cityId);
		$criteria->compare('shortDescription',$this->shortDescription,true);
		$criteria->compare('longDescription',$this->longDescription,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('initialAvailability',$this->initialAvailability);
		$criteria->compare('currentAvailability',$this->currentAvailability);
		$criteria->compare('timer',$this->timer);
		$criteria->compare('logo',$this->logo,true);
		$criteria->compare('contacts',$this->contacts,true);
		$criteria->compare('joinAmount',$this->joinAmount);
		$criteria->compare('joinPeriodRef',$this->joinPeriodRef,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kindergarten the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
