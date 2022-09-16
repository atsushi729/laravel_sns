<?php

namespace App\Http\Responders\Logout;

use App\Exceptions\UndefinedStatusException;
use App\Http\Payload;
use Symfony\Component\HttpFoundation\Response;

class StoreResponder
{
    public function handle(Payload $payload): Response
    {
        if ($payload->getStatus() === Payload::SUCCESS) {
            return redirect()->route('home')->with('flash_message', 'ログアウトに成功しました。');
        }

        if ($payload->getStatus() === Payload::FAILED) {
            return back()->with('flash_message', 'ログアウトに失敗しました。');
        }
        throw UndefinedStatusException::fromStatus($payload->getStatus());
    }
}
