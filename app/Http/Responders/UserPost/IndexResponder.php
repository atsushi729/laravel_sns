<?php


namespace App\Http\Responders\UserPost;


class IndexResponder
{
    public function handle($user, $posts)
    {
        return view('users.posts.index', [
            'user' => $user,
            'posts' => $posts,
        ]);
    }
}
