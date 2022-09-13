<?php


namespace App\Usecase;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;


class PostDeleteUsecase
{
    public function destroy(Post $post, User $user)
    {
        if(Auth::id() == $post->user_id){

            $post->delete();

        } else {
            dd('test');
            //メッセージを出力する
        }
        return back();
    }
}
