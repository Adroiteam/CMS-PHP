<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $userid
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $designation
 * @property string $date_of_birth
 * @property string $address
 * @property string $martial_status
 * @property integer $phone_no
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
			array('email, username, password, designation, date_of_birth, address, martial_status, phone_no', 'required'),
			array('phone_no', 'numerical', 'integerOnly'=>true),
			array('email, username, password, designation, martial_status', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('userid, email, username, password, designation, date_of_birth, address, martial_status, phone_no', 'safe', 'on'=>'search'),
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
			'userid' => 'Userid',
			'email' => 'Email',
			'username' => 'Username',
			'password' => 'Password',
			'designation' => 'Designation',
			'date_of_birth' => 'Date Of Birth',
			'address' => 'Address',
			'martial_status' => 'Martial Status',
			'phone_no' => 'Phone No',
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

		$criteria->compare('userid',$this->userid);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('designation',$this->designation,true);
		$criteria->compare('date_of_birth',$this->date_of_birth,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('martial_status',$this->martial_status,true);
		$criteria->compare('phone_no',$this->phone_no);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}