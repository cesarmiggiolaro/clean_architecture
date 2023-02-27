<?php

namespace App\Adapter\Repository;

use App\Domain\Entities\User;

class DatabaseRepository
{
    public function find(int $id): User
    {
        return new User;
    }

    public function search(string $query): array
    {
        return [];
    }

    public function findAll(): array
    {
        return [];
    }
}