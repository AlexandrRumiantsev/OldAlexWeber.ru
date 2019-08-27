<?php

namespace app\models;

use yii\db\ActiveRecord;

class blog extends ActiveRecord
{
			public static function primaryKey()
		{
			return ['title'];
		}

}
?>