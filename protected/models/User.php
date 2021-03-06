<?php

/**
 * This is the model class for table "user_infor".
 *
 * The followings are the available columns in table 'user_infor':
 * @property integer $user_id
 * @property string $user_name
 * @property string $name
 * @property string $passwd
 * @property string $school
 * @property string $acmid
 * @property string $email
 * @property string $phone
 */
class User extends CActiveRecord
{
	public $passwd_repeat;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user_infor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_name, name, passwd, school,passwd_repeat, acmid, email, phone', 'required'),
			array('user_id,phone,acmid', 'numerical', 'integerOnly'=>true),
			array('user_name, name, phone', 'length', 'max'=>20),
			array('passwd', 'length', 'max'=>50),
			array('passwd', 'compare'),
			array('phone','length','max'=>11),
			array('school, email', 'length', 'max'=>45),
			array('acmid', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('user_id, passwd_repeat, user_name, name, passwd, school, acmid, email, phone', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'user_name' => '用户名',
			'name' => '姓名',
			'passwd' => '密码',
			'passwd_repeat'=> '确认密码',
			'school' => '学校',
			'acmid' => 'ACMID',
			'email' => 'Email',
			'phone' => '电话',
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
		$criteria->addCondition("user_name != 'ADMIN'");   //管理用户时不显示admin用户，防止意外删除
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('school',$this->school,true);
		$criteria->compare('acmid',$this->acmid,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array('pageSize'=>20),
		));
	}

	protected function afterValidate() {
		parent::afterValidate();
		if($this->passwd!==$this->passwd_repeat)
			echo "<script type='text/javascript'>
        			alert('请确认两次输入密码相同');
        			window.location.href = '../user/create';
    		 	</script>";		
		$this->passwd = $this->encrypt($this->passwd);
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
