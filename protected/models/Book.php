<?php

/**
 * This is the model class for table "book".
 *
 * The followings are the available columns in table 'book':
 * @property integer $id
 * @property string $createdAt
 * @property string $lastModifiedAt
 * @property integer $userId
 * @property integer $kinderGartenId
 * @property integer $bookStatusId
 * @property string $notes
 * @property string $source
 * @property string $longitude
 * @property string $latitude
 */
class Book extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'book';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bookStatusId, source', 'required'),
			array('userId, kinderGartenId, bookStatusId', 'numerical', 'integerOnly'=>true),
			array('source', 'length', 'max'=>3),
			array('longitude, latitude', 'length', 'max'=>70),
			array('createdAt, lastModifiedAt, notes', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, createdAt, lastModifiedAt, userId, kinderGartenId, bookStatusId, notes, source, longitude, latitude', 'safe', 'on'=>'search'),
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
			'createdAt' => 'Created At',
			'lastModifiedAt' => 'Last Modified At',
			'userId' => 'User',
			'kinderGartenId' => 'Kinder Garten',
			'bookStatusId' => 'Book Status',
			'notes' => 'Notes',
			'source' => 'Source',
			'longitude' => 'Longitude',
			'latitude' => 'Latitude',
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
		$criteria->compare('createdAt',$this->createdAt,true);
		$criteria->compare('lastModifiedAt',$this->lastModifiedAt,true);
		$criteria->compare('userId',$this->userId);
		$criteria->compare('kinderGartenId',$this->kinderGartenId);
		$criteria->compare('bookStatusId',$this->bookStatusId);
		$criteria->compare('notes',$this->notes,true);
		$criteria->compare('source',$this->source,true);
		$criteria->compare('longitude',$this->longitude,true);
		$criteria->compare('latitude',$this->latitude,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Book the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
