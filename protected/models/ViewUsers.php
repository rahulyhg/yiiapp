<?php

/**
 * This is the model class for table "view_users".
 *
 * The followings are the available columns in table 'view_users':
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
 * @property integer $mobileNo
 * @property integer $landLine
 * @property string $alternativeNo
 * @property string $facebookUrl
 * @property string $skypeId
 * @property string $googleIM
 * @property string $yahooIM
 * @property integer $visibility
 * @property integer $casteId
 * @property string $caste
 * @property integer $religionId
 * @property string $religion
 * @property integer $countryId
 * @property string $country
 * @property integer $stateId
 * @property string $state
 * @property integer $distictId
 * @property string $district
 * @property integer $placeId
 * @property string $place
 * @property integer $mobilePhone
 * @property integer $landPhone
 * @property integer $intercasteable
 * @property integer $createdBy
 * @property integer $maritalStatus
 * @property string $heightId
 * @property integer $weight
 * @property integer $bodyType
 * @property integer $complexion
 * @property integer $physicalStatus
 * @property integer $ageFrom
 * @property integer $ageTo
 * @property integer $partnerStatus
 * @property integer $haveChildren
 * @property integer $heightFrom
 * @property integer $heightTo
 * @property integer $partnerPhysicalStatus
 * @property integer $partnerReligion
 * @property integer $partnerCaste
 * @property integer $manglik
 * @property string $star
 * @property string $eatingHabits
 * @property string $drinkingHabits
 * @property string $smokingHabits
 * @property string $languages
 * @property string $countries
 * @property string $states
 * @property string $districts
 * @property string $places
 * @property string $citizenship
 * @property string $occupation
 * @property integer $annualIncome
 * @property string $partnerDescription
 */
class ViewUsers extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ViewUsers the static model class
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
		return 'view_users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('motherTounge, active, handicapped, highlighted, userType, mobileNo, landLine, visibility, casteId, religionId, countryId, stateId, distictId, placeId, mobilePhone, landPhone, intercasteable, createdBy, maritalStatus, weight, bodyType, complexion, physicalStatus, ageFrom, ageTo, partnerStatus, haveChildren, heightFrom, heightTo, partnerPhysicalStatus, partnerReligion, partnerCaste, manglik, annualIncome', 'numerical', 'integerOnly'=>true),
			array('userId, alternativeNo, heightId', 'length', 'max'=>20),
			array('marryId, emailId, password', 'length', 'max'=>100),
			array('name, caste, religion, country, state, district, place', 'length', 'max'=>250),
			array('gender', 'length', 'max'=>1),
			array('facebookUrl, skypeId, googleIM, yahooIM', 'length', 'max'=>255),
			array('dob, createdOn, star, eatingHabits, drinkingHabits, smokingHabits, languages, countries, states, districts, places, citizenship, occupation, partnerDescription', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('userId, marryId, emailId, password, name, dob, gender, motherTounge, createdOn, active, handicapped, highlighted, userType, mobileNo, landLine, alternativeNo, facebookUrl, skypeId, googleIM, yahooIM, visibility, casteId, caste, religionId, religion, countryId, country, stateId, state, distictId, district, placeId, place, mobilePhone, landPhone, intercasteable, createdBy, maritalStatus, heightId, weight, bodyType, complexion, physicalStatus, ageFrom, ageTo, partnerStatus, haveChildren, heightFrom, heightTo, partnerPhysicalStatus, partnerReligion, partnerCaste, manglik, star, eatingHabits, drinkingHabits, smokingHabits, languages, countries, states, districts, places, citizenship, occupation, annualIncome, partnerDescription', 'safe', 'on'=>'search'),
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
			'mobileNo' => 'Mobile No',
			'landLine' => 'Land Line',
			'alternativeNo' => 'Alternative No',
			'facebookUrl' => 'Facebook Url',
			'skypeId' => 'Skype',
			'googleIM' => 'Google Im',
			'yahooIM' => 'Yahoo Im',
			'visibility' => 'Visibility',
			'casteId' => 'Caste',
			'caste' => 'Caste',
			'religionId' => 'Religion',
			'religion' => 'Religion',
			'countryId' => 'Country',
			'country' => 'Country',
			'stateId' => 'State',
			'state' => 'State',
			'distictId' => 'Distict',
			'district' => 'District',
			'placeId' => 'Place',
			'place' => 'Place',
			'mobilePhone' => 'Mobile Phone',
			'landPhone' => 'Land Phone',
			'intercasteable' => 'Intercasteable',
			'createdBy' => 'Created By',
			'maritalStatus' => 'Marital Status',
			'heightId' => 'Height',
			'weight' => 'Weight',
			'bodyType' => 'Body Type',
			'complexion' => 'Complexion',
			'physicalStatus' => 'Physical Status',
			'ageFrom' => 'Age From',
			'ageTo' => 'Age To',
			'partnerStatus' => 'Partner Status',
			'haveChildren' => 'Have Children',
			'heightFrom' => 'Height From',
			'heightTo' => 'Height To',
			'partnerPhysicalStatus' => 'Partner Physical Status',
			'partnerReligion' => 'Partner Religion',
			'partnerCaste' => 'Partner Caste',
			'manglik' => 'Manglik',
			'star' => 'Star',
			'eatingHabits' => 'Eating Habits',
			'drinkingHabits' => 'Drinking Habits',
			'smokingHabits' => 'Smoking Habits',
			'languages' => 'Languages',
			'countries' => 'Countries',
			'states' => 'States',
			'districts' => 'Districts',
			'places' => 'Places',
			'citizenship' => 'Citizenship',
			'occupation' => 'Occupation',
			'annualIncome' => 'Annual Income',
			'partnerDescription' => 'Partner Description',
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
		$criteria->compare('mobileNo',$this->mobileNo);
		$criteria->compare('landLine',$this->landLine);
		$criteria->compare('alternativeNo',$this->alternativeNo,true);
		$criteria->compare('facebookUrl',$this->facebookUrl,true);
		$criteria->compare('skypeId',$this->skypeId,true);
		$criteria->compare('googleIM',$this->googleIM,true);
		$criteria->compare('yahooIM',$this->yahooIM,true);
		$criteria->compare('visibility',$this->visibility);
		$criteria->compare('casteId',$this->casteId);
		$criteria->compare('caste',$this->caste,true);
		$criteria->compare('religionId',$this->religionId);
		$criteria->compare('religion',$this->religion,true);
		$criteria->compare('countryId',$this->countryId);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('stateId',$this->stateId);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('distictId',$this->distictId);
		$criteria->compare('district',$this->district,true);
		$criteria->compare('placeId',$this->placeId);
		$criteria->compare('place',$this->place,true);
		$criteria->compare('mobilePhone',$this->mobilePhone);
		$criteria->compare('landPhone',$this->landPhone);
		$criteria->compare('intercasteable',$this->intercasteable);
		$criteria->compare('createdBy',$this->createdBy);
		$criteria->compare('maritalStatus',$this->maritalStatus);
		$criteria->compare('heightId',$this->heightId,true);
		$criteria->compare('weight',$this->weight);
		$criteria->compare('bodyType',$this->bodyType);
		$criteria->compare('complexion',$this->complexion);
		$criteria->compare('physicalStatus',$this->physicalStatus);
		$criteria->compare('ageFrom',$this->ageFrom);
		$criteria->compare('ageTo',$this->ageTo);
		$criteria->compare('partnerStatus',$this->partnerStatus);
		$criteria->compare('haveChildren',$this->haveChildren);
		$criteria->compare('heightFrom',$this->heightFrom);
		$criteria->compare('heightTo',$this->heightTo);
		$criteria->compare('partnerPhysicalStatus',$this->partnerPhysicalStatus);
		$criteria->compare('partnerReligion',$this->partnerReligion);
		$criteria->compare('partnerCaste',$this->partnerCaste);
		$criteria->compare('manglik',$this->manglik);
		$criteria->compare('star',$this->star,true);
		$criteria->compare('eatingHabits',$this->eatingHabits,true);
		$criteria->compare('drinkingHabits',$this->drinkingHabits,true);
		$criteria->compare('smokingHabits',$this->smokingHabits,true);
		$criteria->compare('languages',$this->languages,true);
		$criteria->compare('countries',$this->countries,true);
		$criteria->compare('states',$this->states,true);
		$criteria->compare('districts',$this->districts,true);
		$criteria->compare('places',$this->places,true);
		$criteria->compare('citizenship',$this->citizenship,true);
		$criteria->compare('occupation',$this->occupation,true);
		$criteria->compare('annualIncome',$this->annualIncome);
		$criteria->compare('partnerDescription',$this->partnerDescription,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}