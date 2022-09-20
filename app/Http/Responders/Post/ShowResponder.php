<?php


namespace App\Http\Responders\Post;


class ShowResponder
{
    public function handle($post)
    {
        return view('posts.show', [
            'post' => $post,
        ]);
    }
}
