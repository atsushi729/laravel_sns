<?php


namespace App\Http\Actions\Post;


use App\Models\Post;
use App\Usecase\Post\DeleteUsecase;
use App\Http\Responders\Post\DestroyResponder;

class DestroyAction
{
    private $usecase;

    private $responder;

    public function __construct(DeleteUsecase $usecase, DestroyResponder $responder)
    {
        $this->usecase = $usecase;
        $this->responder = $responder;
    }

    public function __invoke(Post $post)
    {
        return $this->responder->handle($this->usecase->destroy($post));
    }
}
