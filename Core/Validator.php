<?php

namespace Core;

class Validator
{

    public static function emptystring($value)
    {
        return strlen(trim($value)) === 0;
    }

    public static function names($value)
    {
        return strlen($value) > 30;
    }

    public static function age($value)
    {
        return $value < 14 || $value > 130;
    }

    public static function password($value)
    {
        return !preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $value);
    }

    public static function email($value)
    {
        return !filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    public static function confirmPassword($value, $confirmPassword)
    {
        return $value !== $confirmPassword;
    }
}
