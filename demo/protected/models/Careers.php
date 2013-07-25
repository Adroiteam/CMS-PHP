<?php

/**
 * This is the model class for table "careers".
 *
 * The followings are the available columns in table 'careers':
 * @property integer $job_id
 * @property string $job_title
 * @property string $job_description
 * @property string $CV
 */
class Careers extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Careers the static model class
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
		return 'careers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('job_title, job_description, CV', 'required'),
			array('job_title', 'length', 'max'=>500),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('job_id, job_title, job_description, CV', 'safe', 'on'=>'search'),
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
			'job_id' => 'Job',
			'job_title' => 'Job Title',
			'job_description' => 'Job Description',
			'CV' => 'Cv',
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

		$criteria->compare('job_id',$this->job_id);
		$criteria->compare('job_title',$this->job_title,true);
		$criteria->compare('job_description',$this->job_description,true);
		$criteria->compare('CV',$this->CV,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}