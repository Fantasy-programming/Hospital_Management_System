<?php

namespace Core;

class Validator
{

    public static function emptystring(string $value)
    {
        return strlen(trim($value)) === 0;
    }

    public static function names(string $value)
    {
        return strlen($value) > 30;
    }

    public static function age(int $value)
    {
        return $value < 14 || $value > 130;
    }

    public static function password(string $value)
    {
        return !preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $value);
    }

    public static function email(string $value)
    {
        return !filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    public static function confirmPassword(string $value, string $confirmPassword)
    {
        return $value !== $confirmPassword;
    }
}
