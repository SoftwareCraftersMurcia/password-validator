<?php

namespace PasswordValidator\Test;

use PasswordValidator\PasswordValidator;
use PHPUnit\Framework\TestCase;

class PasswordValidatorTest extends TestCase
{
    public function test_returns_false_with_invalid_password_given(): void
    {
        $passwordValidator = new PasswordValidator();

        self::assertFalse($passwordValidator->validate('corta'));
    }

    public function test_returns_valid_with_invalid_password_given(): void
    {
        $passwordValidator = new PasswordValidator();

        self::assertTrue($passwordValidator->validate('long_password'));
    }
}
