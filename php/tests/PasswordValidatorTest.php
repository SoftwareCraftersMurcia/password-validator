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

    private const MORE_THAN_8_CHARS = "########";
    private const CAPITAL_LETTER = "A";
    private const LOWER_CASE = "b";
    private const NUMBER = "1";
    private const UNDERSCORE = "_";
    
    /** @test */
    public function should_validate_password_is_longer_than_eight_chars(): void
    {
        $password = self::MORE_THAN_8_CHARS . self::CAPITAL_LETTER . self::LOWER_CASE . self::NUMBER . self::UNDERSCORE;
        $passwordValidator = new PasswordValidator();
        $this->assertTrue($passwordValidator->validate($password));
    }

    /** @test */
    public function should_not_be_valid_less_than_eight_char(): void
    {
        $password = self::CAPITAL_LETTER . self::LOWER_CASE . self::NUMBER . self::UNDERSCORE;
        $passwordValidator = new PasswordValidator();
        $this->assertFalse($passwordValidator->validate($password));
    }

    /** @test */
    public function should_have_at_least_capital_letter(): void
    {
        $password = self::MORE_THAN_8_CHARS . self::LOWER_CASE . self::NUMBER . self::UNDERSCORE;
        $passwordValidator = new PasswordValidator();
        $this->assertFalse($passwordValidator->validate($password));
    }

    /** @test */
    public function should_have_at_one_lower_case_letter(): void
    {
        $password = self::MORE_THAN_8_CHARS . self::CAPITAL_LETTER . self::NUMBER . self::UNDERSCORE;
        $passwordValidator = new PasswordValidator();
        $this->assertFalse($passwordValidator->validate($password));
    }

    /** @test */
    public function should_have_at_least_one_number(): void
    {
        $password = self::MORE_THAN_8_CHARS . self::CAPITAL_LETTER . self::LOWER_CASE . self::UNDERSCORE;
        $passwordValidator = new PasswordValidator();
        $this->assertFalse($passwordValidator->validate($password));
    }

    /** @test */
    public function should_have_at_least_one_underscore(): void
    {
        $password = self::MORE_THAN_8_CHARS . self::CAPITAL_LETTER . self::LOWER_CASE . self::NUMBER;
        $passwordValidator = new PasswordValidator();
        $this->assertFalse($passwordValidator->validate($password));
    }

}
