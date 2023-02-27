<?php

namespace App\Domain\ValueObject;

final class Email
{
    private string $email;

    public function __construct(string $email)
    {
        $this->email = $email;
        $this->isValid();
    }

    private function isValid(): void
    {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            throw new \DomainException("E-mail is not valid");
        }
    }

}