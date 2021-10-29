<?php

namespace PasswordValidator;

class PasswordValidator
{
    /** @var list<ValidationInterface> */
    private array $validations;

    public function __construct(ValidationInterface ...$validations)
    {
        $this->validations = $validations;
    }

    public function validate(string $password): bool
    {
        foreach ($this->validations as $validation) {
            if (!$validation->validate($password)) {
                return false;
            }
        }

        return true;
    }
}
