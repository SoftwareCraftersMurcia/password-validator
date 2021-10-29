<?php

namespace PasswordValidator;

class ContainsACapitalLetterValidation implements ValidationInterface
{

    public function validate(string $string): bool
    {
        return $string !== mb_strtolower($string);
    }
}
