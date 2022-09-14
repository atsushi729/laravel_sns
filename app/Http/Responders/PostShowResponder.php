<?php


namespace App\Http\Responders;


class PostShowResponder
{
    public function handle($post)
    {
        return view('posts.show', [
            'post' => $post,
        ]);
    }
}
