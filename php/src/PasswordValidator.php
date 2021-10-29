<?php

namespace PasswordValidator;

class PasswordValidator
{
    public function validate(string $password): bool
    {
        if (mb_strlen($password) < 8) {
            return false;
        }

        return true;
    }
}
