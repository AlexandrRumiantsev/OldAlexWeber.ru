<?php

namespace app\models;

use yii\db\ActiveRecord;

class comment extends ActiveRecord
{
			public static function primaryKey()
		{
			return ['content'];
		}

}
?>