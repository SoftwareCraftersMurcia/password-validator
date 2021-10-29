<?php

declare(strict_types=1);

namespace PasswordValidator;

interface ValidationInterface
{
    public function validate(string $string): bool;
}
