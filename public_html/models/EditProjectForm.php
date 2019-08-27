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
class EditProjectForm extends Model
{

    public $name;
    public $resurs;
	public $url;
	public $studio;
	public $pic;
	
	  public function rules()
    {
        return [
            [['name','resurs','url','studio','pic'], 'required'],
            [['name','resurs','url','studio','pic'], 'string', 'max' => 255],
            [['pic'], 'file', 'extensions' => 'gif, jpg, jpeg, png'],
        ];
    }


}