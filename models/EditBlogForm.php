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
class EditBlogForm extends Model
{

    public $title;
    public $content;
	public $date_pub;
	public $autor;
	public $index;
	
	  public function rules()
    {
        return [
            [[], 'required'],
        ];
    }


}