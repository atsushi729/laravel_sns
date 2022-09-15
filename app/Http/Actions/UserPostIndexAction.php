<?php


namespace App\Http\Actions;


use App\Models\User;
use App\Usecase\UserPostIndexUsecase;

class UserPostIndexAction
{
    private $usecase;

    private $responder;

    public function __construct(UserPostIndexUsecase $usecase, UserPostIndexResponder $responder)
    {
        $this->usecase = $usecase;
        $this->responder = $responder;
    }

    public function __invoke(User $user)
    {
        return $this->responder->handle($user, $this->usecase->get($user));
    }
}
