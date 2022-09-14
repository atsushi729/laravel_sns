<?php


namespace App\Http\Actions;


use App\Http\Responders\PostIndexResponder;
use App\Usecase\PostIndexUsecase;

class PostIndexAction
{
    private $usecase;

    private $responder;

    public function __construct(PostIndexUsecase $usecase, PostIndexResponder $responder)
    {
        $this->usecase = $usecase;
        $this->responder = $responder;
    }

    public function __invoke()
    {
        return $this->responder->handle($this->usecase->run());
    }
}
