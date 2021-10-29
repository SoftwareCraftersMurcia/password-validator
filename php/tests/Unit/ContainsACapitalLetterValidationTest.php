<?php

namespace PasswordValidator\Test\Unit;

use PasswordValidator\ContainsACapitalLetterValidation;
use PHPUnit\Framework\TestCase;

class ContainsACapitalLetterValidationTest extends TestCase
{
    public function test_reject_when_no_capital_letter(): void
    {
        $validator = new ContainsACapitalLetterValidation();

        self::assertFalse($validator->validate('nocapitalchar'));
    }

    public function test_accepts_when_capital_character(): void
    {
        $validator = new ContainsACapitalLetterValidation();

        self::assertTrue($validator->validate('CapitalChars'));
    }
}
