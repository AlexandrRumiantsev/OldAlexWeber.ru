<?php

namespace app\models;

use Yii;
use yii\base\Model;

class CommunicationsForm extends Model
{

    public $name;
    public $mail;
	public $id;
	public $dates;
	public $text;
	
	  public function rules()
    {
        return [
            [['name','mail','id','dates','text'], 'required'],
        ];
    }


}
?>