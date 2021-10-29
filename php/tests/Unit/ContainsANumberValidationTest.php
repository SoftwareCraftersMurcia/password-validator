<?php

namespace PasswordValidator\Test\Unit;

use PasswordValidator\ContainsANumberValidation;
use PHPUnit\Framework\TestCase;

class ContainsANumberValidationTest extends TestCase
{
    public function test_reject_when_no_number(): void
    {
        $validator = new ContainsANumberValidation();

        self::assertFalse($validator->validate('nonumber'));
    }

    public function test_accepts_when_capital_character(): void
    {
        $validator = new ContainsANumberValidation();

        self::assertTrue($validator->validate('CuteNumb3r'));
    }
}
