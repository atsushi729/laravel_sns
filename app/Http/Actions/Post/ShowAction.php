<?php


namespace App\Http\Actions\Post;


use App\Http\Responders\Post\ShowResponder;
use App\Models\Post;


class ShowAction
{
    private $responder;

    public function __construct(ShowResponder $responder)
    {
        $this->responder = $responder;
    }

    public function __invoke(Post $post)
    {
        return $this->responder->handle($post);
    }
}
