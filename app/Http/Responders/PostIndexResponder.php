<?php


namespace App\Http\Responders;


class PostIndexResponder
{
    public function handle($post)
    {
        return view('posts.index', [
            'posts' => $post,
        ]);
    }
}
