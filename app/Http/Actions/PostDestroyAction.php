<?php


namespace App\Http\Actions;


use App\Models\Post;
use App\Models\User;
use App\Usecase\PostDeleteUsecase;

class PostDestroyAction
{
    private $usecase;

    public function __construct(PostDeleteUsecase $usecase)
    {
        $this->usecase = $usecase;
    }

    public function __invoke(Post $post, User $user)
    {
        return $this->usecase->destroy($post, $user);
    }
}
