<?php


namespace App\Usecase\PostLike;


use App\Http\Payload;
use App\Models\Post;
use App\Mail\PostLiked;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class StoreUsecase
{
    public function store(Post $post, Request $request)
    {
        try {
            // if user already liked some post, then show only "unlike" button
            if ($post->likedBy($request->user())) {
                return (new Payload())->setStatus(Payload::FAILED);
            }

            DB::beginTransaction();
            $post->likes()->create([
                'user_id' => $request->user()->id,
            ]);
            DB::commit();

        } catch (\Exception $e) {
            Log::error($e);
            DB::rollBack();

            return (new Payload())->setStatus(Payload::FAILED);
        }
            return (new Payload())->setStatus(Payload::CREATED);
    }
}
