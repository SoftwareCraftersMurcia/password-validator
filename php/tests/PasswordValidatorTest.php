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
        $password = 'Aeioua1_jsdf';
        $passwordValidator = new PasswordValidator();
        $this->assertTrue($passwordValidator->validate($password));
    }

    /** @test */
    public function should_not_be_valid_less_than_eight_char(): void
    {
        $password = '123';
        $passwordValidator = new PasswordValidator();
        $this->assertFalse($passwordValidator->validate($password));
    }

    /** @test */
    public function should_have_at_least_capital_letter(): void
    {
        $password = 'eioua1_jsdf';
        $passwordValidator = new PasswordValidator();
        $this->assertFalse($passwordValidator->validate($password));
    }

    /** @test */
    public function should_have_at_one_lower_case_letter(): void
    {
        $password = 'AEIOUA1_JSDF';
        $passwordValidator = new PasswordValidator();
        $this->assertFalse($passwordValidator->validate($password));
    }

    /** @test */
    public function should_have_at_least_one_number(): void
    {
        $password = 'Aeioua_jsdf';
        $passwordValidator = new PasswordValidator();
        $this->assertFalse($passwordValidator->validate($password));
    }
}
