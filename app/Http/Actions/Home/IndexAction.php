<?php


namespace App\Http\Actions\Home;


use App\Http\Responders\Home\IndexResponder;

class IndexAction
{
    private $responder;

    public function __construct(IndexResponder $responder)
    {
        $this->responder = $responder;
    }

    public function __invoke()
    {
        return $this->responder->show();
    }
}
