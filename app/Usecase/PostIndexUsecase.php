<?php


namespace App\Usecase;

use App\Models\Post;

class PostIndexUsecase
{
    public function run()
    {
        // return first 20 results
        $posts = Post::latest()->with(['user', 'likes'])->paginate(20);

        return $posts;
    }
}
