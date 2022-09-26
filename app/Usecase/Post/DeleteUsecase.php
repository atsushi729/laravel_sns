<?php


namespace App\Usecase\Post;

use App\Http\Payload;
use Illuminate\Support\Facades\Auth;


class DeleteUsecase
{
    public function destroy($post)
    {
        try {
            if(Auth::id() == $post->user_id){
                $post->delete();
            }
            return (new Payload())->setStatus(Payload::SUCCESS);
        } catch (\Exception $e) {
            return (new Payload())->setStatus(Payload::FAILED);
        }
    }
}
