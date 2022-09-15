<?php


namespace App\Http\Actions\Post;


use App\Http\Requests\PostRequest;
use App\Usecase\Post\StoreUsecase;

class StoreAction
{
    private $usecase;

    public function __construct(StoreUsecase $usecase)
    {
        $this->usecase = $usecase;
    }

    public function __invoke(PostRequest $request)
    {
        return $this->usecase->store($request);
    }
}
