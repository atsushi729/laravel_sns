<?php


namespace App\Http\Actions\Post;


use App\Models\Post;
use App\Usecase\Post\DeleteUsecase;

class DestroyAction
{
    private $usecase;

    public function __construct(DeleteUsecase $usecase)
    {
        $this->usecase = $usecase;
    }

    public function __invoke(Post $post)
    {
        return $this->usecase->destroy($post);
    }
}
