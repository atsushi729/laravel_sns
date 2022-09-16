<?php


namespace App\Usecase\PostLike;


class DestroyUsecase
{
    public function destroy($post, $request)
    {
        $request->user()->likes()->where('post_id', $post->id)->delete();

        return back();
    }
}
