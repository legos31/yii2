<?php

namespace app\models;

use Yii;
use yii\base\Model;

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
        # code...
    }
}