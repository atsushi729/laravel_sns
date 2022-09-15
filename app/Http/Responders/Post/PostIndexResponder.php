<?php


namespace App\Http\Responders\Post;


class PostIndexResponder
{
    public function handle($post)
    {
        return view('posts.index', [
            'posts' => $post,
        ]);
    }
}
