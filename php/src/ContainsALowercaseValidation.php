<?php

namespace PasswordValidator;

class ContainsALowercaseValidation implements ValidationInterface
{
    public function validate(string $string): bool
    {
        return $string !== mb_strtoupper($string);
    }
}
