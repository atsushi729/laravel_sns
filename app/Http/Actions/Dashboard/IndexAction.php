<?php


namespace App\Http\Actions\Dashboard;


use App\Http\Responders\DashboardResponder;

class IndexAction
{
    private $responder;

    public function __construct(DashboardResponder $responder)
    {
        $this->responder = $responder;
    }

    public function __invoke()
    {
        return $this->responder->show();
    }
}

