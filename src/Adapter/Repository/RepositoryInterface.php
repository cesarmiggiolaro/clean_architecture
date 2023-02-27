<?php

namespace App\Adapter\Repository;

use App\Domain\Entities\User;

interface RepositoryInterface
{
    public function find(int $id): User;
    public function search(string $query);
    public function findAll();
}