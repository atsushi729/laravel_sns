<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Responders\User\StoreResponder;
use App\Usecases\User\StoreUsecase;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StoreAction extends Controller
{
    /**
     * @var StoreUsecase
     */
    private $usecase;

    /**
     * @var StoreResponder
     */
    private $responder;

    /**
     * StoreAction constructor.
     *
     * @param StoreUsecase $usecase
     * @param StoreResponder $responder
     *
     */
    public function __construct(StoreUsecase $usecase, StoreResponder $responder)
    {
        $this->usecase = $usecase;
        $this->responder = $responder;
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function __invoke(Request $request): Response
    {
        return $this->responder->handle($this->usecase->run($request->all()));
    }
}
