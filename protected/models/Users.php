<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property string $userId
 * @property string $marryId
 * @property string $emailId
 * @property string $password
 * @property string $name
 * @property string $dob
 * @property string $gender
 * @property integer $motherTounge
 * @property string $createdOn
 * @property integer $active
 * @property integer $handicapped
 * @property integer $highlighted
 * @property integer $userType
 *
 * The followings are the available model relations:
 * @property Address[] $addresses
 * @property Documents[] $documents
 * @property Education[] $educations
 * @property Familyprofile[] $familyprofiles
 * @property Habit[] $habits
 * @property Hobiesandinterests[] $hobiesandinterests
 * @property Horoscopes[] $horoscopes
 * @property Partnerpreferences[] $partnerpreferences
 * @property Photos[] $photoses
 * @property Physicaldetails[] $physicaldetails
 * @property Reference[] $references
 * @property Usercontactdetails[] $usercontactdetails
 * @property Userloggeddetails[] $userloggeddetails
 * @property Userpersonaldetails[] $userpersonaldetails
 */
class Users extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Users the static model class
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
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('motherTounge, active, handicapped, highlighted, userType', 'numerical', 'integerOnly'=>true),
			array('marryId, emailId, password', 'length', 'max'=>100),
			array('name', 'length', 'max'=>250),
			array('gender', 'length', 'max'=>1),
			array('dob, createdOn', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('userId, marryId, emailId, password, name, dob, gender, motherTounge, createdOn, active, handicapped, highlighted, userType', 'safe', 'on'=>'search'),
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
			'addresses' => array(self::HAS_MANY, 'Address', 'userId'),
			'documents' => array(self::HAS_MANY, 'Documents', 'userId'),
			'educations' => array(self::HAS_MANY, 'Education', 'userId'),
			'familyprofiles' => array(self::HAS_MANY, 'Familyprofile', 'userId'),
			'habits' => array(self::HAS_MANY, 'Habit', 'userId'),
			'hobiesandinterests' => array(self::HAS_MANY, 'Hobiesandinterests', 'userId'),
			'horoscopes' => array(self::HAS_MANY, 'Horoscopes', 'userId'),
			'partnerpreferences' => array(self::HAS_MANY, 'Partnerpreferences', 'userId'),
			'photoses' => array(self::HAS_MANY, 'Photos', 'userId'),
			'physicaldetails' => array(self::HAS_MANY, 'Physicaldetails', 'userId'),
			'references' => array(self::HAS_MANY, 'Reference', 'userId'),
			'usercontactdetails' => array(self::HAS_MANY, 'Usercontactdetails', 'userId'),
			'userloggeddetails' => array(self::HAS_MANY, 'Userloggeddetails', 'userId'),
			'userpersonaldetails' => array(self::HAS_MANY, 'Userpersonaldetails', 'userId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'userId' => 'User',
			'marryId' => 'Marry',
			'emailId' => 'Email',
			'password' => 'Password',
			'name' => 'Name',
			'dob' => 'Dob',
			'gender' => 'Gender',
			'motherTounge' => 'Mother Tounge',
			'createdOn' => 'Created On',
			'active' => 'Active',
			'handicapped' => 'Handicapped',
			'highlighted' => 'Highlighted',
			'userType' => 'User Type',
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

		$criteria->compare('userId',$this->userId,true);
		$criteria->compare('marryId',$this->marryId,true);
		$criteria->compare('emailId',$this->emailId,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('dob',$this->dob,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('motherTounge',$this->motherTounge);
		$criteria->compare('createdOn',$this->createdOn,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('handicapped',$this->handicapped);
		$criteria->compare('highlighted',$this->highlighted);
		$criteria->compare('userType',$this->userType);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}