<?php


namespace App\Usecase\Post;

use App\Models\Post;

class IndexUsecase
{
    public function run()
    {
        // return first 20 results
        $posts = Post::latest()->with(['user', 'likes'])->paginate(20);

        return $posts;
    }
}
