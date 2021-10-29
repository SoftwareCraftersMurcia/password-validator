<?php

namespace PasswordValidator\Test\Unit;

use PasswordValidator\ContainsANumberValidation;
use PasswordValidator\ContainsAnUnderscoreValidation;
use PHPUnit\Framework\TestCase;

class ContainsAnUnderscoreValidationTest extends TestCase
{
    public function test_reject_when_no_number(): void
    {
        $validator = new ContainsAnUnderscoreValidation();

        self::assertFalse($validator->validate('nounderscore'));
    }

    public function test_accepts_when_capital_character(): void
    {
        $validator = new ContainsAnUnderscoreValidation();

        self::assertTrue($validator->validate('cool_underscore'));
    }
}
