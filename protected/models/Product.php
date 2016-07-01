<?php

/**
 * This is the model class for table "product".
 *
 * The followings are the available columns in table 'product':
 * @property integer $id
 * @property string $name
 * @property string $price
 * @property string $description
 * @property string $saleprice
 * @property string $image
 * @property integer $catalogid
 * @property string $datecreate
 * @property string $att_1
 * @property string $att_2
 * @property string $att_3
 */
class Product extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
            array('name,price', 'required'),
			array('price', 'required'),
			array('catalogid', 'numerical', 'integerOnly'=>true),
			array('name, price, saleprice, image', 'length', 'max'=>255),
			array('description, datecreate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, price, description, saleprice, image, catalogid, datecreate,att_1 ,att_2,att_3', 'safe', 'on'=>'search'),
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
			'name' => 'Product Name',
			'price' => 'Price',
			'description' => 'Product Description',
			'saleprice' => 'Sale price',
			'image' => 'Product Image',
			'catalogid' => 'Catalog name ',
			'datecreate' => 'Datecreate',
			'att_1' => 'att_1',
			'att_3' => 'att_2',
			'att_2' => 'att_3',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('saleprice',$this->saleprice,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('catalogid',$this->catalogid);
		$criteria->compare('datecreate',$this->datecreate,true);
		$criteria->compare('att_1',$this->att_1,true);
		$criteria->compare('att_2',$this->att_2,true);
		$criteria->compare('att_3',$this->att_3,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Product the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
