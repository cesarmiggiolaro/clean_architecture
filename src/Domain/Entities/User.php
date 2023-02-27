<?php

namespace App\Domain\Entities;

use App\Domain\ValueObject\Email;

final class User
{
    private string $name;
    private Email $email;
}