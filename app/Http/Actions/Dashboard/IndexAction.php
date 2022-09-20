<?php


namespace App\Http\Actions\Dashboard;


use App\Http\Responders\Dashboard\IndexResponder;

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

