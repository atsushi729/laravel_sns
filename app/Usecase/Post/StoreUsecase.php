<?php


namespace App\Usecase\Post;


use App\Http\Payload;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class StoreUsecase
{
    public function store($request)
    {
        try {
            DB::beginTransaction();
            $request->user()->posts()->create($request->only('body'));
            DB::commit();

        } catch (\Exception $e) {
            Log::error($e);
            DB::rollBack();

            return (new Payload())->setStatus(Payload::FAILED);
        }
            return (new Payload())->setStatus(Payload::SUCCESS);
    }
}
