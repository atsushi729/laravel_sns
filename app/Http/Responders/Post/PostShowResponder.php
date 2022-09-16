<?php


namespace App\Http\Responders\Post;


class PostShowResponder
{
    public function handle($post)
    {
        return view('posts.show', [
            'post' => $post,
        ]);
    }
}
