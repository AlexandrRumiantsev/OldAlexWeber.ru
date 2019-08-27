<?php

namespace app\models;

use yii\db\ActiveRecord;

class projects extends ActiveRecord
{
		public static function primaryKey()
		{
			return ['name'];
		}

}
?>