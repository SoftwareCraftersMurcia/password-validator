<?php
declare(strict_types=1);

namespace PasswordValidator\Test\Feature;

use PasswordValidator\HaveMoreThan8CharsValidation;
use PasswordValidator\PasswordValidator;
use PHPUnit\Framework\TestCase;

class PasswordValidatorTest extends TestCase
{
    /**
     * - Have more than 8 characters
     * - Contains a capital letter
     * - Contains a lowercase
     * - Contains a number
     * - Contains an underscore
     */
    public function test_returns_valid_with_concrete_given(): void
    {
        $passwordValidator = new PasswordValidator(
            new HaveMoreThan8CharsValidation(),
            new ContainsACapitalLetterValidation(),
            new ContainsALowercaseValidation(),
            new ContainsANumberValidation(),
            new ContainsAnUnderscoreValidation(),
        );

        self::assertTrue($passwordValidator->validate('V4lid_password'));
    }
}
