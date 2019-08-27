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
class ProjectAddForm extends Model
{
    public $name;
    public $resurs;
	public $url;
	public $studio;
	public $pic;
        public $prew;
	
	  public function rules()
    {
        return [
            [['name','resurs','url','studio','pic','prew'], 'required'],
            [['name','resurs','url','studio','pic','prew'], 'string', 'max' => 255],
            [['pic','prew'], 'file', 'extensions' => 'gif, jpg, jpeg, png, html'],
        ];
    }


}