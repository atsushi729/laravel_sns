<?php


namespace App\Usecase;

use Illuminate\Support\Facades\Auth;


class PostDeleteUsecase
{
    public function destroy($post)
    {
        if(Auth::id() == $post->user_id){
            $post->delete();
        }

        return back();
    }
}
