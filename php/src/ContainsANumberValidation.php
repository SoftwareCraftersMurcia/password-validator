<?php

namespace PasswordValidator;

class ContainsANumberValidation implements ValidationInterface
{

    public function validate(string $string): bool
    {
        return preg_match('/\d+/', $string) === 1;
    }
}
