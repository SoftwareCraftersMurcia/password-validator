<?php

namespace PasswordValidator\Test\Unit;

use PasswordValidator\PasswordValidator;
use PasswordValidator\ValidationInterface;
use PHPUnit\Framework\TestCase;

class PasswordValidatorTest extends TestCase
{
    public function test_returns_false_with_invalid_password_given(): void
    {
        $trueValidator = $this->createStub(ValidationInterface::class);
        $trueValidator->method('validate')->willReturn(true);

        $falseValidator = $this->createStub(ValidationInterface::class);
        $falseValidator->method('validate')->willReturn(false);

        $passwordValidator = new PasswordValidator(
            $trueValidator,
            $falseValidator
        );

        self::assertFalse($passwordValidator->validate(''));
    }

    public function test_returns_valid_with_invalid_password_given(): void
    {
        $trueValidator = $this->createStub(ValidationInterface::class);
        $trueValidator->method('validate')->willReturn(true);

        $passwordValidator = new PasswordValidator($trueValidator);

        self::assertTrue($passwordValidator->validate(''));
    }
}
