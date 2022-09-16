<?php


namespace App\Http\Actions\Post;


use App\Models\Post;
use App\Usecase\Post\DeleteUsecase;
use App\Http\Responders\Post\PostDestroyResponder;

class DestroyAction
{
    private $usecase;

    private $responder;

    public function __construct(DeleteUsecase $usecase, PostDestroyResponder $responder)
    {
        $this->usecase = $usecase;
        $this->responder = $responder;
    }

    public function __invoke(Post $post)
    {
        return $this->responder->handle($this->usecase->destroy($post));
    }
}
