<?php

/**
 * This is the model class for table "userpersonaldetails".
 *
 * The followings are the available columns in table 'userpersonaldetails':
 * @property string $personalDetailsId
 * @property string $userId
 * @property integer $casteId
 * @property integer $religion
 * @property integer $countryId
 * @property integer $stateId
 * @property integer $distictId
 * @property integer $place
 * @property integer $mobilePhone
 * @property integer $landPhone
 * @property integer $intercasteable
 * @property integer $createdBy
 * @property integer $maritalStatus
 *
 * The followings are the available model relations:
 * @property Users $user
 */
class Userpersonaldetails extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Userpersonaldetails the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'userpersonaldetails';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('casteId, religion, countryId, stateId, distictId, place, mobilePhone, landPhone, intercasteable, createdBy, maritalStatus', 'numerical', 'integerOnly'=>true),
			array('userId', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('personalDetailsId, userId, casteId, religion, countryId, stateId, distictId, place, mobilePhone, landPhone, intercasteable, createdBy, maritalStatus', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'Users', 'userId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'personalDetailsId' => 'Personal Details',
			'userId' => 'User',
			'casteId' => 'Caste',
			'religion' => 'Religion',
			'countryId' => 'Country',
			'stateId' => 'State',
			'distictId' => 'Distict',
			'place' => 'Place',
			'mobilePhone' => 'Mobile Phone',
			'landPhone' => 'Land Phone',
			'intercasteable' => 'Intercasteable',
			'createdBy' => 'Created By',
			'maritalStatus' => 'Marital Status',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('personalDetailsId',$this->personalDetailsId,true);
		$criteria->compare('userId',$this->userId,true);
		$criteria->compare('casteId',$this->casteId);
		$criteria->compare('religion',$this->religion);
		$criteria->compare('countryId',$this->countryId);
		$criteria->compare('stateId',$this->stateId);
		$criteria->compare('distictId',$this->distictId);
		$criteria->compare('place',$this->place);
		$criteria->compare('mobilePhone',$this->mobilePhone);
		$criteria->compare('landPhone',$this->landPhone);
		$criteria->compare('intercasteable',$this->intercasteable);
		$criteria->compare('createdBy',$this->createdBy);
		$criteria->compare('maritalStatus',$this->maritalStatus);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
}