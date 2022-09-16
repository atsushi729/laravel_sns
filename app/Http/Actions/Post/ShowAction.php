<?php


namespace App\Http\Actions\Post;


use App\Http\Responders\Post\PostShowResponder;
use App\Models\Post;


class ShowAction
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
