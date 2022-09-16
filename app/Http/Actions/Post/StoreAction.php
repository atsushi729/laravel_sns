<?php


namespace App\Http\Actions\Post;


use App\Http\Requests\PostRequest;
use App\Usecase\Post\StoreUsecase;
use App\Http\Responders\Post\PostStoreResponder;

class StoreAction
{
    private $usecase;

    private $responder;

    public function __construct(StoreUsecase $usecase, PostStoreResponder $responder)
    {
        $this->usecase = $usecase;
        $this->responder = $responder;
    }

    public function __invoke(PostRequest $request)
    {
        return $this->responder->handle($this->usecase->store($request));
    }
}
