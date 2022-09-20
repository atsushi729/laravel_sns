<?php

namespace App\Http\Responders\Register;

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
        if ($payload->getStatus() === Payload::CREATED) {
            return redirect()->intended('dashboard')->with(['success_message' => 'ユーザーの登録が完了しました。']);
        }

        if ($payload->getStatus() === Payload::FAILED) {
            return back()->with(['error_message' => 'ユーザーの登録が失敗しました。入力内容を確認してください。']);
        }

        throw UndefinedStatusException::fromStatus($payload->getStatus());
    }
}
