<?php

declare(strict_types=1);

namespace PasswordValidator;

final class PasswordValidator
{
    private const MINIMUM_LENGTH = 8;
    private const AT_LEAST_A_CAPITAL_LETTER = '/[A-Z]/';
    private const AT_LEAST_A_LOWER_LETTER = '/[a-z]/';
    private const AT_LEAST_A_NUMBER = '/[0-9]/';

    public function validate(string $password): bool
    {
        $hasEnoughLength = mb_strlen($password) > self::MINIMUM_LENGTH;

        $hasCapitalLetter = preg_match(self::AT_LEAST_A_CAPITAL_LETTER, $password);

        $hasLowerCaseLetter = preg_match(self::AT_LEAST_A_LOWER_LETTER, $password);

        $hasANumber = preg_match(self::AT_LEAST_A_NUMBER, $password);

        return $hasEnoughLength && $hasCapitalLetter && $hasLowerCaseLetter && $hasANumber;
    }
}
