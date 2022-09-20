<?php


namespace App\Http\Actions\Register;

use App\Command\User\CreateCommand;
use \App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Responders\Register\RegisterStoreResponder;
use App\Usecase\Register\RegisterUsecase;

class StoreAction extends Controller
{
    private $usecase;

    private $responder;

    public function __construct(RegisterUsecase $usecase, RegisterStoreResponder $responder)
    {
        $this->usecase = $usecase;

        $this->responder = $responder;
    }

    public function __invoke(RegisterRequest $request)
    {
        $name = $request->get('name');
        $username =$request->get('username');
        $email = $request->get('email');
        $password = $request->get('password');

        $command = new CreateCommand($name, $username, $email, $password);

        return $this->responder->handle($this->usecase->run($command));
    }
}
