<?php

namespace App\Http\Responders\Post;

use App\Exceptions\UndefinedStatusException;
use App\Http\Payload;
use Symfony\Component\HttpFoundation\Response;

class DestroyResponder
{
    public function handle(Payload $payload): Response
    {
        if ($payload->getStatus() === Payload::SUCCESS) {
            return back()->with('flash_message', '削除処理に成功しました。');
        }

        if ($payload->getStatus() === Payload::FAILED) {
            return back()->with('flash_message', '削除処理に失敗しました。');
        }
        throw UndefinedStatusException::fromStatus($payload->getStatus());
    }
}
