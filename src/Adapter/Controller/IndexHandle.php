<?php

namespace App\Adapter\Controller;

use App\Domain\UseCase\UserUseCaseInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class IndexHandle implements RequestHandlerInterface
{
    private UserUseCaseInterface $service;

    public function __construct(UserUseCaseInterface $service)
    {
        $this->service = $service;
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $all = $this->service->findAll();
        return new JsonResponse($all);
    }
}