<?php

namespace app\models;

use Yii;
use yii\base\Model;


/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class EditUserAdmin extends Model
{

   public $username;
   public $email;
   public $phone;
   public $ava;
   public $password;
     public $status;
	 public $id;
	
	  public function rules()
    {
        return [
            [['username','email','phone','password'], 'required'],
            [['username','email','phone','password'], 'string', 'max' => 255],
			[['ava'], 'file', 'extensions' => 'gif, jpg, jpeg, png'],
        ];
    }


}