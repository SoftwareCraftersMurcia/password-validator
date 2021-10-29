<?php

declare(strict_types=1);

namespace PasswordValidator\Test\Unit;

use PasswordValidator\HaveMoreThan8CharsValidation;
use PHPUnit\Framework\TestCase;

final class LimitCharsValidationTest extends TestCase
{
    public function test_returns_false_with_invalid_password_given(): void
    {
        $validation = new HaveMoreThan8CharsValidation();

        self::assertFalse($validation->validate('corta'));
    }

    public function test_returns_valid_with_invalid_password_given(): void
    {
        $validation = new HaveMoreThan8CharsValidation();

        self::assertTrue($validation->validate('long_password'));
    }
}
