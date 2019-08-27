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
class CommentAddForm extends Model
{

    public $content;
    public $date_comment;
	public $autor;
	public $title;
	public $touser;
	
	
	  public function rules()
    {
        return [
            [['content','date_comment','autor','title'], 'required'],
			['touser', 'default', 'value' => null],
        ];
    }


}