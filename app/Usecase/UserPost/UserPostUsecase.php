<?php


namespace App\Usecase\UserPost;


class UserPostUsecase
{
    public function get($user)
    {
        $posts = $user->posts()->with(['user', 'likes'])->paginate(20);
        return $posts;
    }
}
