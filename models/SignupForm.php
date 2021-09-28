<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\User;

class SignupForm extends Model 
{
    public $name;
    public $email;
    public $password;

    public function rules()
    {
        return [
            // email and password are both required
            [['name', 'email', 'password'], 'required'],
            [['name'], 'string'],
            [['email'], 'unique', 'targetClass'=>'app\models\User', 'targetAttribute'=>'email'],            
        ];
    }

    public function signup()
    {
        if($this->validate())
        {
            $user = new User();
            $user->attributes = $this->attributes;
            return $user->create();
        }
    }
}