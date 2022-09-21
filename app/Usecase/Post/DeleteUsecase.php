<?php


namespace App\Usecase\Post;

use App\Http\Payload;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;



class DeleteUsecase
{
    public function destroy($post)
    {
        try {
            DB::beginTransaction();
            if(Auth::id() == $post->user_id){
                $post->delete();
            }
            DB::commit();

            return (new Payload())->setStatus(Payload::SUCCESS);
        } catch (\Exception $e) {
            Log::error($e);
            DB::rollBack();

            return (new Payload())->setStatus(Payload::FAILED);
        }
    }
}
