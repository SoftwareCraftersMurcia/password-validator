<?php

declare(strict_types=1);

namespace PasswordValidator;

final class ContainsAnUnderscoreValidation implements ValidationInterface
{
    public function validate(string $string): bool
    {
        return str_contains($string, '_');
    }
}
