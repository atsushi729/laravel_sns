<?php


namespace App\Usecase;


class PostLikeDestroyUsecase
{
    public function destroy($post, $request)
    {
        $request->user()->likes()->where('post_id', $post->id)->delete();

        return back();
    }
}
