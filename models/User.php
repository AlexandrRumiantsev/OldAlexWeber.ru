<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "User".
 *
 * @property string $username
 * @property string $email
 * @property string $phone
 * @property string $ava
 * @property integer $id
 * @property string $auth_key
 * @property string $token
 * @property string $status
 * @property string $password
 * @property string $access_token
 */
class User extends \yii\db\ActiveRecord
{
	
	public static function primaryKey()
{
    return ['username'];
}

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'User';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [['username', 'email', 'phone', 'ava', 'status', 'password'], 'string'],
            [['id'], 'integer'],
            [['auth_key', 'token', 'access_token'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Username',
            'email' => 'Email',
            'phone' => 'Phone',
            'ava' => 'Ava',
            'id' => 'ID',
            'auth_key' => 'Auth Key',
            'token' => 'Token',
            'status' => 'Status',
            'password' => 'Password',
            'access_token' => 'Access Token',
        ];
    }
}
