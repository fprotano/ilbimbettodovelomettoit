<?php

/**
 * This is the model class for table "news".
 *
 * The followings are the available columns in table 'news':
 * @property integer $id
 * @property string $createdAt
 * @property string $lastModifiedAt
 * @property string $title
 * @property string $abstract
 * @property string $description
 * @property string $picture
 * @property string $attachment
 */
class News extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'news';
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
                        array('picture', 'file', 'types'=>'jpg, gif, png','allowEmpty'=>true),
                        
                    
                        array('attachment', 'file', 'types'=>'pdf, doc, zip','allowEmpty'=>true),
			array('title', 'length', 'max'=>70),
			array('createdAt, lastModifiedAt, abstract, description', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, createdAt, lastModifiedAt, title, abstract, description ', 'safe', 'on'=>'search'),
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
			'title' => 'Title',
			'abstract' => 'Abstract',
			'description' => 'Description',
			'picture' => 'Picture',
			'attachment' => 'Attachment',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('abstract',$this->abstract,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('picture',$this->picture,true);
		$criteria->compare('attachment',$this->attachment,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return News the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
