<?php


namespace App\Usecase\Post;


use App\Http\Payload;

class StoreUsecase
{
    public function store($request)
    {
        try {
            $request->user()->posts()->create($request->only('body'));
            return (new Payload())->setStatus(Payload::SUCCESS);
        } catch (\Exception $e) {
            return (new Payload())->setStatus(Payload::FAILED);
        }
    }
}
