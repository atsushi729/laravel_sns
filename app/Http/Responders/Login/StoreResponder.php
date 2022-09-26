<?php

namespace App\Http\Responders\Login;

use App\Exceptions\UndefinedStatusException;
use App\Http\Payload;
use Symfony\Component\HttpFoundation\Response;

class StoreResponder
{
    public function handle(Payload $payload): Response
    {
        if ($payload->getStatus() === Payload::SUCCESS) {
            return redirect()->route('dashboard')->with('success_message', 'ログインに成功しました。');
        }

        if ($payload->getStatus() === Payload::FAILED) {
            return back()->with('error_message', 'ログインに失敗しました。');
        }
        throw UndefinedStatusException::fromStatus($payload->getStatus());
    }
}
