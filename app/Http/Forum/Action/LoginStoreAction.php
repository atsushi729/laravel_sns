<?php

namespace App\Http\Forum\Action;

use \App\Http\Controllers\Controller;
use App\Http\Forum\Domain\Login;
use Illuminate\Http\Request;

class LoginStoreAction extends Controller
{
    private $domain;

    public function __construct(Login $domain)
    {
        $this->domain = $domain;
        $this->middleware(['guest']);
    }

    public function __invoke(Request $request)
    {
        return $this->domain->store($request);
    }
}

