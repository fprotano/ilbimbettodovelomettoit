<?php

/**
 * This is the model class for table "feedback".
 *
 * The followings are the available columns in table 'feedback':
 * @property integer $id
 * @property string $createdAt
 * @property integer $senderUserId
 * @property integer $receiverUserId
 * @property integer $vote
 * @property string $notes
 * @property string $source
 * @property string $longitude
 * @property string $latitude
 */
class Feedback extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'feedback';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('source', 'required'),
			array('senderUserId, receiverUserId, vote', 'numerical', 'integerOnly'=>true),
			array('source', 'length', 'max'=>3),
			array('longitude, latitude', 'length', 'max'=>70),
			array('createdAt, notes', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, createdAt, senderUserId, receiverUserId, vote, notes, source, longitude, latitude', 'safe', 'on'=>'search'),
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
			'senderUserId' => 'Sender User',
			'receiverUserId' => 'Receiver User',
			'vote' => 'Vote',
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
		$criteria->compare('senderUserId',$this->senderUserId);
		$criteria->compare('receiverUserId',$this->receiverUserId);
		$criteria->compare('vote',$this->vote);
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
	 * @return Feedback the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
