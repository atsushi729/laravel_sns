<?php


namespace App\Http\Responders\Post;


class IndexResponder
{
    public function handle($post)
    {
        return view('posts.index', [
            'posts' => $post,
        ]);
    }
}
