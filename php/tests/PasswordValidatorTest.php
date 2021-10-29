<?php

namespace PasswordValidator\Test;

use PasswordValidator\PasswordValidator;
use PHPUnit\Framework\TestCase;

class PasswordValidatorTest extends TestCase
{
    /**
    - Have more than 8 characters
    - Contains a capital letter
    - Contains a lowercase
    - Contains a number
    - Contains an underscore
     */
    
    /** @test */
    public function should_be_longer_than_eight_char()
    {
        $password = 'aeioualkjsdf';
        $passwordValidator = new PasswordValidator();
        $this->assertTrue($passwordValidator->validate($password));
    }

}
