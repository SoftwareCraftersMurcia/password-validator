<?php

declare(strict_types=1);

namespace PasswordValidator;

final class HaveMoreThan8CharsValidation implements ValidationInterface
{
    public function validate(string $string): bool
    {
        return mb_strlen($string) >= 8;
    }
}
