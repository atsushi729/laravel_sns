<?php


namespace App\Usecase\Post;

use Illuminate\Support\Facades\Auth;


class DeleteUsecase
{
    public function destroy($post)
    {
        if(Auth::id() == $post->user_id){
            $post->delete();
        }

        return back();
    }
}
