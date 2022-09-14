<?php


namespace App\Http\Actions;


use App\Models\Post;
use App\Usecase\PostLikeStoreUsecase;
use Illuminate\Http\Request;

class PostLikeStoreAction
{
    private $usecase;

    public function __construct(PostLikeStoreUsecase $usecase)
    {
        $this->usecase = $usecase;
    }

    public function __invoke(Post $post, Request $request)
    {
        return $this->usecase->store($post, $request);
    }
}
