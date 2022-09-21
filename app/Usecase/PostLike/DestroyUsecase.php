<?php


namespace App\Usecase\PostLike;


use App\Http\Payload;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DestroyUsecase
{
    public function destroy($post, $request)
    {
        try {
            DB::beginTransaction();
            $request->user()->likes()->where('post_id', $post->id)->delete();
            DB::commit();

            return (new Payload())->setStatus(Payload::DELETED);
        } catch (\Exception $e) {
            Log::error($e);
            DB::rollBack();

            return (new Payload())->setStatus(Payload::FAILED);
        }
    }
}
