<?php


namespace App\Http\Responders;


class UserPostIndexResponder
{
    public function handle($user, $posts)
    {
        return view('users.posts.index', [
            'user' => $user,
            'posts' => $posts,
        ]);
    }
}
