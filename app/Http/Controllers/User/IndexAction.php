<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Responders\User\IndexResponder;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IndexAction extends Controller
{
    /**
     * @var IndexResponder
     */
    private $responder;

    /**
     * IndexAction constructor.
     *
     * @param IndexResponder $responder
     */
    public function __construct(IndexResponder $responder)
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
