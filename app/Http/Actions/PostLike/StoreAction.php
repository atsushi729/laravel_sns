<?php


namespace App\Http\Actions\PostLike;


use App\Models\Post;
use App\Usecase\PostLike\StoreUsecase;
use Illuminate\Http\Request;

class StoreAction
{
    private $usecase;

    public function __construct(StoreUsecase $usecase)
    {
        $this->usecase = $usecase;
    }

    public function __invoke(Post $post, Request $request)
    {
        return $this->usecase->store($post, $request);
    }
}
