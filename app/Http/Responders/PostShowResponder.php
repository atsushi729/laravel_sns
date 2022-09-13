<?php


namespace App\Http\Responders;


use App\Models\Post;

class PostShowResponder
{
    public function handle(Post $post)
    {
        return view('posts.show', [
            'post' => $post,
        ]);
    }
}
