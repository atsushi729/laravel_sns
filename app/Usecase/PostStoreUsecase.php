<?php


namespace App\Usecase;


class PostStoreUsecase
{
    public function store($request)
    {
        $request->user()->posts()->create($request->only('body'));

        return back();
    }
}
