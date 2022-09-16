<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use App\Http\Responders\Login\StoreResponder;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IndexAction extends Controller
{
    /**
     * @var StoreResponder
     */
    private $responder;

    /**
     * IndexAction constructor.
     *
     * @param StoreResponder $responder
     */
    public function __construct(StoreResponder $responder)
    {
        $this->responder = $responder;
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function __invoke(Request $request): Response
    {
        return $this->responder->handle();
    }
}
