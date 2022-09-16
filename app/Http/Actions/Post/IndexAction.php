<?php


namespace App\Http\Actions\Post;


use App\Http\Responders\Post\PostIndexResponder;
use App\Usecase\Post\IndexUsecase;

class IndexAction
{
    private $usecase;

    private $responder;

    public function __construct(IndexUsecase $usecase, PostIndexResponder $responder)
    {
        $this->usecase = $usecase;
        $this->responder = $responder;
    }

    public function __invoke()
    {
        return $this->responder->handle($this->usecase->run());
    }
}
