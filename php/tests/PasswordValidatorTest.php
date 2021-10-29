<?php

declare(strict_types=1);
namespace PasswordValidator\Test;

use PasswordValidator\PasswordValidator;
use PHPUnit\Framework\TestCase;

final class PasswordValidatorTest extends TestCase
{
    /**
    - Have more than 8 characters
    - Contains a capital letter
    - Contains a lowercase
    - Contains a number
    - Contains an underscore
     */
    
    /** @test */
    public function should_validate_password_is_longer_than_eight_chars(): void
    {
        $password = 'aeioualkjsdf';
        $passwordValidator = new PasswordValidator();
        $this->assertTrue($passwordValidator->validate($password));
    }

    /** @test */
    public function should_be_longer_than_eight_char(): void
    {
        $password = '123';
        $passwordValidator = new PasswordValidator();
        $this->assertFalse($passwordValidator->validate($password));
    }
}
