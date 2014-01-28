<?php

/**
 * This is the model class for table "user".
 * git commit
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $user_name
 * @property string $password
 */
class User extends CActiveRecord
{
	public $password_repeat;
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
		return array(
			array('user_name, password ,password_repeat', 'required'),
			array('user_name', 'length', 'max'=>20),
			array('password', 'length', 'max'=>64),
			array('password', 'compare'),
			array('password_repeat', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_name', 'safe', 'on'=>'search'),
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
			'id' => 'User',
			'user_name' => '用户名',
			'password' => '密码',
			'password_repeat'=> '确认密码',
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
		$criteria=new CDbCriteria;
 		$criteria->addCondition("user_name != 'ADMIN'");   //管理用户时不显示admin用户，防止意外删除
		$criteria->compare('id',$this->id,true);
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('password',$this->password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array('pageSize'=>20),
		));
	}

	protected function afterValidate() {
		parent::afterValidate();
		if($this->password!==$this->password_repeat)
			echo "<script type='text/javascript'>
        			alert('请确认两次输入密码相同');
        			window.location.href = '../user/create';
    		 	</script>";		
		$this->password = $this->encrypt($this->password);
	}
	
	public function encrypt($value) {
		$value = $value."dreamfly";
		return md5($value);
	}
	
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
