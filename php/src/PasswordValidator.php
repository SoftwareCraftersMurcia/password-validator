<?php

declare(strict_types=1);

namespace PasswordValidator;

final class PasswordValidator
{
    public function validate(string $password): bool
    {
        $length = mb_strlen($password);

        return $length > 8;
    }
}
