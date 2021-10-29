<?php

declare(strict_types=1);

namespace PasswordValidator;

final class PasswordValidator
{
    private const MINIMUM_LENGTH = 8;

    public function validate(string $password): bool
    {
        $hasEnoughLength = mb_strlen($password) > self::MINIMUM_LENGTH;

        $hasCapitalLetter = preg_match('/[A-Z]/', $password);

        return $hasEnoughLength && $hasCapitalLetter;
    }
}
