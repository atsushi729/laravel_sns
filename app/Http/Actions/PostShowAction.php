<?php


namespace App\Http\Actions;


use App\Http\Responders\PostShowResponder;
use App\Models\Post;


class PostShowAction
{
    private $responder;

    public function __construct(PostShowResponder $responder)
    {
        $this->responder = $responder;
    }

    public function __invoke(Post $post)
    {
        return $this->responder->handle($post);
    }
}
