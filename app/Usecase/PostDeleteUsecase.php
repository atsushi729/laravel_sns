<?php


namespace App\Usecase;

use Illuminate\Support\Facades\Auth;
use App\Models\Post;


class PostDeleteUsecase
{
    public function destroy(Post $post)
    {
        if(Auth::id() == $post->user_id){
            $post->delete();
        }

        return back();
    }
}
