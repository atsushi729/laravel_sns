<?php


namespace App\Http\Actions\Home;


use App\Http\Responders\HomeResponder;

class IndexAction
{
    private $responder;

    public function __construct(HomeResponder $responder)
    {
        $this->responder = $responder;
    }

    public function __invoke()
    {
        return $this->responder->show();
    }
}
