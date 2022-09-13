<?php


namespace App\Http\Actions;


use App\Http\Requests\PostRequest;
use App\Usecase\PostStoreUsecase;

class PostStoreAction
{
    private $usecase;

    public function __construct(PostStoreUsecase $usecase)
    {
        $this->usecase = $usecase;
    }

    public function __invoke(PostRequest $request)
    {
        return $this->usecase->store($request);
    }
}
