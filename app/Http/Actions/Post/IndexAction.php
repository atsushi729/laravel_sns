<?php


namespace App\Http\Actions\Post;


use App\Http\Responders\Post\IndexResponder;
use App\Usecase\Post\IndexUsecase;

class IndexAction
{
    private $usecase;

    private $responder;

    public function __construct(IndexUsecase $usecase, IndexResponder $responder)
    {
        $this->usecase = $usecase;
        $this->responder = $responder;
    }

    public function __invoke()
    {
        return $this->responder->handle($this->usecase->run());
    }
}
