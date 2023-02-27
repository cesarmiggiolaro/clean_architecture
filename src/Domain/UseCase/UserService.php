<?php

namespace App\Domain\UseCase;

use \App\Adapter\Repository\RepositoryInterface;

class UserService implements UserUseCaseInterface
{
    private RepositoryInterface $repository;

    public function __construct(RepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function search(string $query): array
    {
        return $this->repository->search($query);
    }

    public function findAll(): array
    {
        return $this->repository->findAll();
    }
}