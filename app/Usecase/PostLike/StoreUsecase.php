<?php


namespace App\Usecase\PostLike;


use App\Http\Payload;
use App\Models\Post;
use App\Mail\PostLiked;
use Illuminate\Http\Request;

class StoreUsecase
{
    public function store(Post $post, Request $request)
    {
        try {
//            if user already liked some post, then show only "unlike" button
            if ($post->likedBy($request->user())) {
                return (new Payload())->setStatus(Payload::UPDATED);
            }
            $post->likes()->create([
                'user_id' => $request->user()->id,
            ]);
            return (new Payload())->setStatus(Payload::CREATED);
        } catch (\Exception $e) {
            return (new Payload())->setStatus(Payload::FAILED);
        }
    }
}
