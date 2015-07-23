<?php


namespace app\models;
use yii\db\ActiveRecord;

class Users extends ActiveRecord
{
	public $name;
	public $email;

	public function rules()
	{
		return [
			[['name','email'],'required'],
			['email','email'],
			];

	}
}
?>