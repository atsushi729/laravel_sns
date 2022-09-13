<?php


namespace App\Http\Actions;

use App\Command\User\CreateCommand;
use \App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Usecase\RegisterUsecase;

class RegisterStoreAction extends Controller
{
    private $usecase;

    public function __construct(RegisterUsecase $usecase)
    {
        $this->usecase = $usecase;
    }

    public function __invoke(RegisterRequest $request)
    {
        $name = $request->get('name');
        $username =$request->get('username');
        $email = $request->get('email');
        $password = $request->get('password');

        $command = new CreateCommand($name, $username, $email, $password);

        return $this->usecase->run($command);
    }
}
