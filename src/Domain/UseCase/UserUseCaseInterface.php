<?php

namespace App\Domain\UseCase;

use \App\Adapter\Repository\RepositoryInterface;

interface UserUseCaseInterface
{
    public function __construct(RepositoryInterface $repository);
    public function search(string $query);
    public function findAll();
}