<?php


namespace App\Http\Actions\PostLike;


use App\Http\Responders\PostLike\StoreResponder;
use App\Models\Post;
use App\Usecase\PostLike\StoreUsecase;
use Illuminate\Http\Request;

class StoreAction
{
    private $usecase;

    private $responder;

    public function __construct(StoreUsecase $usecase, StoreResponder $responder)
    {
        $this->usecase = $usecase;
        $this->responder = $responder;
    }

    public function __invoke(Post $post, Request $request)
    {
        return $this->responder->handle($this->usecase->store($post, $request));
    }
}
