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
class EditCommentForm extends Model
{

    public $content;
    public $autor;
	public $date_edit;
	public $title;
	public $id;
	
	  public function rules()
    {
        return [
            [['content','autor','date_edit','title','id'], 'required'],
        ];
    }


}