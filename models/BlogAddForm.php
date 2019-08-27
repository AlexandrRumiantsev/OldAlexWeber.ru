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
class BlogAddForm extends Model
{

    public $title;
    public $date_pub;
	public $content;
	public $autor;
	public $index;
	public $preview;
	public $files;
	
	  public function rules()
    {
        return [
            [['title','date_pub','content','autor','index','preview'], 'required'],
            [['title','date_pub','content','autor','index'], 'string', 'max' => 255],
			[['index'], 'file', 'extensions' => 'gif, jpg, jpeg, png, html'],
        ];
    }


}