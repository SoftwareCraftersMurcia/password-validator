<?php

namespace PasswordValidator\Test;

use PasswordValidator\PasswordValidator;
use PHPUnit\Framework\TestCase;

class PasswordValidatorTest extends TestCase
{
    public function test_rejects_less_than_8_chars(): void
    {
        $passwordValidator = new PasswordValidator();

        self::assertFalse($passwordValidator->validate('corta'));
    }

    public function test_accept_more_or_equals_than_8_chars(): void
    {
        $passwordValidator = new PasswordValidator();

        self::assertTrue($passwordValidator->validate('long_password'));
    }
}
