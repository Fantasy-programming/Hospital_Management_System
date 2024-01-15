<?php

namespace Core;

class Validator
{
    /**
     * Check if string is empty
     * @param string $value
     * @return bool
    */

    public static function emptystring(string $value): bool
    {
        return strlen(trim($value)) === 0;
    }

    /**
     * Check if name is more than 30 characters
     * @param string $value
     * @return bool
    */

    public static function names(string $value): bool
    {
        return strlen($value) > 30;
    }

    /**
     * Check if age is less than 14 or more than 130
     * @param int $value
     * @return bool
    */

    public static function age(int $value): bool
    {
        return $value < 14 || $value > 130;
    }

    /**
     * Check if email is valid
     * @param string $value
     * @return bool
    */

    public static function email(string $value): bool
    {
        return !filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    /**
     * Check if password is strong enough
     * @param string $value
     * @return bool
    */

    public static function password(string $value): bool
    {
        return !preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $value);
    }

    /**
     * Check if password and confirm password are the same
     * @param string $value
     * @param string $confirmPassword
     * @return bool
    */

    public static function confirmPassword(string $value, string $confirmPassword): bool
    {
        return $value !== $confirmPassword;
    }
}
