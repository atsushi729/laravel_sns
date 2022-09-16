<?php

namespace App\Http\Responders\PostLike;

use App\Exceptions\UndefinedStatusException;
use App\Http\Payload;
use Illuminate\Routing\ResponseFactory;
use Symfony\Component\HttpFoundation\Response;

class StoreResponder
{
    private $responseFactory;

    public function __construct(ResponseFactory $responseFactory)
    {
        $this->responseFactory = $responseFactory;
    }

    public function handle(Payload $payload): Response
    {
        if ($payload->getStatus() === Payload::CREATED || $payload->getStatus() === Payload::UPDATED) {
            return back();
        }

        if ($payload->getStatus() === Payload::FAILED) {
            return $this->responseFactory->json($payload->getOutput());
        }
        throw UndefinedStatusException::fromStatus($payload->getStatus());
    }
}
