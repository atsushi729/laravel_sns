<?php


namespace App\Usecase;


class UserPostIndexUsecase
{
    public function get($user)
    {
        $posts = $user->posts()->with(['user', 'likes'])->paginate(20);
        return $posts;
    }
}
