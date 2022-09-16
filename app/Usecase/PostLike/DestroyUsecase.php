<?php


namespace App\Usecase\PostLike;


use App\Http\Payload;

class DestroyUsecase
{
    public function destroy($post, $request)
    {
        try {
            $request->user()->likes()->where('post_id', $post->id)->delete();
            return (new Payload())->setStatus(Payload::DELETED);
        } catch (\Exception $e) {
            return (new Payload())->setStatus(Payload::FAILED);
        }
    }
}
