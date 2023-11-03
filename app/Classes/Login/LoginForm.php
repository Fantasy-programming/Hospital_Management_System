<?php

namespace Classes\Login;

use Core\Validator;

class LoginForm
{
    protected $errors = [];

    public function validate($email, $password)
    {

        if (Validator::emptystring($email)) {
            $this->errors['email'] = 'Email is required';
        } elseif (Validator::email($email)) {
            $this->errors['email'] = 'Email is invalid';
        }

        if (Validator::emptystring($password)) {
            $this->errors['password'] = 'Password is required';
        } elseif (Validator::password($password)) {
            $this->errors['password'] = 'Password is invalid';
        }

        return empty($this->errors);
    }

    public function getErrors()
    {
        return $this->errors;
    }
}
