<?php


namespace App\Http\Actions\PostLike;


use App\Http\Responders\PostLike\DestroyResponder;
use App\Models\Post;
use App\Usecase\PostLike\DestroyUsecase;
use Illuminate\Http\Request;

class DestroyAction
{
    private $usecase;

    private $responder;

    public function __construct(DestroyUsecase $usecase, DestroyResponder $responder)
    {
        $this->usecase = $usecase;
        $this->responder = $responder;
    }

    public function __invoke(Post $post, Request $request)
    {
        return $this->responder->handle($this->usecase->destroy($post, $request));
    }
}
