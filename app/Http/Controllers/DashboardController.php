<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Mail\PostLiked;
use App\Http\Responders\DashboardResponder;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    private $responder;

    public function __construct(DashboardResponder $responder)
    {
        $this->responder = $responder;
        $this->middleware(['auth']);
    }

    public function __invoke()
    {
        return $this->responder->show();
    }
}
