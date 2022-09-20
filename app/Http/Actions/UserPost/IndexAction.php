<?php


namespace App\Http\Actions\UserPost;


use App\Models\User;
use App\Http\Responders\UserPost\IndexResponder;
use App\Usecase\UserPost\UserPostUsecase;

class IndexAction
{
    private $usecase;

    private $responder;

    public function __construct(UserPostUsecase $usecase, IndexResponder $responder)
    {
        $this->usecase = $usecase;
        $this->responder = $responder;
    }

    public function __invoke(User $user)
    {
        return $this->responder->handle($user, $this->usecase->get($user));
    }
}
