<?php


namespace App\Usecase\Post;


class StoreUsecase
{
    public function store($request)
    {
        $request->user()->posts()->create($request->only('body'));

        return back();
    }
}
