<?php

declare(strict_types=1);

namespace PasswordValidator;

final class LimitCharsValidation
{
    public function validate(string $string): bool
    {
        if (mb_strlen($string) < 8) {
            return false;
        }

        return true;
    }
}
