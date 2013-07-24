<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $designation
 * @property string $projects
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
			array('name, email, password, designation, projects, date_of_birth, address, martial_status, phone_no', 'required'),
			array('phone_no', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, email, password, designation, projects, date_of_birth, address, martial_status, phone_no', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'email' => 'Email',
			'password' => 'Password',
			'designation' => 'Designation',
			'projects' => 'Projects',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('designation',$this->designation,true);
		$criteria->compare('projects',$this->projects,true);
		$criteria->compare('date_of_birth',$this->date_of_birth,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('martial_status',$this->martial_status,true);
		$criteria->compare('phone_no',$this->phone_no);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}