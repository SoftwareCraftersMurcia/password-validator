<?php

namespace PasswordValidator\Test\Unit;

use PasswordValidator\ContainsALowercaseValidation;
use PHPUnit\Framework\TestCase;

class ContainsALowercaseValidationTest extends TestCase
{
    public function test_reject_when_no_lowercase_letter(): void
    {
        $validator = new ContainsALowercaseValidation();

        self::assertFalse($validator->validate('NOLOWERCASE'));
    }

    public function test_accepts_when_lowercase_letter(): void
    {
        $validator = new ContainsALowercaseValidation();

        self::assertTrue($validator->validate('Lowercase'));
    }
}
