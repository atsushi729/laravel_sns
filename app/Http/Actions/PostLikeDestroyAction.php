<?php


namespace App\Http\Actions;


use App\Models\Post;
use App\Usecase\PostLikeDestroyUsecase;
use Illuminate\Http\Request;

class PostLikeDestroyAction
{
    private $usecase;

    public function __construct(PostLikeDestroyUsecase $usecase)
    {
        $this->usecase = $usecase;
    }

    public function __invoke(Post $post, Request $request)
    {
        return $this->usecase->destroy($post, $request);
    }
}
