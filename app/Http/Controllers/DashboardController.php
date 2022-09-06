<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Mail\PostLiked;
use App\Http\Responders\DashboardResponder;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    protected $dashboardResponder;

    public function __construct(DashboardResponder $dashboardResponder)
    {
        $this->dashboardResponder = $dashboardResponder;
        $this->middleware(['auth']);
    }

    public function __invoke()
    {
        return $this->dashboardResponder->show();
    }
}
