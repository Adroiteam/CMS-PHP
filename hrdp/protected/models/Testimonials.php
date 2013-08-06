<?php

/**
 * This is the model class for table "testimonials".
 *
 * The followings are the available columns in table 'testimonials':
 * @property integer $testimonial_id
 * @property string $organization
 * @property string $posthosting
 * @property string $testimonial
 * @property string $author
 */
class Testimonials extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Testimonials the static model class
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
		return 'testimonials';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('organization, posthosting, testimonial, author', 'required'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('testimonial_id, organization, posthosting, testimonial, author', 'safe', 'on'=>'search'),
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
			'testimonial_id' => 'Testimonial',
			'organization' => 'Organization',
			'posthosting' => 'Posthosting',
			'testimonial' => 'Testimonial',
			'author' => 'Author',
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

		$criteria->compare('testimonial_id',$this->testimonial_id);
		$criteria->compare('organization',$this->organization,true);
		$criteria->compare('posthosting',$this->posthosting,true);
		$criteria->compare('testimonial',$this->testimonial,true);
		$criteria->compare('author',$this->author,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}