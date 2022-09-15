<?php


namespace App\Http\Actions\PostLike;


use App\Models\Post;
use App\Usecase\PostLike\DestroyUsecase;
use Illuminate\Http\Request;

class DestroyAction
{
    private $usecase;

    public function __construct(DestroyUsecase $usecase)
    {
        $this->usecase = $usecase;
    }

    public function __invoke(Post $post, Request $request)
    {
        return $this->usecase->destroy($post, $request);
    }
}
