<?php


namespace App\Usecase\PostLike;


class StoreUsecase
{
    public function store($post, $request)
    {
        // if user already liked some post, then show only "unlike" button
        if ($post->likedBy($request->user())) {
            return response(null, 400);
        }

        $post->likes()->create([
            'user_id' => $request->user()->id,
        ]);

        return back();
    }
}
