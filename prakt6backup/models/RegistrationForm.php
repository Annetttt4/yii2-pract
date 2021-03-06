<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\Response;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class RegistrationForm extends Model
{
    public $login;
    public $password;
    public $repeatPassword;
    public $email;
  

    private $_user = false;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['login', 'password', 'email' , 'repeatPassword'], 'required'],
            ['login', 'unique', 'targetClass' => '\app\models\Users', 'message' => 'Login already exists'],
            ['email', 'unique', 'targetClass' => '\app\models\Users', 'message' => 'Email already exists'],
            ['password', 'compare', 'compareAttribute' => 'repeatPassword'],

            // rememberMe must be a boolean value
            // password is validated by validatePassword()
            // ['password', 'validatePassword'],
            // ['email', 'validateEmail'],
           // ['login', 'validateLogin'],
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        // if (!$this->hasErrors()) {
        //     $user = $this->getUser();

        //     if (!$user || !$user->validatePassword($this->password)) {
        //         $this->addError($attribute, 'Incorrect username or password.');
        //     }
        // }
    }

    public function validateLogin($attribute, $params)
    {

    }

    public function validateEmail($attribute, $params)
    {
        
    }

    /**
     * Logs in a user using the provided username and password.
     * @return bool whether the user is logged in successfully
     */
    public function registration()
    {

        if ($this->validate()) {
            $user = new Users();
            $user->login = $this->login;
            $user->password = $this->password;
            $user->email = $this->email;
            $user->authKey = '123';
            $user->save();
            return Yii::$app->user->login($this->getUser(), true ? 3600*24*30 : 0);
        }
       
        return false;
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByUsername($this->login);
        }

        return $this->_user;
    }
}
