<?php

/**
 * This is the model class for table "kindergarten_gallery".
 *
 * The followings are the available columns in table 'kindergarten_gallery':
 * @property integer $id
 * @property integer $kinderGartenId
 * @property string $title
 * @property string $picture
 */
class KindergartenGallery extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kindergarten_gallery';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title', 'required'),
			array('kinderGartenId', 'numerical', 'integerOnly'=>true),
			array('title, picture', 'length', 'max'=>70),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, kinderGartenId, title, picture', 'safe', 'on'=>'search'),
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
			'kinderGartenId' => 'Kinder Garten',
			'title' => 'Title',
			'picture' => 'Picture',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('picture',$this->picture,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return KindergartenGallery the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
